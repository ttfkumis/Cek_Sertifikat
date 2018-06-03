<!doctype html>
<html>
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap_4/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <title>Maghfiroh Hijrando Putra</title>
  </head>

  <body class ="verif">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg">
  <div class="topnav" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php"><b>Home</b></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../artikel/profil.php"><b>Profil</b></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../page/progsertif.php"><b>Program Sertifikasi</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php"><b>Verifikasi Sertifikat</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../artikel/struktur.php"><b>About Us</b></a>
      </li>
    </ul>
  </div>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <b>Registrasi</b>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="registrasi/mostentatif/login.php">Microsoft Office Specialist (Mahasiswa Baru STT-PLN)</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="registrasi/mosumum/login.php">Microsoft Office Specialist</a>
      <a class="dropdown-item" href="registrasi/mtaumum/login.php">Microsoft Technology Associate</a>
    </div>
    </div>
</nav>
<!-- end navbar -->

    <div class="header-ats">
        <img src="../gambar/labjadi.jpg" width="100%">
      </div>
    <section class="verify" id="verify" style="min-height: 200px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center"><b>Verify</b></h2>
            <hr style="width: 250px; border-top: 2px solid black;">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <form action="verify.php" method="POST">
              <div class="form-group">
                <b>Kode Sertifikat Keikutsertaan : </b>
              <input type="text" name="id" class="form-control" placeholder="Masukkan Kode" style="width: 700px; margin: auto; border: 1.5pt solid black;" required>
                <br><input type="submit" class="btn btn-primary" value="Submit" name="verifikasi"><br>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap_4/dist/js/bootstrap.min.js"></script>
  </body>
</html>