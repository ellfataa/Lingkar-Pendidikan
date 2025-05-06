<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lingkar Pendidikan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="home.css" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg">
      <div class="container">
        <a class="logo navbar-brand text-black" href="index.php">
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../About Us/about_us.php">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Kelas/kelas.php">Kelas</a>
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

    <!-- HERO -->
    <section id="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-7">
            <p class="lead">#SemangatBelajar</p>
            <h1 style="font-size: 50px"><b>Raih mimpimu dengan belajar bersama kami</b></h1>
            <p class="lead">Belajar sesuai arahan yang telah disusun baik dengan dibimbing oleh mentor berpengalaman.</p>
            <a id="button-hero" class="btn btn-primary btn-lg" href="../Program/program.php" role="button">Pilih Program</a>
          </div>
          <div class="col-5 me-auto">
            <img id="logo-hero" src="../Images/logoawal.png" alt="Logo-Awal" width="500px" height="500px" />
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 20 1440 200">
      <path
        fill="#A7E6FF"
        fill-opacity="1"
        d="M0,160L34.3,176C68.6,192,137,224,206,213.3C274.3,203,343,149,411,128C480,107,549,117,617,128C685.7,139,754,149,823,138.7C891.4,128,960,96,1029,117.3C1097.1,139,1166,213,1234,208C1302.9,203,1371,117,1406,74.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
      ></path>
    </svg>

    <!-- TENTANG KAMI -->
    <section style="background-color: #a7e6ff" id="tentang-kami">
      <div class="container">
        <center>
          <h2 style="font-size: 40px">
            <b><span style="color: #050c9c">Tentang</span> Kami</b>
          </h2>
        </center>
        <br />
        <div class="row align-items-center">
          <div class="col-4">
            <img id="logo-tentangKami" src="../Images/logobesar.png" alt="Lingkar Pendidikan" width="320px" height="320px" />
          </div>
          <div class="col-8">
            <p class="lead">
              Lingkar Pendidikan merupakan sebuah lingkar organisasi yang sebelumnya berawal dari komunitas online di Instagram dimana didalamnya membahas tentang seputar masuk kampus. Lingkar Pendidikan berisikan anggota yang sangat peduli
              terhadap generasi muda bangsa untuk melanjutkan pendidikan di kampus impiannya dan mewujudkan cita-cita yang diinginkanya.
            </p>
            <p class="lead">
              Tidak sekedar membahas tentang seputar masuk kampus, Lingkar Pendidikan juga menyediakan kelas yang terbagi menjadi 2 yaitu, Fokus Kelas Perguruan Tinggi dan Fokus Kelas Sekolah Kedinasan. Selain menyediakan kelas, Lingkar
              Pendidikan juga menyediakan 2 program unggulan seperti, Try Out dan Webinar.
            </p>
          </div>
        </div>
        <br />
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 300">
      <path
        fill="#A7E6FF"
        fill-opacity="1"
        d="M0,192L24,181.3C48,171,96,149,144,165.3C192,181,240,235,288,229.3C336,224,384,160,432,165.3C480,171,528,245,576,266.7C624,288,672,256,720,250.7C768,245,816,267,864,261.3C912,256,960,224,1008,176C1056,128,1104,64,1152,80C1200,96,1248,192,1296,218.7C1344,245,1392,203,1416,181.3L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"
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
        <center>
          <h3 style="color: #050c9c; font-size: 30px"><b>Program Kelas</b></h3>
          <br />
          <div class="row align-items-center">
            <div class="col-6">
              <h4>Fokus Kelas Perguruan Tinggi</h4>
              <img id="logo-kelas" src="../Images/ptn.png" alt="Kelas Perguruan Tinggi" />
              <p class="lead">Kelas intensif bersama mentor, tersedia buku dan materi lengkap</p>
            </div>
            <br />
            <div class="col-6">
              <h4>Fokus Kelas Sekolah Kedinasan</h4>
              <img id="logo-kelas" src="../Images/kedinasan.png" alt="Fokus Kelas Kedinasan" />
              <p class="lead">Kelas intensif bersama mentor, tersedia buku dan materi lengkap</p>
            </div>
          </div>
        </center>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 200">
      <path
        fill="#A7E6FF"
        fill-opacity="1"
        d="M0,224L40,197.3C80,171,160,117,240,117.3C320,117,400,171,480,165.3C560,160,640,96,720,96C800,96,880,160,960,186.7C1040,213,1120,203,1200,186.7C1280,171,1360,149,1400,138.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>

    <!-- PROGRAM -->
    <section style="background-color: #a7e6ff" id="program">
      <div class="container">
        <center>
          <h2 style="font-size: 40px">
            <b><span style="color: #050c9c">Program</span> Kami</b>
          </h2>

          <div class="row align-items-center">
            <div class="col-6">
              <h4>Try Out</h4>
              <img src="../Images/sbmptn.png" alt="Try Out" width="220px" height="220px" />
              <p class="lead">Soal berkualitas dan disusun oleh mentor yang berpengalaman. Simulasi tryout terlengkap! dengan fitur dan pembahasan soal yang akurat</p>
            </div>
            <br /><br />

            <div class="col-6">
              <h4>Webinar</h4>
              <img src="../Images/webinar.png" alt="Webinar" width="220px" height="220px" />
              <p class="lead">Webinar yang digarap secara profesional melalui via ZOOM bertujuan meningkatkan semangat adik-adik dalam meraih kesuksesan</p>
            </div>
          </div>
        </center>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 250">
      <path
        fill="#A7E6FF"
        fill-opacity="1"
        d="M0,224L34.3,234.7C68.6,245,137,267,206,277.3C274.3,288,343,288,411,261.3C480,235,549,181,617,165.3C685.7,149,754,171,823,176C891.4,181,960,171,1029,165.3C1097.1,160,1166,160,1234,176C1302.9,192,1371,224,1406,240L1440,256L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
      ></path>
    </svg>

    <!-- KONTAK -->
    <section id="kontak">
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
            <a href="../About Us/about_us.php">Tentang Kami</a><br /><br />
            <a href="../Kelas/kelas/php">Kelas</a><br /><br />
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
