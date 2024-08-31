<?php

include("header.php");
$coon= new mysqli("localhost","root","","doctor_system");

$select="SELECT * FROM type  ";

$result=$coon->query($select);

$row= $result ->fetch_assoc();



?>


<div class="container">


<form class=" fr mt-2" action="qism/doadd _qism.php ?id=<?= $row['id']?>" method="POST" style=" height:200px">
  
  <div class="">
    <label for="exampleInputPassword1" class="form-label">اسم القسم</label>
    <input type="text" class="form-control shadow-none " name="name">
  </div>


  <button type="submit" class="btn   btn-success form-control  shadow-none m-auto">حفظ</button>
</form>


</div>