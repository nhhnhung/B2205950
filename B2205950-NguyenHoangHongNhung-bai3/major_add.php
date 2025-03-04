<html>
    <body>
        <h2>Bảng thêm major</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <table>
                <tr>
                    <td>Major ID</td>
                    <td><input type="text" name="id" size="20"></td>
                </tr>
                <tr>
                    <td>Major Name</td>
                    <td><input type="text" name="name" size="20"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnadd" value="Thêm">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
include 'conn_qlsv.php';
if(isset($_POST['btnadd'])&&$_POST['id']!=""&&$_POST['name']!=""){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "INSERT INTO major VALUES (".$id.",'".$name."')";
    if($conn->query($sql)){
        echo "Thêm thành công";
        header('Location: major_index.php');
    }else{
        echo "Thêm thất bại";
        die("Error: " . $conn->error);
    }
}
?>