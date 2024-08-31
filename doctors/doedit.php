<?php

$coon= new mysqli("localhost","root","","doctor_system");

$id=$_GET['id'];

$name=$_POST['name'];
$type_do=$_POST['type_do'];
$phone=$_POST['phone'];
$price=$_POST['price'];

$up="
UPDATE doctors SET name='$name',type_do='$type_do',phone='$phone',price='$price' WHERE id='$id'";

$coon ->query($up);

header("location:../info_doctor.php");





?>