<?php
$servername = "localhost:1521/orcl";
$username = "NAME";
$password = "123";

//Tạo connection
$conn = oci_connect($username, $password, $servername);
if(!$conn){
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
    echo "Kết nối thành công";
}
 
?>
