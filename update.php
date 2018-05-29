<?php
$fullName=$_POST['fullName'];
$roll=$_POST['roll'];
$id=$_POST['id'];

include 'config.php';

$qry="UPDATE user SET name='$fullName', roll='$roll' WHERE id='$id'";
$result=mysql_query($qry) or die("Query Error:".mysql_error());
if($result) {

    //echo "Data inserted successfully.";
    header('Location:view.php');
}

?>