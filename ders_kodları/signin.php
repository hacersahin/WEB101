<?php 

// new 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "100ky";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}


$email = $_GET['email'];
$sifre = $_GET['sifre'];

$sql = "SELECT kullanici_adi, sifre FROM kullanici";

$result = $conn->query($sql);

//echo mysqli_fetch_array($result);
//$row = mysqli_fetch_array($result);

$kullanici_adi = array();
$sifreler = array();

if($result-> num_rows > 0){

    while($row= $result-> fetch_assoc()){

       // echo $row['sifre'];
       // echo $row['kullanici_adi'];
        //print_r($row);

        array_push($kullanici_adi, $row['kullanici_adi']);
        array_push($sifreler, $row['sifre']);



    }
}
if(in_array($email,$kullanici_adi)&& in_array($sifre,$sifreler)){
    echo "Giriş Yapılsı.";
}
else{
    echo "Hatalı kullanıcı adı veya şifre.";
}


// for ($i =0; $i < count($row); $i++){

//     echo $row[$i];
// }



$conn->close();
?>



