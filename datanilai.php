<?php
if (isset($_POST['simpan'])) {
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $bulanan = $_POST['bulanan'];
  $pts = $_POST['pts'];
  $pas = $_POST['pas'];
  $kehadiran = $_POST['kehadiran'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="pts.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>PTS Produktif</title>
</head>

<body>
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
            <a class="nav-link" href="data.php">Data Nilai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <center>
    <br><br>
    <h1>Data Nilai Mata Pelajaran Produktif</h1>
    <table cellpadding="5" cellspacing="0" border="1" width="1000px">
      <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nilai<br>Bulanan</th>
        <th>Nilai<br>PTS</th>
        <th>Nilai PAS</th>
        <th>Nilai Kehadiran</th>
        <th>Nilai<br>Rapot</th>
        <th>Grade</th>

      </tr>

      <?php
      for ($a = 0; $a < count($nis); $a++) {
      ?>

        <tr>
          <td><?php echo $nis[$a]; ?></td>
          <td><?php echo $nama[$a]; ?></td>
          <td><?php echo $kelas[$a]; ?></td>
          <td><?php echo $bulanan[$a]; ?></td>
          <td><?php echo $pts[$a]; ?></td>
          <td><?php echo $pas[$a]; ?></td>
          <td><?php echo $kehadiran[$a]; ?></td>
          <td><?php echo
              $nilai = ($bulanan[$a] * 35 / 100) + ($pts[$a] * 15 / 100) + ($pas[$a] * 20 / 100) + ($kehadiran[$a] * 30 / 100); ?>
          </td>
          <td><?php
              if ($nilai >= 90 == $nilai <= 100) {
                echo "Grade A";
              } elseif ($nilai >= 80 == $nilai <= 89) {
                echo "Grade B";
              } elseif ($nilai >= 70 == $nilai <= 79) {
                echo "Grade C";
              } elseif ($nilai >= 60 == $nilai <= 69) {
                echo "Grade D";
              } elseif ($nilai > 0 == $nilai <= 59) {
                echo "Grade E";
              } else {
                echo "Nilai Tidak Valid";
              }
            }
              ?></td>
        </tr>
  </center>
</body>

</html>