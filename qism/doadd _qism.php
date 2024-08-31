<?php

$coon= new mysqli("localhost","root","","doctor_system");

$id=$_GET['id'];

$name= $_POST['name'];

$insert="

INSERT INTO type( name) VALUES ('$name')";

$coon ->query($insert);

header("location:../Add_qism.php");



?>