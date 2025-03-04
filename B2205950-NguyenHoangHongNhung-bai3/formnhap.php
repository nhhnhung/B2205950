<!DOCTYPE HTML>
<html>
<?php
include 'conn_qlsv.php';
?>
<body>
    <form action="luu.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Birthday: <input type="date" name="birth"><br>
        Major: <select name="major_id">
<?php
    $sql = "SELECT * FROM major";
    if($conn->query($sql)){
        $result = $conn->query($sql);
        $result_all = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($result_all as $row) {
            echo "<option value='".$row['id']."'>".$row['id'].".".$row['name_major']."</option>";
        }
    }
?>
                  </select>
        <input type="submit">
    </form>
</body>

</html>