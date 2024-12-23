document.getElementById('presensiForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const kode = document.getElementById('kodePresensi').value;
    const alertDiv = document.getElementById('alertMessage');
    
    const formData = new FormData();
    formData.append('validate_code', true);
    formData.append('kode_presensi', kode);
    formData.append('nim', userNim);
    
    fetch('submit_presensi.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === 'success') {
            showAlert('success', 'Presensi berhasil dicatat!');
            setTimeout(() => {
                window.location.reload();
            }, 2000);
        } else {
            showAlert('error', data.message || 'Kode tidak valid');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showAlert('error', 'Terjadi kesalahan saat memproses presensi');
    });
});

function showAlert(type, message) {
    const alertDiv = document.getElementById('alertMessage');
    alertDiv.className = `alert alert-${type === 'success' ? 'success' : 'danger'}`;
    alertDiv.textContent = message;
    alertDiv.style.display = 'block';
    
    if(type === 'success') {
        const modalButton = document.querySelector('[data-bs-dismiss="modal"]');
        setTimeout(() => {
            modalButton.click();
        }, 2000);
    }
}