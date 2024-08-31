<?php

$coon= new mysqli("localhost","root","","doctor_system");

$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
// $date=$_POST['date'];
$doctor=$_POST['doctor'];
$type=$_POST['type'];

$insert=" INSERT INTO patients( name, address, phone,  doctor , type) VALUES ( '$name','$address','$phone','$doctor','$type')";

$coon->query($insert);

header("location:../view.php");

?>