<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kelas - Lingkar Pendidikan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="kelas.css" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg">
      <div class="container">
        <a class="logo navbar-brand text-black" href="../Home/index.php">
          <img src="../Images/logobesar.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-mid" />
          Lingkar Pendidikan
        </a>

        <!-- Tombol Toggle Navbar (penting untuk responsive) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="../Home/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../About Us/about_us.php">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kelas.php">Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Program/program.php">Program</a>
            </li>
          </ul>

          <!-- Tampilkan username dan Logout jika sudah login -->
          <?php if (isset($_SESSION['user'])): ?>
            <div class="d-flex align-items-center">
              <span class="me-3 text-dark"><b>Halo, <?= htmlspecialchars($_SESSION['user']) ?></b></span>
              <a href="../Auth/logout.php" class="btn btn-danger btn-sm">Logout</a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </nav>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 60 1440 100">
      <path
        fill="#A7E6FF"
        fill-opacity="1"
        d="M0,96L60,112C120,128,240,160,360,154.7C480,149,600,107,720,90.7C840,75,960,85,1080,96C1200,107,1320,117,1380,122.7L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
      ></path>
    </svg>

        <!-- KELAS -->
        <section id="kelas">
      <div class="container">
        <center>
          <h2 style="font-size: 40px">
            <b><span style="color: #050c9c">Kelas</span> Kami</b>
          </h2>
          <br />

          <div class="row align-items-center">
            <div class="col-12">
              <p class="lead">
                Lingkar Pendidikan menyediakan kelas yang terbagi menjadi 2 yaitu, Fokus Kelas Perguruan Tinggi dan Fokus Kelas Sekolah Kedinasan. Fokus Kelas Perguruan Tinggi merupakan kelas yang membahas tentang seputar masuk kampus
                perguruan tinggi. Fokus Kelas Sekolah Kedinasan merupakan kelas yang membahas tentang seputar masuk sekolah kedinasan.
              </p>
              <p class="lead">
                Dalam kelas tersebut, peserta akan mendapatkan pembelajaran yang terstruktur dan dibimbing oleh mentor yang berpengalaman. Peserta juga akan mendapatkan materi yang lengkap dan terupdate serta mendapatkan try out yang
                berkualitas.
              </p>
            </div>
          </div>
        </center>
        <br /><br />

          <h3 style="color: #050c9c; font-size: 30px; text-align: center;"><b>Program Kelas</b></h3>
          <br />
          <div class="row align-items-start">
            <div class="col-2">
              <img id="logo-kelas" src="../Images/ptn.png" alt="Kelas Perguruan Tinggi" />
            </div>
            <br />

            <!-- Kelas Perguruan Tinggi -->
            <div class="col-6">
              <h4>Fokus Kelas Perguruan Tinggi</h4>
              <p class="lead">Kelas intensif bersama mentor, tersedia buku dan materi lengkap</p>
              <a class="btn-kelas" href="perguruan_tinggi.php">Lihat Kelas</a>
            </div>
          </div>

          <br><br>

          <!-- Kelas Sekolah Kedinasan -->
          <div class="row align-items-start">
            <div class="col-2">
            <img id="logo-kelas" src="../Images/kedinasan.png" alt="Fokus Kelas Kedinasan" />
            </div>
            <br />
            <div class="col-6">
              <h4>Fokus Kelas Sekolah Kedinasan</h4>
              <p class="lead">Kelas intensif bersama mentor, tersedia buku dan materi lengkap</p>
              <a class="btn-kelas" href="sekdin.php">Lihat Kelas</a>
            </div>
          </div>

      </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 200">
      <path
        fill="#A7E6FF"
        fill-opacity="1"
        d="M0,224L40,197.3C80,171,160,117,240,117.3C320,117,400,171,480,165.3C560,160,640,96,720,96C800,96,880,160,960,186.7C1040,213,1120,203,1200,186.7C1280,171,1360,149,1400,138.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>

    <!-- KONTAK -->
    <section id="kontak" style="background-color: #A7E6FF">
      <div class="container">
        <center>
          <h2 style="font-size: 40px">
            <b><span style="color: #050c9c">Kontak</span> Kami</b>
          </h2>
        </center>
        <br /><br />

        <div class="row">
          <div class="col-6">
            <p class="lead">
              Lingkar Pendidikan merupakan sebuah lingkar organisasi yang sebelumnya berawal dari komunitas online di Instagram dimana didalamnya membahas tentang seputar masuk kampus. Lingkar Pendidikan siap membantu dan melayani anda.
              Jika anda memiliki pertanyaan atau ingin berdiskusi lebih lanjut, jangan ragu untuk menghubungi kami melalui kontak yang tersedia.
            </p>
            <p class="fw-bolder">&copy; LingkarPendidikan 2022. All Rights Reserved</p>
          </div>
          <div id="link-kontak" class="col-3">
            <a href="../Home/index.php">Home</a><br /><br />
            <a href="../About Us/about_us.php">Tentang Kami</a><br /><br />
            <a href="../Program/program.php">Program</a><br /><br />
          </div>
          <div class="col-3">
            <h6>Alamat</h6>
            <p class="lead">Purwokerto, Jawa Tengah</p>

            <h6>Email</h6>
            <p class="lead">LingkarPendidikan@gmail.com</p>

            <h6>Media Sosial</h6>
            <ion-icon name="logo-instagram"></ion-icon>
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-linkedin"></ion-icon>
            <ion-icon name="logo-youtube"></ion-icon>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- ION Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
      // Merubah ukuran font class logo
      document.querySelector(".logo").style.fontSize = "24px";
      document.querySelector(".logo").style.fontWeight = "bold";

      // Merubah text warna dan ukuran pada nav-link
      document.querySelectorAll(".nav-link").forEach((item) => {
        item.style.color = "black";
      });
      document.querySelectorAll(".nav-link").forEach((item) => {
        item.style.fontSize = "20px";
      });
    </script>
  </body>
</html>
