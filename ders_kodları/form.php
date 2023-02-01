<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "100ky";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}



$email = $_POST['email'];
$sifre = $_POST['sifre'];

$sql = "INSERT INTO kullanici VALUES('','$email','$sifre')";

if($conn->query($sql) == TRUE){

  echo "Yeni kayıt oluşturuldu.";
}
else{
    echo "Hata!". $conn->error;
}

$conn->close();

?>





