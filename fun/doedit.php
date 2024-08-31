<?php


$coon= new mysqli("localhost","root","","doctor_system");

$id=$_GET['id'];


$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$doctor=$_POST['doctor'];
$type=$_POST['type'];

$upadate="

UPDATE patients SET  name='$name',address='$address',phone='$phone',doctor='$doctor',type='$type' WHERE  id='$id'";


$coon ->query($upadate);

header("location:../view.php");






?>