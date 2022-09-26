<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Home</title>

  <style>
    body {
      background-color: lavender;
      background-size: cover;
    }
  </style>
</head>

<body>
  <!-- NavBAr -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="./gambar/assalaam.png" width="150" height="100">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="soal1.php">Form Pendataan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datanilai.php">Data Nilai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <center>
    <img src="./gambar/assalaam.png" style="height: 140px" alt="smk">
    <h2>Selamat Datang</h2>
    <h2>Website Penilaian Mapel Produktif Siswa</h2>
    <h2>SMK ASSALAAM BANDUNG</h2>

    <!-- Awalan card -->
    <div class="card" style="width: 25rem;">
      <div class="card-footer">
        Tahun Ajaran 2021 - 2022
      </div>
    </div>
    <br><br><br><br>
    <div class="card">
      <div class="card-header">
        <h5>Kriteri Penilaian Mata Pelajaran Produktif</h5>
      </div>

      <div class="card-body">
        <p>Nilai Bulanan :35%</p>
        <p>Nilai PTS :15%</p>
        <p>Nilai PAS :20%</p>
        <p>Nilai Kehadiran :30%</p>
        <p><b>Nilai Rapot : Bulanan + PTS + PAS + Kehadiran</b></p>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <br><br><br>
    <a href="soal1.php" class="btn btn-primary">Lanjutkan</a>
  </center>
  <br><br><br><br><br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col ">
      <div class="card mb-4">
        <img src="./gambar/rpl.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Rekayasa Perangkat Lunak</h4>
          <p class="card-text">
            Jurusan Rekayasa Perangkat Lunak (RPL) adalah sebuah jurusan yang mempelajari dan mendalami teknik-teknik pengembangan perangkat lunak (software). Termasuk diantaranya pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat serta manajemen kualitasnya.</p>
        </div>
      </div>
    </div>
    <div class="col ">
      <div class="card mb-4">
        <img src="./gambar/ass.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Keunggulan</h4>
          <p class="card-text">Mampu bekerja di berbagai bidang karena sudah dibekali dengan berbagai ilmu dan pengetahuan.
            Dalam melakukan kerja lapangan akan lebih mudah karena saat pembelajaran sudah sering melakukan kerja praktek.
            Pekerjaan nya yang relatif mudah dan santai, dapat dikerjakan dimanapun dan kapanpun menggunakan koneksi tentunya.</p>
        </div>
      </div>
    </div>
    <div class="col ">
      <div class="card mb-4">
        <img src="./gambar/rpl2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Program Studi</h4>
          <p class="card-text">Program studi rekayasa perangkat lunak memberikan pengetahuan terkait dengan teknik dan prinsip dalam membuat software.
            Kalian akan mempelajari tentang cara desain dan analisis algoritma,
            pemrograman, dan penggunaan struktur data yang efisien.Perangkat lunak yang dibuat harus tepat guna, dan mudah untuk digunakan.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>