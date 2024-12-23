<!DOCTYPE html>
<html lang="id">
<!DOCTYPE html>
<html data-wf-page="66fb69c204b5487857087cf4" data-wf-site="66fb69c104b5487857087cee" data-wf-status="1" lang="en">

<head>
  <meta charset="utf-8" />
  <title> Eduverse</title>
  <meta
    content="Techiofy is a modern IT company website template for startups, SaaS businesses, IT services, tech consulting, and software companies. Its customizable design allows you to showcase your projects and services to enhance your online presence."
    name="description" />
  <meta content="Techiofy - Webflow HTML Website Template" property="og:title" />
  <meta
    content="Techiofy is a modern IT company website template for startups, SaaS businesses, IT services, tech consulting, and software companies. Its customizable design allows you to showcase your projects and services to enhance your online presence."
    property="og:description" />
  <meta content="images/og-image.jpg" property="og:image" />
  <meta content="Techiofy - Webflow HTML Website Template" property="twitter:title" />
  <meta
    content="Techiofy is a modern IT company website template for startups, SaaS businesses, IT services, tech consulting, and software companies. Its customizable design allows you to showcase your projects and services to enhance your online presence."
    property="twitter:description" />
  <meta content="images/og-image.jpg" property="twitter:image" />
  <meta property="og:type" content="website" />
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <link href="css/webflow-style.css" rel="stylesheet" type="text/css" />
  <style>
    @media (min-width:992px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="e7771677-ff07-4e4d-556f-428d0078357e"] {
        -webkit-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }
    }

    @media (max-width:991px) and (min-width:768px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="e7771677-ff07-4e4d-556f-428d0078357e"] {
        -webkit-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }
    }

    @media (max-width:767px) and (min-width:480px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="e7771677-ff07-4e4d-556f-428d0078357e"] {
        -webkit-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }
    }
  </style>
  <script type="text/javascript">
    ! function (o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className +=
        t + "touch")
    }(window, document);
  </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link href="images/app-icon.png" rel="apple-touch-icon" />
</head>

<body>
<?php
session_start();

// Pastikan pengguna sudah login
?>
<nav class="navbar">
    <div class="logo">Eduverse</div>
    <ul class="nav-links">
        <li><a href="presensi.php">Presensi</a></li>
        <li><a href="schedule.html">Jadwal</a></li>
        <li><a href="classroom.html">Classroom</a></li>
        <li><a href="#kontak">Asisten Virtual</a></li>
    </ul>
    <div class="action-buttons">
        <?php if (isset($_SESSION['username'])): ?>
            <!-- Tampilkan ikon profil dan nama pengguna jika login -->
            <div class="profile-menu">
                <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <img src="images/profile.png" alt="Profile Icon" class="profile-icon">
                <div class="dropdown-menu">
                    <a href="profile.php">Profil</a>
                    <a href="logout.php">Keluar</a>
                </div>
            </div>
        <?php else: ?>
            <!-- Tampilkan teks "Daftar" jika belum login -->
            <a href="register.php" class="btn btn-signup">Daftar</a>
        <?php endif; ?>
    </div>
</nav>

    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>  
    </section>
    <section class="landing-page-hero-section landing-page-hero-bg-image landing-page-hero-padding-top">
      <div class="w-layout-blockcontainer landing-page-container-default w-container">
        <div class="landing-page-hero-wrapper">
          <div class="landing-page-hero-content-wrapper">
            <h1 data-w-id="e7771677-ff07-4e4d-556f-428d0078327f"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-hero-title">Dashboard Personal Mahasiswa</h1>
            <p data-w-id="e7771677-ff07-4e4d-556f-428d00783281"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-hero-except">Dashboard mahasiswa adalah sebuah antarmuka digital yang dirancang untuk memberikan akses mudah dan terorganisir ke berbagai informasi akademik, tugas, dan kegiatan kampus. Dengan tampilan yang intuitif dan interaktif, dashboard ini berfungsi sebagai pusat informasi yang memfasilitasi pengalaman belajar mahasiswa.<br /></p>
            <div data-w-id="e7771677-ff07-4e4d-556f-428d00783284"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-hero-button-wrapper"><a data-w-id="e7771677-ff07-4e4d-556f-428d00783285" href="#Demo"
                class="landing-page-button w-inline-block">
                <div class="landing-page-button-text">Halaman Website</div>
                <div style="width:0%" class="landing-page-button-hover-block landing-page-gradient"></div>
              </a></div>
            <div class="landing-page-template-name-wrapper">
              <div data-w-id="e7771677-ff07-4e4d-556f-428d0078328a"
                style="-webkit-transform:translate3d(0, -70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="landing-page-template-name">Eduverse</div>
            </div>
          </div>
        </div>
      </div>
      <div class="landing-page-hero-outer-wrapper">
        <div data-w-id="e7771677-ff07-4e4d-556f-428d0078328d"
          style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="landing-page-hero-image-wrapper"><img data-w-id="e7771677-ff07-4e4d-556f-428d0078328e" loading="lazy"
            alt="Landing Page Hero Image Element" src="images/landing-page-hero-mockup.png"
            class="landing-page-hero-image-element" /><img sizes="100vw"
            srcset="images/landing-page-hero-image-p-500.png 500w, images/landing-page-hero-image-p-800.png 800w, images/landing-page-hero-image-p-1080.png 1080w, images/landing-page-hero-image.png 1920w"
            alt="Landing Page Hero Image Wrapper" src="images/landing-page-hero-image.png" loading="lazy"
            class="landing-page-hero-image" /></div>
        <div class="landing-page-hero-blurry-shape-wrapper">
          <div data-w-id="e7771677-ff07-4e4d-556f-428d00783291" class="landing-page-blurry-block-one"></div>
          <div class="landing-page-blurry-block-two"></div>
        </div>
        <div class="landing-page-hero-overlay"></div>
      </div>
    </section>
    <section id="Features"
      class="landing-page-core-features-section landing-page-padding-top-120px landing-page-padding-bottom-120px">
      <div class="w-layout-blockcontainer landing-page-container-default w-container">
        <div class="landing-page-core-features-wrapper">
          <div class="landing-page-section-heading-wrapper max-width-675px">
            <div data-w-id="e7771677-ff07-4e4d-556f-428d00783298"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-subtile-wrapper landing-page-gradient">
              <div class="landing-page-subtitle-text">Fitur Utama</div>
            </div>
            <h2 data-w-id="e7771677-ff07-4e4d-556f-428d0078329c"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-section-heading">Gateway Eduverse</h2>
          </div>
          <div class="landing-page-core-features-content-wrapper">
            <div class="landing-page-core-features-grid">
              <div data-w-id="e7771677-ff07-4e4d-556f-428d007832a0"
                style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="landing-page-core-feature-card">
                <div class="landing-page-core-features-icon-wrapper homepages"><img loading="lazy"
                    src="images/core-feature-homepage-icon.svg" alt="Landing Page Core Features Icon"
                    class="landing-page-core-features-icon" /></div>
                <div class="landing-page-core-features-card-content-block">
                  <h3 class="landing-page-core-features-heading">Absensi</h3>
                  <p class="landing-page-core-features-text">Mahasiswa Bisa melakukan Absensi kehadiran disini</p>
                </div>
              </div>
              <div data-w-id="e7771677-ff07-4e4d-556f-428d007832a8"
                style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="landing-page-core-feature-card">
                <div class="landing-page-core-features-icon-wrapper sections"><img loading="lazy"
                    src="images/core-feature-section-icon.svg" alt="Landing Page Core Features Icon"
                    class="landing-page-core-features-icon" /></div>
                <div class="landing-page-core-features-card-content-block">
                  <h3 class="landing-page-core-features-heading">Classroom</h3>
                  <p class="landing-page-core-features-text">Mahasiswa Dapat mengumpulkan tugas disini</p>
                </div>
              </div>
              <div data-w-id="e7771677-ff07-4e4d-556f-428d007832b0"
                style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="landing-page-core-feature-card">
                <div class="landing-page-core-features-icon-wrapper components"><img loading="lazy"
                    src="images/core-feature-component-icon.svg" alt="Landing Page Core Features Icon"
                    class="landing-page-core-features-icon" /></div>
                <div class="landing-page-core-features-card-content-block">
                  <h3 class="landing-page-core-features-heading">Manajemen Proyek</h3>
                  <p class="landing-page-core-features-text">Mahasiswa Bisa memanage proyeknya disini</p>
                </div>
              </div>
            </div>
            <div class="landing-page-core-features-shape-wrapper">
              <div class="landing-page-core-features-shape-one"></div>
              <div class="landing-page-core-features-shape-two"></div>
              <div class="landing-page-core-features-shape-three"></div>
              <div class="landing-page-core-features-shape-four"></div>
              <div class="landing-page-core-features-shape-five"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class="landing-page-promotioanl-video-section landing-page-promotional-video-bg landing-page-padding-top-120px landing-page-padding-bottom-120px">
      <div class="w-layout-blockcontainer landing-page-container-default w-container">
        <div class="landing-page-promotional-video-wrapper">
          <div class="landing-page-promotional-video-image-wrapper">
            <div class="landing-page-promotional-video-overlay"></div><img
              sizes="(max-width: 767px) 91vw, (max-width: 991px) 698px, (max-width: 1279px) 918px, 1158px"
              srcset="images/zain.png 500w, images/zain.png 800w, images/zain.png 1080w, images/zain.png 1170w"
              alt="Landing Page Promotional Video IMage" src="images/landing-page-video-image.jpg" loading="lazy"
              class="landing-page-promotional-video-image" /><a href="#"
              class="landing-page-promotional-video-lightbox landing-page-gradient w-inline-block w-lightbox">
              <div class="landing-page-promotional-video-play-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                  width="17" height="23" viewBox="0 0 17 23" fill="none">
                  <path
                    d="M15.6345 9.85726C16.7801 10.6528 16.7801 12.3472 15.6345 13.1427L3.14079 21.8189C1.81458 22.7399 8.02847e-08 21.7908 1.38962e-07 20.1762L7.69562e-07 2.82385C8.28239e-07 1.20921 1.81458 0.260123 3.14079 1.18111L15.6345 9.85726Z"
                    fill="currentColor" />
                </svg></div>
              <script type="application/json" class="w-json">
              {
                          "items": [{
                            "url": "https://www.youtube.com/watch?v=Gn2LBkkXvac",
                            "originalUrl": "https://www.youtube.com/watch?v=Gn2LBkkXvac",
                            "width": 940,
                            "height": 528,
                            "thumbnailUrl": "https://i.ytimg.com/vi/Gn2LBkkXvac/hqdefault.jpg",
                            "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FGn2LBkkXvac%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DGn2LBkkXvac&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FGn2LBkkXvac%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\"></iframe>",
                            "type": "video"
                          }],
                          "group": ""
                        }                   

                       
              </script>
            </a>
          </div>
          <div class="landing-page-promotional-video-shape-wrapper">
            <div data-w-id="e7771677-ff07-4e4d-556f-428d007832c7" class="landing-page-promotional-video-shape-one">
            </div>
            <div data-w-id="e7771677-ff07-4e4d-556f-428d007832c8" class="landing-page-promotional-video-shape-two">
            </div>
          </div>
        </div>
      </div>
      <div data-w-id="e7771677-ff07-4e4d-556f-428d007832c9"
        class="landing-page-promotional-video-banner-wrapper landing-page-gradient">
        <div class="landing-page-promotional-video-marquee">
          <div
            style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
            class="landing-page-promotional-video-marquee-container">
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
          </div>
          <div
            style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
            class="landing-page-promotional-video-marquee-container">
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
          </div>
          <div
            style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
            class="landing-page-promotional-video-marquee-container">
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
            <div class="landing-page-promotional-video-marquee-item"><img loading="lazy"
                src="images/landing-page-marquee-icon.svg" alt="Landing Page Marquee Icon"
                class="landing-page-promotional-video-marquee-icon" />
              <div class="landing-page-promotional-video-marquee-text">Eduverse</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="Demo"
      class="landing-page-template-showcase-section landing-page-padding-top-120px landing-page-padding-bottom-120px">
      <div class="w-layout-blockcontainer landing-page-container-default template-showcase w-container">
        <div class="landing-page-template-showcase-wrapper">
          <div class="landing-page-section-heading-wrapper">
            <div data-w-id="e7771677-ff07-4e4d-556f-428d00783302"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-subtile-wrapper landing-page-gradient">
              <div class="landing-page-subtitle-text">All Pages</div>
            </div>
            <h2 data-w-id="e7771677-ff07-4e4d-556f-428d00783306"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-section-heading">Halaman Fitur<br />Gateway</h2>
          </div>
          <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100"
            class="landing-page-template-showcase-tab w-tabs">
            <div data-w-id="e7771677-ff07-4e4d-556f-428d0078330b"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-template-showcase-tab-menu w-tab-menu"><a data-w-tab="Tab 1"
                class="landing-page-template-showcase-tab-link w-inline-block w-tab-link w--current">
                <div>Fitur Utama</div>
              </a><a data-w-tab="Tab 2" class="landing-page-template-showcase-tab-link w-inline-block w-tab-link">
                <div>Fitur Tambahan</div>
              </a></div>
            <div class="landing-page-template-showcase-content w-tab-content">
              <div data-w-tab="Tab 1" class="landing-page-template-showcase-tab-pane w-tab-pane w--tab-active">
                <div class="landing-page-template-showcase-grid">
                  <div data-w-id="e7771677-ff07-4e4d-556f-428d00783315"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="landing-page-template-showcase-page-wrapper"><a href="schedule.html"
                      data-w-id="e7771677-ff07-4e4d-556f-428d00783316" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 88vw, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/home-one-p-500.jpg 500w, images/home-one-p-800.jpg 800w, images/home-one.jpg 860w"
                        alt="HT Page Thumbnail" src="images/home-one.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/about-us" target="_blank"
                        class="landing-page-template-showcase-page-name">Jadwal</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="e7771677-ff07-4e4d-556f-428d00783342"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="landing-page-template-showcase-page-wrapper"><a href="absensi2.php"
                      data-w-id="e7771677-ff07-4e4d-556f-428d00783343" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 88vw, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/projects-p-500.jpg 500w, images/projects-p-800.jpg 800w, images/Enel.jpg 860w"
                        alt="HT Page Thumbnail" src="images/projects.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper"> 
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/projects" target="_blank"
                        class="landing-page-template-showcase-page-name">Presensi</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="e7771677-ff07-4e4d-556f-428d00783351"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="landing-page-template-showcase-page-wrapper"><a href="/projects/cloud-migration"
                      data-w-id="e7771677-ff07-4e4d-556f-428d00783352" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 88vw, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/project-details-p-500.jpg 500w, images/project-details-p-800.jpg 800w, images/project-details.jpg 860w"
                        alt="HT Page Thumbnail" src="images/project-details.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/projects/cloud-migration"
                        target="_blank" class="landing-page-template-showcase-page-name">Manajemen Proyek</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="e7771677-ff07-4e4d-556f-428d00783360"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="landing-page-template-showcase-page-wrapper"><a href="/blog"
                      data-w-id="e7771677-ff07-4e4d-556f-428d00783361" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 88vw, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/blog-p-500.jpg 500w, images/blog-p-800.jpg 800w, images/blog.jpg 860w"
                        alt="HT Page Thumbnail" src="images/blog.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/blog" target="_blank"
                        class="landing-page-template-showcase-page-name">Asisten Virtual Berbasis AI</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="e7771677-ff07-4e4d-556f-428d0078336f"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="landing-page-template-showcase-page-wrapper"><a
                      href="/post/harnessing-the-power-of-data-analytics-for-business-growth"
                      data-w-id="e7771677-ff07-4e4d-556f-428d00783370" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 88vw, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/blog-details-p-500.jpg 500w, images/blog-details-p-800.jpg 800w, images/blog-details.jpg 860w"
                        alt="HT Page Thumbnail" src="images/blog-details.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a
                        href="/post/harnessing-the-power-of-data-analytics-for-business-growth" target="_blank"
                        class="landing-page-template-showcase-page-name">Blog Details</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div id="w-node-_04d80d9b-7849-c5f6-350c-911a82e78a69-57087cf4"
                    data-w-id="04d80d9b-7849-c5f6-350c-911a82e78a69"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="landing-page-template-showcase-page-wrapper"><a href="/contact-us"
                      data-w-id="04d80d9b-7849-c5f6-350c-911a82e78a6a" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 88vw, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/contact-us-p-500.jpg 500w, images/contact-us-p-800.jpg 800w, images/contact-us.jpg 860w"
                        alt="HT Page Thumbnail" src="images/contact-us.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/contact-us" target="_blank"
                        class="landing-page-template-showcase-page-name">Contact Us</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-w-tab="Tab 2" class="landing-page-template-showcase-tab-pane w-tab-pane">
                <div class="landing-page-template-showcase-grid">
                  <div class="landing-page-template-showcase-page-wrapper"><a
                      data-w-id="e7771677-ff07-4e4d-556f-428d007833ae" href="/401" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 79vw, (max-width: 767px) 300.20001220703125px, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/401-p-500.jpg 500w, images/401-p-800.jpg 800w, images/401.jpg 860w"
                        alt="HT Page Thumbnail" src="images/401.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/401" target="_blank"
                        class="landing-page-template-showcase-page-name">Password Protected</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div class="landing-page-template-showcase-page-wrapper"><a
                      data-w-id="e7771677-ff07-4e4d-556f-428d007833bd" href="/404" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 79vw, (max-width: 767px) 262.8666687011719px, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/404-p-500.jpg 500w, images/404-p-800.jpg 800w, images/404.jpg 860w"
                        alt="HT Page Thumbnail" src="images/404.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/404" target="_blank"
                        class="landing-page-template-showcase-page-name">404 Not Found</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div id="w-node-e7771677-ff07-4e4d-556f-428d007833cb-57087cf4"
                    class="landing-page-template-showcase-page-wrapper"><a href="/template-info/style-guide"
                      data-w-id="e7771677-ff07-4e4d-556f-428d007833cc" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 79vw, (max-width: 767px) 239.7166748046875px, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/style-guide-p-500.jpg 500w, images/style-guide-p-800.jpg 800w, images/style-guide.jpg 860w"
                        alt="HT Page Thumbnail" src="images/style-guide.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/template-info/style-guide"
                        target="_blank" class="landing-page-template-showcase-page-name">Style Guide</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div id="w-node-e7771677-ff07-4e4d-556f-428d007833da-57087cf4"
                    class="landing-page-template-showcase-page-wrapper"><a href="/template-info/licenses"
                      data-w-id="e7771677-ff07-4e4d-556f-428d007833db" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 76vw, (max-width: 767px) 220.14999389648438px, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/licenses-p-500.jpg 500w, images/licenses-p-800.jpg 800w, images/licenses.jpg 860w"
                        alt="HT Page Thumbnail" src="images/licenses.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/template-info/licenses"
                        target="_blank" class="landing-page-template-showcase-page-name">Licenses</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                  <div id="w-node-e7771677-ff07-4e4d-556f-428d007833e9-57087cf4"
                    class="landing-page-template-showcase-page-wrapper"><a href="/template-info/changelog"
                      data-w-id="e7771677-ff07-4e4d-556f-428d007833ea" target="_blank"
                      class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img
                        sizes="(max-width: 479px) 78vw, (max-width: 767px) 234.39999389648438px, (max-width: 991px) 311px, (max-width: 1279px) 421px, (max-width: 1439px) 342px, 422px"
                        srcset="images/changelog-p-500.jpg 500w, images/changelog-p-800.jpg 800w, images/changelog.jpg 860w"
                        alt="HT Page Thumbnail" src="images/changelog.jpg" loading="lazy"
                        class="landing-page-template-showcase-thumbnail" />
                      <div style="opacity:0" class="landing-page-thumbnail-overlay">
                        <div class="landing-page-view-template-button-wrapper">
                          <div class="landing-page-view-template-button"><img loading="lazy"
                              src="images/cursor-icon.svg" alt="Landing Page Cursor Icon"
                              class="landing-page-cursor-icon" /></div>
                        </div>
                      </div>
                    </a>
                    <div class="landing-page-template-showcase-info-wrapper"><a href="/template-info/changelog"
                        target="_blank" class="landing-page-template-showcase-page-name">Changelog</a>
                      <div class="landing-page-badge-wrapper">
                        <div class="landing-page-badge">Popular</div>
                        <div class="landing-page-badge new">New</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </section>
    <section data-w-id="e7771677-ff07-4e4d-556f-428d0078341c"
      class="landing-page-featured-section-marquee-section landing-page-padding-top-120px landing-page-padding-bottom-120px">
      <div class="w-layout-blockcontainer landing-page-container-default w-container">
        <div class="landing-page-section-heading-wrapper">
          <div class="landing-page-subtile-wrapper landing-page-gradient">
            <div class="landing-page-subtitle-text">Inner Pages</div>
          </div>
          <h2 class="landing-page-section-heading">Creator<br />Gateway</h2>
        </div>
      </div>
      <div class="landing-page-featured-section-marquee">
        <div
          style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
          class="landing-page-featured-section-container">
          <div class="landing-page-featured-section-item"><a href="/home/home-one7"
              data-w-id="e7771677-ff07-4e4d-556f-428d0078342a" target="_blank"
              class="landing-page-template-featured-section-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/home-one-p-500-1.jpg 500w, images/Enel.jpg 800w, images/nabil.jpg 968w"
                alt="HT Page Thumbnail" src="images/home-one-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
          <div class="landing-page-featured-section-item"><a href="/home/home-two"
              data-w-id="e7771677-ff07-4e4d-556f-428d00783431" target="_blank"
              class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/home-two-p-500-1.jpg 500w, images/home-two-p-800-1.jpg 800w, images/Enel.jpg 968w"
                alt="HT Page Thumbnail" src="images/home-two-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
          <div class="landing-page-featured-section-item"><a href="/about-us"
              data-w-id="e7771677-ff07-4e4d-556f-428d00783438" target="_blank"
              class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/about-us-p-500-1.jpg 500w, images/about-us-p-800-1.jpg 800w, images/nabil.jpg 968w"
                alt="HT Page Thumbnail" src="images/about-us-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
          <div class="landing-page-featured-section-item"><a href="/projects"
              data-w-id="e7771677-ff07-4e4d-556f-428d0078343f" target="_blank"
              class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/projects-p-500-1.jpg 500w, images/projects-p-800-1.jpg 800w, images/nabil.jpg 968w"
                alt="HT Page Thumbnail" src="images/projects-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
          <div class="landing-page-featured-section-item"><a href="/projects/cloud-migration"
              data-w-id="e7771677-ff07-4e4d-556f-428d00783446" target="_blank"
              class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/project-details-p-500-1.jpg 500w, images/project-details-p-800-1.jpg 800w, images/nabil2.jpg 968w"
                alt="HT Page Thumbnail" src="images/project-details-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
          <div class="landing-page-featured-section-item"><a href="/blog"
              data-w-id="e7771677-ff07-4e4d-556f-428d0078344d" target="_blank"
              class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/blog-p-500-1.jpg 500w, images/blog-p-800-1.jpg 800w, images/nabil3.jpg 968w"
                alt="HT Page Thumbnail" src="images/blog-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
          <div class="landing-page-featured-section-item"><a
              href="/post/harnessing-the-power-of-data-analytics-for-business-growth"
              data-w-id="e7771677-ff07-4e4d-556f-428d00783454" target="_blank"
              class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/blog-details-p-500-1.jpg 500w, images/blog-details-p-800-1.jpg 800w, images/Test.jpg 968w"
                alt="HT Page Thumbnail" src="images/blog-details-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
          <div class="landing-page-featured-section-item"><a href="/services/on-page-seo"
              data-w-id="e7771677-ff07-4e4d-556f-428d0078345b" target="_blank"
              class="landing-page-template-showcase-thumbnail-wrapper w-inline-block"><img sizes="100vw"
                srcset="images/service-details-p-500-1.jpg 500w, images/service-details-p-800-1.jpg 800w, images/yog.jpg 968w"
                alt="HT Page Thumbnail" src="images/service-details-1.jpg" loading="lazy"
                class="landing-page-featured-section-thumbnail" />
              <div style="opacity:0" class="landing-page-thumbnail-overlay">
                <div class="landing-page-view-template-button-wrapper">
                  <div class="landing-page-view-template-button"><img loading="lazy" src="images/cursor-icon.svg"
                      alt="Landing Page Cursor Icon" class="landing-page-cursor-icon" /></div>
                </div>
              </div>
            </a></div>
      </div>
    </section>
    <section
      class="landing-page-template-features-section landing-page-padding-top-120px landing-page-padding-bottom-120px nding-page-rquest-figma-section">
      <div class="w-layout-blockcontainer landing-page-container-fluid w-container">
        <div class="landing-page-template-features-wrapper">
          <div class="landing-page-section-heading-wrapper">
            <div data-w-id="e7771677-ff07-4e4d-556f-428d0078352b"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-subtile-wrapper landing-page-gradient">
              <div class="landing-page-subtitle-text">Top-Notch Features</div>
            </div>
            <h2 data-w-id="e7771677-ff07-4e4d-556f-428d0078352f"
              style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              class="landing-page-section-heading">Solusi inovatif untuk kebutuhan<br />Modern  Anda</h2>
          </div>
          <div data-w-id="e7771677-ff07-4e4d-556f-428d00783533"
            style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="landing-page-template-features-grid">
            <div id="w-node-e7771677-ff07-4e4d-556f-428d00783534-57087cf4" class="landing-page-template-feature-item">
              <div class="landing-page-template-feature-icon-wrapper"><img loading="lazy"
                  src="images/responsive-design.svg" alt="Landing Page Premium Features Icon Wrapper"
                  class="landing-page-teamplate-features-icon" /></div>
              <div class="landing-page-template-feature-text">Akses<br />Fleksible</div>
            </div>
            <div class="landing-page-template-feature-item">
              <div class="landing-page-template-feature-icon-wrapper"><img loading="lazy"
                  src="images/speed-optimized.svg" alt="Landing Page Premium Features Icon Wrapper"
                  class="landing-page-teamplate-features-icon" /></div>
              <div class="landing-page-template-feature-text">Cepat <br />dan Stabil</div>
            </div>
            <div class="landing-page-template-feature-item">
              <div class="landing-page-template-feature-icon-wrapper"><img loading="lazy" src="images/seo-friendly.svg"
                  alt="Landing Page Premium Features Icon Wrapper" class="landing-page-teamplate-features-icon" /></div>
              <div class="landing-page-template-feature-text">informasi <br />mudah diakses</div>
            </div>
            <div class="landing-page-template-feature-item">
              <div class="landing-page-template-feature-icon-wrapper"><img loading="lazy"
                  src="images/fully-customizable.svg" alt="Landing Page Premium Features Icon Wrapper"
                  class="landing-page-teamplate-features-icon" /></div>
              <div class="landing-page-template-feature-text">Disesuaikan <br />dengan Kebutuhan Mahasiswa</div>
            </div>
            <div class="landing-page-template-feature-item">
              <div class="landing-page-template-feature-icon-wrapper"><img loading="lazy" src="images/interactive.svg"
                  alt="Landing Page Premium Features Icon Wrapper" class="landing-page-teamplate-features-icon" /></div>
              <div class="landing-page-template-feature-text">Interaktif &amp; <br /> dan Dinamis</div>
            </div>
            <div class="landing-page-template-feature-item">
              <div class="landing-page-template-feature-icon-wrapper"><img loading="lazy" src="images/zero-coding.svg"
                  alt="Landing Page Premium Features Icon Wrapper" class="landing-page-teamplate-features-icon" /></div>
              <div class="landing-page-template-feature-text">Mudah <br />Digunakan</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="landing-page-footer landing-page-footer-bg-image landing-page-padding-top-120px">
      <div class="landing-page-footer-wrapper">
        <div class="w-layout-blockcontainer landing-page-container-default w-container">
          <div class="landing-page-footer-upper-container">
            <div class="landing-page-footer-content-wrapper">
              <div class="landing-page-footer-content-block">
                <h2 data-w-id="e7771677-ff07-4e4d-556f-428d007835c3"
                  style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                  class="landing-page-footer-title">Akses cepat dan mudah ke informasi kampus, tugas, dan kegiatan—semua dalam satu Gateway Kampus.
                </h2>
                <p data-w-id="e7771677-ff07-4e4d-556f-428d007835c5"
                  style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                  class="landing-page-footer-except">Solusi inovatif untuk kebutuhan modern Anda.<br /></p>
              </div>
              <div data-w-id="e7771677-ff07-4e4d-556f-428d007835c8"
                style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="landing-page-footer-button-wrapper"><a data-w-id="e7771677-ff07-4e4d-556f-428d007835c9"
                  href="#" target="_blank"
                  class="landing-page-footer-button w-inline-block">
                  <div class="landing-page-footer-button-icon landing-page-button-text w-embed"></div>
                  <div class="landing-page-button-text">Mulai Perjalanan anda sekarang</div>
                  <div style="width:100%" class="landing-page-button-hover-block landing-page-gradient"></div>
                </a></div>
              <div data-w-id="e7771677-ff07-4e4d-556f-428d007835ce"
                style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="landing-page-footer-brand-wrapper">
                <div class="landing-page-brand-text">Designed by Eduverse</div>
              </div>
            </div>
            <div class="landing-page-footer-blurry-shape-wrapper">
              <div data-w-id="e7771677-ff07-4e4d-556f-428d007835d4" class="landing-page-promotional-footer-shape-one">
              </div>
              <div data-w-id="e7771677-ff07-4e4d-556f-428d007835d5" class="landing-page-footer-blurry-block-two"></div>
            </div>
          </div>
        </div>
        <div class="landing-page-footer-lower-container">
          <div class="w-layout-blockcontainer landing-page-container-default w-container">
            <div class="landing-page-copyright-content-wrapper">
              <div class="landing-page-footer-copyright-text">Copyright © Arzal Nabil | Designed by <a
                  href="https://brandbes.com/webflow-templates" target="_blank"
                  class="landing-page-footer-copyright-link">Nabil</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/webflow-script.js" type="text/javascript"></script>
</body>

</html>