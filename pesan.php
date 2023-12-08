<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <title>Hari Guru</title>
  </head>
  <body class="bg-info bg-opacity-25">
    <!-- header -->
    <div class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container  mt-2 mb-2">
          <a class="navbar-brand text-white" style="font-family:cursive"> Apresiasi Guru</a>
        <div class="collapse navbar-collapse" id="navbarsExample07"></div>
         <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="utama.php">Beranda<span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="tentang.php">Tentang<span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="tokoh.php">Tokoh<span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="pesan.php">Pesan<span class="sr-only"></span></a>
          </li>
         </ul>
        </div>
      </nav>
    </div>
     <!-- header -->
<br><br><br>

<h1><center><strong>SEBUAH APRESIASI KEPADA GURU KAMI</strong></center></h1>
<br><br>
<div class="container">
<form method="POST" name="pesan">
  <div class="mb-3">
    <label form="kepada" class="form-label">Kepada</label>
    <input type="text" class="form-control" id="kepada" name="kpd">
  </div>
  <div class="mb-3">
    <label form="pesan" class="form-label">Pesan</label>
    <input type="text" class="form-control" id="pesan" name="psn">
  </div>
  <button type="reset" class="btn btn-primary" name="batal">Batal</button>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<br><br>

<?php
    if(isset($_POST['submit'])){
        $kepada = $_POST['kpd'];
        $pesan = $_POST['psn'];
    ?>
    <div class="container">
        <div class="card" style="width: 18rem;">
           <div class="card-body">
              <h5 class="card-title">To : <?php echo $kepada;?></h5>
              <p class="card-text"><?php echo $pesan;?></p>
            </div>
       </div>
    </div>
<?php }?>

<br><br>
     <!-- footer -->
     <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    </ul>
    <p class="text-center text-muted">© 2023, Hari Guru</p>
  </footer>
     <!-- footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>