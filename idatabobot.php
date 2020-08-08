<!DOCTYPE html>
<?php
    include('koneksi.php');
?>
<html lang="en">

<head>
  <title>SPK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto snip1135">
        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link" href="idataeskul.php"></a> -->
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Input Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="idataeskul.php">Data Eskul</a>
            <a class="dropdown-item" href="idatanilai.php">Data Nilai</a>
            <a class="dropdown-item" href="idatabobot.php">Data Bobot</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link" href="idataeskul.php"></a> -->
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            View Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="vdataeskul.php">Data Eskul</a>
            <a class="dropdown-item" href="vdatanilai.php">Data Nilai</a>
            <a class="dropdown-item" href="vdatabobot.php">Data Bobot</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="matrikskeputusan.php">Hitung ARAS</a></li>
    </div>
  </nav>

  <div class="container">
    <div class="card shadow m-5">
      <div class="card-header text-center">
        <h3>Input Data Bobot </h3>
      </div>
      <div class="card-body">
        <form name="frm" id="myForm" method="post" enctype="multipart/form-data">
          <div class="form-group has-feedback">
            <label class="control-label col-sm-3" for="event">Bobot Event :</label>
            <div class="col">
              <input type="text" name="event" class="form-control" required name="id" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-sm-3" for="kreatif">Bobot Kreatifitas :</label>
            <div class="col">
              <input type="text" name="kreatif" class="form-control" required name="nama"
                data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-sm-3" for="bakat">Bobot Bakat :</label>
            <div class="col">
              <input type="text" name="bakat" class="form-control" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-sm-3" for="prestasi">Bobot Prestasi :</label>
            <div class="col">
              <input type="text" name="prestasi" class="form-control" required data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>

      </div>
      <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-primary"
          onclick="return checkInput()">Simpan</button><br><br>

        <?php		

                if(isset($_POST['submit'])){
                    $event          = $_POST['event'];
                    $kreatif        = $_POST['kreatif'];
                    $bakat          = $_POST['bakat'];
                    $prestasi       = $_POST['prestasi'];
                    
                    $query="INSERT INTO tb_bobot SET B_event='$event', B_kreatif='$kreatif', B_bakat='$bakat', B_prestasi='$prestasi'";
                    $result=mysqli_query($konek_db, $query);
                        if($result){
                            ?>
        <div class="alert alert-success">
          <a href="vdatabobot.php" class="close" data-dismiss="alert" aria-label="close">×</a>
          <strong>Success!</strong> Data Berhasil Diinputkan.
        </div>
        <?php
                                }
                            }
 

                ?>
        </form>
      </div>
    </div>
  </div>
  <script language="JavaScript" type="text/javascript">
    function checkInput() {
      return confirm('Data sudah benar ?');
    }
  </script>


</body>

</html>