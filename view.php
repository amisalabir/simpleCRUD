<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
        border: 1px solid black;
            text-align: center;
         }
    </style>
</head>
<body>
<?php
$conn =new mysqli('localhost', 'root', '' , 'rakin');
$sql = $conn->prepare("SELECT * FROM user");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {

    echo "<table   width='500'> <tr><th>ID</th><th>Name</th><th>Roll</th><th>Action</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['id']." </td> <td>".$row['name']."</td> <td> ".$row['roll']."</td> <td><a href=edit.php?id=".$row['id'].">Edit</a> <a  href=delete.php?id=".$row['id'].">Delete</a></td></tr>";
    }
    echo "</table>";
}
$conn->close();
?>
</body>
</html>