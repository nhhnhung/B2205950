<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "qlsv";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM major";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $result = $conn->query($sql);
    $resultall = $result->fetch_all(MYSQLI_ASSOC);

?>
    <h1>Bảng Major</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>MAJOR NAME</th>
            <th colspan="2">ACTION</th>
        </tr>
        <?php
        foreach ($resultall as $row) {
            echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name_major"] . "</td>
            <td>";
        ?>
            <form action="major_edit.php" method="post">
                <input type="submit" name="action" value="sửa">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </form>
            <?php
            echo "</td>";
            echo "<td>";
            ?>
            <form action="major_xoa.php" method="post">
                <input type="submit" name="action" value="xóa">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </form>
        <?php
            echo "</td>
    </tr>";
        }
        echo "</table><br>";
        ?>
        <form action="major_add.php" method="post">
            <input type="submit" value="Thêm">
        </form>
<?php

} else {
    echo "không có kết quả trả về";
}
$conn->close();
?>