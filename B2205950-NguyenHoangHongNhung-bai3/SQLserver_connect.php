<?php
// Địa chỉ SQL server 
$servername = "localhost";
$username = "root";
$pwd = "123";

// Cấu hình kết nối
$connection = ["UID"=>$username, "PWD"=>$pwd, "Database"=>"xtlab"];

// Thực hiện kết nối 
// $conn = sqlsrv_connect($servername, $connection);
$conn = new PDO("sqlsrv:Server=$servername;Database=mydata", $username, $pwd);
if($conn == false){
    die("Kết nối thất bại!");
}
 
?>