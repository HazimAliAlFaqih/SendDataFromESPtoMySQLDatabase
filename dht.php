<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "task3";

$conn = mysqli_connect($hostname,$username,$password,$database);

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}

echo "Database connection is OK";

if(isset($_POST["temperature"]) && isset($_POST["humidity"]))  {

    $t = $_POST["temperature"];
    $h = $_POST["humidity"];

    $sql = INSERT INTO a (temperature,humidity) VALUES (".$t.", ".$h.")";

     if (mysqli_query($conn,$sql))   {
        echo "nNew record created successfully";
       } else  {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
      }
 }

?>
    
