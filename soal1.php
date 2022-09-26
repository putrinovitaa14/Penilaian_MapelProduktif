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
            <a class="nav-link" href="datanilai.php">Data Nilai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <center>
    <img src="./gambar/assalaam.png" style="height: 140px" alt="smk">
    <h2>Penilaian Mata Pelajaran Produktif</h2>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tugas Input</title>
      <link rel="stylesheet" href="css.css">
    </head>

    <body>
      <center>
        <div class="card">
          <div class="card-header">
            Masukan Jumlah Siswa
          </div>
          <div class="card-body">
            <form method="POST" action="">
              <table>
                <tr>
                  <td>Jumlah</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><br><input type="submit" name="proses" value="Proses"></td>
                </tr>
              </table>
            </form>
            <?php

            if (isset($_POST['proses'])) {
              $jumlah = $_POST['jumlah'];

            ?>
              <form action="datanilai.php" method="post">
                <table>
                  <?php

                  for ($i = 1; $i <= $jumlah; $i++) {
                  ?>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>Data Siswa Ke - <?= $i; ?></td>
                    </tr>
                    <tr>
                      <td>Nis</td>
                      <td>:</td>
                      <td><input type="text" name="nis[]" value=""></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><input type="text" name="nama[]" value=""></td>
                    </tr>
                    <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td><select name="kelas[]" value="">
                          <option value="kelas">Pilih Kelas</option>
                          <option value="XI RPL 1">XI RPL 1</option>
                          <option value="XI RPL 2">XI RPL 2</option>
                          <option value="XI RPL 3">XI RPL 3</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>Nilai Bulanan</td>
                      <td>:</td>
                      <td><input type="text" name="bulanan[]" value=""></td>
                    </tr>
                    <tr>
                      <td>Nilai PTS</td>
                      <td>:</td>
                      <td><input type="text" name="pts[]" value=""></td>
                    </tr>
                    <tr>
                      <td>Nilai PAS</td>
                      <td>:</td>
                      <td><input type="text" name="pas[]" value=""></td>
                    </tr>
                    <tr>
                      <td>Kehadiran</td>
                      <td>:</td>
                      <td><input type="text" name="kehadiran[]" value=""></td>
                    </tr>
                  <?php
                  }
                  ?>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Proses"></td>
                  </tr>


                </table>
              </form>
            <?php
            }
            ?>
          </div>
        </div>
      </center>
    </body>

    </html>
  </center>
</body>

</html>