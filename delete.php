<?php
include('koneksi.php');
$query="DELETE from tb_eskul where alternatif='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:vdataeskul.php");
?>   