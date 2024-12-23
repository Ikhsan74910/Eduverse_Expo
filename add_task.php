<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'eduverse2';
$username = 'root';
$password = '';

// Buat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $total_steps = (int)$_POST['total_steps'];
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    $sql = "INSERT INTO tasks (title, description, total_steps, category) 
            VALUES (?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssis", $title, $description, $total_steps, $category);
    
    if (mysqli_stmt_execute($stmt)) {
        $task_id = mysqli_insert_id($conn);
        
        // Handle assigned users
        if (!empty($_POST['assigned_users'])) {
            $sql = "INSERT INTO task_assignees (task_id, user_id) VALUES (?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            
            foreach ($_POST['assigned_users'] as $user_id) {
                mysqli_stmt_bind_param($stmt, "is", $task_id, $user_id);
                mysqli_stmt_execute($stmt);
            }
        }
        
        // Handle assigned classes
        if (!empty($_POST['assigned_classes'])) {
            $sql = "INSERT INTO task_classes (task_id, class_id) VALUES (?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            
            foreach ($_POST['assigned_classes'] as $class_id) {
                mysqli_stmt_bind_param($stmt, "is", $task_id, $class_id);
                mysqli_stmt_execute($stmt);
            }
        }
        
        // Redirect setelah berhasil
        header('Location: #');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="icon" type="image/x-icon" href="logoeduverse-icon-removebg-preview.png">
    <link rel="stylesheet" href="css/add_task2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">  
        <!-- Add task form -->
            <form action="add_task.php" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="total_steps" class="form-label">Total Steps</label>
            <input type="number" name="total_steps" class="form-control" id="total_steps" required>
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" class="form-select" id="category" required>
                <option value="Development">Development</option>
                <option value="Marketing">Marketing</option>
                <option value="Design">Design</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Assign Class</label>
            <?php
            // Ambil daftar kelas dari database
            $class_query = "SELECT id, class_name FROM classes";
            $class_result = mysqli_query($conn, $class_query);
            while ($class = mysqli_fetch_assoc($class_result)) {
                echo '<div class="form-check">';
                echo '<input type="checkbox" name="assigned_classes[]" value="' . $class['id'] . '" class="form-check-input">';
                echo '<label class="form-check-label">' . htmlspecialchars($class['class_name']) . '</label>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Assign Users</label>
            <?php
            // Ambil daftar pengguna dari database
            $users_query = "SELECT id, username FROM users";
            $users_result = mysqli_query($conn, $users_query);
            while ($user = mysqli_fetch_assoc($users_result)) {
                echo '<div class="form-check">';
                echo '<input type="checkbox" name="assigned_users[]" value="' . $user['id'] . '" class="form-check-input">';
                echo '<label class="form-check-label">' . htmlspecialchars($user['username']) . '</label>';
                echo '</div>';
            }
            ?>
        </div>
        
        <button type="button" class="btn btn-primary" onclick="assignAll()">Assign All</button>
        <button type="submit" class="btn btn-success">Add Task</button>
        </form>

        <script>
        function assignAll() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = true);
        }
        </script>
    </div>
</body>
</html>

<?php
// Tutup koneksi setelah selesai
mysqli_close($conn);
?>
    