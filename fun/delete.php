<?php

include("coon.php");

$id=$_GET['id'];

$delete="DELETE FROM patients WHERE id='$id'";

$coon -> query($delete);

header("location:../view.php");

?>