<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$id= $_REQUEST['id'];

$conn =new mysqli('localhost', 'root', '' , 'rakin');
$sql = $conn->prepare("SELECT * FROM user where id='$id'");
$sql->execute();
$result = $sql->get_result();
$row = mysqli_fetch_assoc($result);

$conn->close();

?>

<form action="update.php" method="post">
    <input name="id" type="hidden" value="<?php echo $id; ?>">
    Name: <input type="text" name="fullName" value="<?php echo $row['name'];?>"> <br>
    Roll: <input type="number" name="roll" value="<?php echo $row['roll'];  ?>"> <br>
    <input type="submit" value="Save">
</form>
<a href="view.php">View Student</a>

</body>
</html>