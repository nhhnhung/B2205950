<!DOCTYPE HTML>
<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$sql = "SELECT student.id, fullname, email,  Birthday, major_id,name_major FROM student INNER JOIN major ON student.major_id = major.id
WHERE student.id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<body>
    <?php print_r($row) ?>
    <form action="sua.php" method="post">
        ID:<input type="text" name="id" value="<?php echo $row['id']; ?>"><br>
        Name: <input type="text" name="fullname" value="<?php echo
                                                        $row['fullname']; ?>"><br>
        E-mail: <input type="text" name="email" value="<?php echo
                                                        $row['email']; ?>"><br>
        Birthday: <input type="date" name="birth" value="<?php echo
                                                            $row['Birthday']; ?>"><br>
    <?php $result->free_result();?>
        Major: <select name="major_id" >
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