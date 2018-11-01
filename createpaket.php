<?php
include("dat.php");
session_start();
$h=getpenghuni();
//print_r($h);

if(isset($_POST['submit'])){
    $tanggal=date('Y-m-d');
    $nip=$_SESSION['nip'];
    $isi=$_POST['isi'];
    $sasaran=$_POST['ktp'];
    if(empty($isi)){
        echo "<script>alert('ISI HARUS DIINPUTKAN')</script>";
    }
    else{
    createpaket($tanggal,$nip,$isi,$sasaran);
    }
    // print_r($_POST);


}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Creata Paket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="POST">
    <table>
    <tr><td>Tujuan Paket</td>
    <td><select name="ktp">
    <?php
    for($i=0; $i<count($h);$i++){
        echo"<option value='".$h[$i]['noktp']."'>".$h[$i]['nama'];
    }
?>
    </select></td></tr>
    <tr><td>Isi Paket</td><td><input type="text" name="isi"></td></tr>
    <tr><td><input type="submit" name="submit" value="submit"></td></tr>

    </table>
    </form>
</body>
</html>