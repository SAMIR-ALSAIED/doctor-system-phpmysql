<?php

$coon= new mysqli("localhost","root","","doctor_system");

$id=$_GET['id'];

$name=$_POST['name'];
$type_do=$_POST['type_do'];
$phone=$_POST['phone'];
$price=$_POST['price'];

$insert="


INSERT INTO doctors( name, type_do, phone, price) VALUES ('$name','$type_do','$phone','$price')";

$coon ->query($insert);

header("location:../AD_doctor.php");


?>