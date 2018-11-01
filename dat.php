<?php
$conn=mysqli_connect("localhost","root","","pos");
if($conn){

function getpenghuni()
{
    Global $conn;
    $data=[];
    $query=mysqli_query($conn,"SELECT * FROM penghuni");
    for($i=0; $i<mysqli_num_rows($query);$i++){
        $data[$i]=mysqli_fetch_array($query);
    }
    return $data;
}
function getNIP($nip)
{
    Global $conn;
    $query=mysqli_query($conn,"SELECT nip from karyawan WHERE nip='$nip'");
    if(mysqli_num_rows($query)>0){
        return $query;
    }
    else{
        return false;
    }
   
}

function createpaket($tanggal,$nip,$isi,$sasaran)
{
    # code...
    Global $conn;
    $query=mysqli_query($conn,"INSERT INTO paket(noktp,nip,tanggaldatang,isi) 
    VALUES('$sasaran','$nip','$tanggal','$isi')");

}


}

else echo"Tidak Terkonek";

?>