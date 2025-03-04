<?php
include 'conn_qlsv.php';
$id = $_POST['id'];
$sql = "SELECT * FROM major WHERE id='".$id."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<body>
    <h2>Form Sửa</h2>
    <form action="major_edit_save.php" method="post">
        ID:<input type="text" name="id" value="<?php echo $row['id']; ?>"><br>
        Name: <input type="text" name="name" value="<?php echo $row['name_major']; ?>"><br>
        <input type="submit">
    </form>
</body>