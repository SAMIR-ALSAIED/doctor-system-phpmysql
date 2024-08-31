<?php

$coon= new mysqli("localhost","root","","doctor_system");


$id=$_GET['id'];

$delete="DELETE FROM type WHERE id='$id'";

$coon -> query($delete);

header("location:../View_qism.php");




?>