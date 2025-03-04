<?php
include 'conn_qlsv.php';
$id = $_POST['id'];
$sql = "DELETE FROM major WHERE id='".$id."'";
if($conn->query($sql)){
    header('location: major_index.php');
}else{
    die("Error: " . $conn->error);
}
?>