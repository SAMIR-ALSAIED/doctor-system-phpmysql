<?php

$coon= new mysqli("localhost","root","","doctor_system");

$id=$_GET['id'];

$delete="DELETE FROM doctors WHERE id='$id' ";

$coon ->query($delete);

header("location:../info_doctor.php");



?>