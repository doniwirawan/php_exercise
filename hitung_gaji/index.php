<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  error_reporting(E_ERROR);

  $nama = $gajipokok = $tunjangan = "";


  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = test_input($_POST['nama']);
    $gajipokok = test_input($_POST['gaji_pokok']);
    $tunjangan = test_input($_POST['tunjangan']);
  }

  

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $total = $gajipokok + $tunjangan;
  $pajak = 0.05 * $total;
  $bpjs  = 0.03 * $total;
  $gaber = $total - $pajak - $bpjs;

  ?>

  <div class="container">
    <div class="row mt-lg-5">
      <div class="col-lg-6 xs-auto mt-lg-4 border p-4 ">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Anda</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" placeholder="Nama Anda">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Gaji Pokok</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="gaji_pokok" placeholder="Gaji Pokok">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Tunjangan</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="tunjangan" placeholder="Tunjangan">
          </div>

          <input type="submit" class="btn btn-primary" value="Submit">
          </input>

        </form>
      </div>

      <div class="col-lg-6 col-md-12 border mt-lg-4 p-4 text-capitalize ">

        <h3 class="text-left">Nama anda adalah :<br><?= $nama; ?></h3>
        <h3 class="text-left text-primary mt-lg-5">Gaji Total anda adalah : <br> Rp.<?= $total; ?> </h3>
        <h3 class="text-left text-success mt-lg-5">Gaji Bersih anda adalah : <br> Rp.<?= $gaber; ?> </h3>

      </div>
    </div>
  </div>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>