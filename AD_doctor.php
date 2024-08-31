<?php

include("header.php");
$coon= new mysqli("localhost","root","","doctor_system");

$select="SELECT * FROM doctors";

$result= $coon -> query($select);

$do=$result -> fetch_assoc();





?>

<div class="container">


<form class=" fr mt-2" action="doctors/do_doctor.php?id=<?= $do['id']?>" method="POST">
  
  <div class="">
    <label for="exampleInputPassword1" class="form-label">اسم الدكتور</label>
    <input type="text" class="form-control shadow-none " name="name">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="form-label"> التخصص</label>
    <input type="text" class="form-control shadow-none " name="type_do">
  </div>

  <div class="">
    <label for="exampleInputPassword1" class="form-label">رقم التيلفون</label>
    <input type="number" class="form-control shadow-none"name="phone" >
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="form-label">سعر الكشف </label>
    <input type="number" class="form-control shadow-none"name="price" >
  </div>






  <button type="submit" class="btn   btn-success form-control  shadow-none m-auto">حفظ</button>
</form>


</div>