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
  <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
  <style>
    .card-body {
      background-color: #fff !important;
    }
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
          <!-- <a class="nav-link" href="idatasiswa.php"></a> -->
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Input Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="idatasiswa.php">Data Siswa</a>
            <a class="dropdown-item" href="idatanilai.php">Data Nilai</a>
            <a class="dropdown-item" href="idatabobot.php">Data Bobot</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link" href="idatasiswa.php"></a> -->
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            View Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="vdatasiswa.php">Data Siswa</a>
            <a class="dropdown-item" href="vdatanilai.php">Data Nilai</a>
            <a class="dropdown-item" href="vdatabobot.php">Data Bobot</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="perhitungan.php">Hitung ARAS</a></li>
    </div>
  </nav>

  <div class="container">
    <div class="card m-5">
      <div class="card-body">
        <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link" href="perhitungan.php">Perhitungan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="matrikskeputusan.php">Matriks Keputusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="nilaibobot.php">Nilai Bobot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="normalisasi.php">Normalisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="perangkingan.php">Perangkingan</a>
          </li>
        </ul>
        <!-- <?php
          $sql="SELECT MAX(UAS), MAX(UTS), MAX(nilairapot), MAX(nilaitesmasuk)FROM tb_nilai";
          $result=mysqli_query($konek_db,$sql); //row melihat dari sql 
          while($row=mysqli_fetch_array($result)){
              $MaxUAS           =$row[0];
              $MaxUTS           =$row[1];
              $MaxNilairapot    =$row[2];
              $MaxNilaitesmasuk =$row[3]; 
          }
        ?>
        <br>
        <div class="panel panel-info">
          <div class="panel-body">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>UAS</th>
                  <th>UTS</th>
                  <th>Nilai Rapot</th>
                  <th>Nilai Tes Masuk</th>
                </tr>
              </thead>
              <?php

                      $sql="SELECT MAX(UAS), MAX(UTS), MAX(nilairapot), MAX(nilaitesmasuk) FROM tb_nilai";
                      $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                      while($row=mysqli_fetch_array($result)){
                          $MaxUAS           = $row[0];
                          $MaxUTS           = $row[1];
                          $Maxnilairapot    = $row[2];
                          $Maxnilaitesmasuk = $row[3];
                          
                          
                      }
                      echo "
                          <tr>
                                <td>Optimal</td>
                                <td>".$MaxUAS."</td>
                                <td>".$MaxUTS."</td>
                                <td>".$Maxnilairapot."</td>
                                <td>".$Maxnilaitesmasuk."</td>
                                
                                </tr>
                      ";

                        $sql="SELECT NIS,UAS,UTS,nilairapot,nilaitesmasuk FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql);
                            while($row=mysqli_fetch_array($result)){
                                    echo "      
                                  <tr>  
                                        <td>".$row[0]."</td>  
                                        <td>".$row[1]."</td>
                                        <td>".$row[2]."</td>
                                        <td>".$row[3]."</td>
                                        <td>".$row[4]."</td>
                                        
                                        </tr>   
                              "; 

                    }


                       $sql="SELECT SUM(UAS), SUM(UTS), SUM(nilairapot), SUM(nilaitesmasuk) FROM tb_nilai";
                              $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                              while($row=mysqli_fetch_array($result)){
                                  $SumUAS            = $row[0];
                                  $SumUTS            = $row[1];
                                  $Sumnilairapot     = $row[2];
                                  $Sumnilaitesmasuk  = $row[3];
                                      
                              }
                              $SumUASop           = $SumUAS+$MaxUAS;
                              $SumUTSop           = $SumUTS+$MaxUTS;
                              $Sumnilairapotop    = $Sumnilairapot+$Maxnilairapot;
                              $Sumnilaitesmasukop = $Sumnilaitesmasuk+$Maxnilaitesmasuk;
                             
                                          echo "
                                        <tr>
                                              <td><b>Jumlah</b></td>
                                              <td>".$SumUASop."</td>
                                              <td>".$SumUTSop."</td>
                                              <td>".$Sumnilairapotop."</td>
                                              <td>".$Sumnilaitesmasukop."</td>                     
                                              </tr>                                                   
                                    ";
                    ?>
        <br>
        <h4>Hasil Analisa</h4>
            </table>




            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>UAS</th>
                  <th>UTS</th>
                  <th>Nilai Rapot</th>
                  <th>Nilai Tes Masuk</th>
                </tr>
              </thead>
              <br>
              <h4>Normalisasi R</h4>
              <?php


                              
                        $sql="SELECT MAX(UAS), MAX(UTS), MAX(nilairapot), MAX(nilaitesmasuk) FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                        while($row=mysqli_fetch_array($result)){
                            $MaxUAS           = $row[0]/$SumUASop;
                            $MaxUTS           = $row[1]/$SumUTSop;
                            $Maxnilairapot    = $row[2]/$Sumnilairapotop;
                            $Maxnilaitesmasuk = $row[3]/$Sumnilaitesmasukop;
                            
                        }
                        echo "
                            <tr>
                                  <td>Optimal</td>
                                  <td>".$MaxUAS."</td>
                                  <td>".$MaxUTS."</td>
                                  <td>".$Maxnilairapot."</td>
                                  <td>".$Maxnilaitesmasuk."</td>
                                  </tr>
                        ";


                        $sql="SELECT NIS, UAS, UTS, nilairapot, nilaitesmasuk FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql) or die(mysql_error()); //row melihat dari sql 
                        while($row = mysqli_fetch_array($result)){  
                            $NIS          =$row[0];                        
                            $bUAS         =$row[1]/$SumUASop;
                            $bUTS         =$row[2]/$SumUTSop;
                            $bRapot       =$row[3]/$Sumnilairapotop;
                            $bTes         =$row[4]/$Sumnilaitesmasukop;
                            echo "      
                              <tr>                  
                                    <td>".$NIS."</td>      
                                    <td>".$bUAS."</td>
                                    <td>".$bUTS."</td>
                                    <td>".$bRapot."</td>
                                    <td>".$bTes."</td>
                                    </tr>   
                          ";        
                    }
                    
                    ?>
            </table>
            <br>
              <h4>Normalisasi D</h4>

            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>UAS</th>
                  <th>UTS</th>
                  <th>Nilai Rapot</th>
                  <th>Nilai Tes Masuk</th>
                </tr>
              </thead>
              <?php

                  $sql="SELECT B_UAS, B_UTS, B_nilairapot, B_tesmasuk FROM tb_bobot";
                  $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                  while($row=mysqli_fetch_array($result)){
                      $BobotUAS           = $row[0];
                      $BobotUTS           = $row[1];
                      $Bobotnilairapot    = $row[2];
                      $Bobotnilaitesmasuk = $row[3];
                      
                  }
                  echo "
                      <tr>
                            
                            <td>".$BobotUAS."</td>
                            <td>".$BobotUTS."</td>
                            <td>".$Bobotnilairapot."</td>
                            <td>".$Bobotnilaitesmasuk."</td>
                            </tr>
                  ";


                          
                ?>
            </table>

            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>UAS</th>
                  <th>UTS</th>
                  <th>Nilai Rapot</th>
                  <th>Nilai Tes Masuk</th>
                  <th>Jumlah (S)</th>
                  <th>Nilai (K)</th>
                  
                </tr>
              </thead>
              
              <?php


                    $sql="SELECT MAX(UAS), MAX(UTS), MAX(nilairapot), MAX(nilaitesmasuk) FROM tb_nilai";
                    $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                    while($row=mysqli_fetch_array($result)){
                        $MaxUAS           = $row[0]/$SumUASop*$BobotUAS;
                        $MaxUTS           = $row[1]/$SumUTSop*$BobotUTS;
                        $Maxnilairapot    = $row[2]/$Sumnilairapotop*$Bobotnilairapot;
                        $Maxnilaitesmasuk = $row[3]/$Sumnilaitesmasukop*$Bobotnilaitesmasuk ;
                        $Optimals         = $MaxUAS+$MaxUTS+$Maxnilairapot+$Maxnilaitesmasuk;
                        $Optimalk         = $Optimals/$Optimals;
                       
                    }
                    echo "
                        <tr>
                              <td>Optimal</td>
                              <td>".$MaxUAS."</td>
                              <td>".$MaxUTS."</td>
                              <td>".$Maxnilairapot."</td>
                              <td>".$Maxnilaitesmasuk."</td>
                              <td>".$Optimals."</td>
                              <td>".$Optimalk."</td>
                              
                              </tr>
                    ";


                    $sql="SELECT NIS, UAS, UTS, nilairapot, nilaitesmasuk FROM tb_nilai";
                    $result=mysqli_query($konek_db,$sql) or die(mysql_error()); //row melihat dari sql 
                    while($row = mysqli_fetch_array($result)){  
                        $NIS          =$row[0];                        
                        $bUAS         =$row[1]/$SumUASop*$BobotUAS;
                        $bUTS         =$row[2]/$SumUTSop*$BobotUTS;
                        $bRapot       =$row[3]/$Sumnilairapotop*$Bobotnilairapot;
                        $bTes         =$row[4]/$Sumnilaitesmasukop*$Bobotnilaitesmasuk;
                        $jumlahs      =$bUAS+$bUTS+$bRapot+$bTes;    
                        $jumlahk      =$jumlahs/$Optimals;   
                        
                        echo "      
                          <tr>                  
                                <td>".$NIS."</td>      
                                <td>".$bUAS."</td>
                                <td>".$bUTS."</td>
                                <td>".$bRapot."</td>
                                <td>".$bTes."</td>
                                <td>".$jumlahs."</td>
                                <td>".$jumlahk."</td>
                                
                                </tr>   
                      ";        
                }


               
                    ?>
            </table>


            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>Nilai S</th>
                  <th>Nilai K</th>
                  
                </tr>
              </thead>
              <br>
              <h4>Nilai</h4>
              <?php


                              
                        $sql="SELECT MAX(UAS), MAX(UTS), MAX(nilairapot), MAX(nilaitesmasuk) FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                        while($row=mysqli_fetch_array($result)){
                          $MaxUAS           = $row[0]/$SumUASop*$BobotUAS;
                          $MaxUTS           = $row[1]/$SumUTSop*$BobotUTS;
                          $Maxnilairapot    = $row[2]/$Sumnilairapotop*$Bobotnilairapot;
                          $Maxnilaitesmasuk = $row[3]/$Sumnilaitesmasukop*$Bobotnilaitesmasuk ;
                          $Optimals         = $MaxUAS+$MaxUTS+$Maxnilairapot+$Maxnilaitesmasuk;
                          $Optimalk         = $Optimals/$Optimals;
                            
                            
                        }
                        echo "
                            <tr>
                                  <td>Optimal</td>
                                  <td>".$Optimals."</td>
                                  <td>".$Optimalk."</td>
                                 
                                  </tr>
                        ";


                        $sql="SELECT NIS, UAS, UTS, nilairapot, nilaitesmasuk FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql) or die(mysql_error()); //row melihat dari sql 
                        while($row = mysqli_fetch_array($result)){  
                          $NIS          =$row[0];                        
                          $bUAS         =$row[1]/$SumUASop*$BobotUAS;
                          $bUTS         =$row[2]/$SumUTSop*$BobotUTS;
                          $bRapot       =$row[3]/$Sumnilairapotop*$Bobotnilairapot;
                          $bTes         =$row[4]/$Sumnilaitesmasukop*$Bobotnilaitesmasuk;
                          $jumlahs      =$bUAS+$bUTS+$bRapot+$bTes;    
                          $jumlahk      =$jumlahs/$Optimals; 
                           
                            echo "      
                              <tr>                  
                                    <td>".$NIS."</td> 
                                    <td>".$jumlahs."</td>
                                    <td>".$jumlahk."</td>
                                    
                                    </tr>   
                          ";        
                    }
                    
                    ?>
            </table> -->




            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>Nilai K</th>
                  <th>Rangking</th>
                  
                  
                </tr>
              </thead>
              <br>
              <h4>Rangking</h4>
              <?php

                    $sql="SELECT NIS, UAS, UTS, nilairapot, nilaitesmasuk FROM tb_nilai ORDER BY UAS DESC, UTS DESC, nilairapot DESC, nilaitesmasuk DESC";
                    $result=mysqli_query($konek_db,$sql) or die(mysql_error()); //row melihat dari sql 
                    $rangking = 0;
                    while($row = mysqli_fetch_array($result)){  
                        $rangking++;

                        $NIS          =$row[0];                        
                        $bUAS         =$row[1]/$SumUASop*$BobotUAS;
                        $bUTS         =$row[2]/$SumUTSop*$BobotUTS;
                        $bRapot       =$row[3]/$Sumnilairapotop*$Bobotnilairapot;
                        $bTes         =$row[4]/$Sumnilaitesmasukop*$Bobotnilaitesmasuk;
                        $jumlahs      =$bUAS+$bUTS+$bRapot+$bTes;    
                        $jumlahk      =$jumlahs/$Optimals;
                        $total        =$jumlahk;
                        
                        echo "      
                          <tr>                  
                                <td>".$NIS."</td>    
                                <td>".$jumlahk."</td>  
                                <td>".$rangking."</td>
                                
                                
                                </tr>   
                      ";        
                }


               
                    ?>
            </table>





           



          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>