<?php

//var_dump($_POST); die();

$fullName=$_POST['fullName'];
$roll=$_POST['roll'];

include 'config.php';

$qry="INSERT INTO user(name, roll) VALUES('$fullName','$roll')";
$result=mysql_query($qry) or die("Query Error:".mysql_error());

if($result) {

    //echo "Data inserted successfully.";
    header('Location:index.php');
}

?>