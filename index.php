<?php
include('dat.php');
session_start();
if(isset($_POST['submit'])){
    $nip=$_POST['nip'];

    if(empty($nip))echo"<script>alert('Harap Masukan NIP')</script>";
    else{
        if(is_numeric($nip)==false){
           echo "<script>alert('NIP berupa angka')</script>";
        }
        elseif(getNIP($nip)==false){
            echo "<script>alert('NIP tidak ditemukan')</script>";
        }
        else{
            $_SESSION['nip']=$nip;
            header("refresh:0;URL='createpaket.php'");
        }

    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="">
    <table>
    <tr><td>NIP</td><td><input type="text" name="nip"></td></tr>
    <tr><td><input type="submit" name="submit" value="submit" ></td></tr>
    </table>
    
    </form>
</body>
</html>