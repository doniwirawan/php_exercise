<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <?php
  
  // untuk menghilangkan error
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  error_reporting(E_ERROR);

  // kode dibawah sini saya dapat dari w3schools untuk mengamankan form dari hacker
  $bilangan  = "";

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $bilangan = test_input($_POST['bilangan']);
  }

  // kode pemrosesan berada disini
  $sisabagi = $bilangan % 2;

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  <!-- tampilan dimulai dari sini -->
  <div class="container">
    <div class="row">
      <!-- kolom dibawah adalah col dummy supaya object jadi center atau tengah -->
      <div class="col-lg-4"></div>
      <!-- kolom dibawah ini adalah kolom asli -->
      <div class="col-lg-4 xs-auto mt-lg-5 border p-4 rounded">
        <?php

        // kode dibawah sini logic berada dan ditampilkan di browser
        if ($sisabagi == 0) {
        ?>
          <!-- kalau bilangan genap maka ditampilkan in -->
          <div class="alert alert-primary text-center h1 align-middle" role="alert">
            Bilangan Genap
          </div>
        <?php
        } else {
        ?>
          <!-- kalau ganjil maka ditampilkan ini -->
          <div class="alert alert-danger text-center h1 align-middle" role="alert">
            Bilangan Ganjil
          </div>
        <?php
        }

        ?>
        <!-- ini adalah tempat dimana form atau input diberikan dan dikirim/diproses ke atas -->

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <h1 class="text-capitalize">Program penentu Ganjil/Genap</h1>
          <div class="form-group mt-4">
            <label for="exampleInputPassword1" class="font-weight-bold">Masukkan bilangan anda</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="bilangan">
          </div>
          <input type="submit" class="btn btn-primary"></input>
        </form>
      </div>
      <!-- ini adalah col dummy  -->
      <div class="col-lg-4"></div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../jquery-3.3.1/jquery-3.3.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="../bootstrap/js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>