<?php
$conn = new SQLite3("mydb.db");
if(!$conn){
    die("Kết nối thất bại!");
}else{
    echo "Kết nối thành công";
}
?>