<?php
include 'conn_qlsv.php';
$id = $_POST['id'];
$name = $_POST['name'];
$sql = "UPDATE major SET name_major = '".$name."' WHERE id='".$id."'";
if($conn->query($sql)){
    header('Location: major_index.php');
}else{
    die("Error: " . $conn->error);
}
?>