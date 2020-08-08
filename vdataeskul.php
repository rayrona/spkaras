<!DOCTYPE html>
<html lang="en">
<?php
    include('koneksi.php');
?>

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

<style>
.button {
  border: none;
  border-radius: 5px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>



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
    <div class="card m-5">
      <div class="card-header text-center">
        <h3>View Data Eskul </h3>
      </div>
      <div class="card-body">
        <div class="panel-body">
          <table width="100%" class="table table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Alternatif</th>
                <th>Nama Eskul</th>
                <!-- <th>Tanggal Lahir</th> -->
                <th>Pembimbing</th>
                <th>Tempat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <?php
              $queri="Select * From tb_eskul";
              $hasil=mysqli_query ($konek_db,$queri);   
              $id = 0;
              while ($data = mysqli_fetch_array ($hasil)){  
                    $id++; 
                    echo "      
                            <tr>  
                            <td>".$id."</td>
                            <td>".$data[0]."</td>  
                            <td>".$data[1]."</td>         
                            <td>".$data[2]."</td>
                            <td>".$data[3]."</td>
                                  
                            <td><a href=\"edataeskul.php?id=".$data[0]."\">Edit Data</a> "." | <a href=\"delete.php?id=".$data[0]."\" onclick='return checkDelete()'>Hapus Data</a> </td>
                            </tr>   
                        ";      
                    }
              ?>
          </table>
        </div>
      </div>

      <script>
        $(document).ready(function () {
          $('#dataTables-example').DataTable({
            responsive: true
          });
        });

        function checkDelete() {
          return confirm('Yakin menghapus data ini?');
        }
      </script>




</body>

</html>