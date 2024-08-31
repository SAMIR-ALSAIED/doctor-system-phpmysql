<?php

include("header.php");
$coon= new mysqli("localhost","root","","doctor_system");




?>

<div class="container">


<form class=" fr mt-2" action="fun/doadd.php" method="POST">
  
 
  <div class="">
    <label for="exampleInputPassword1" class="form-label">اسم المريض</label>
    <input type="text" class="form-control shadow-none " name="name">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="form-label">العنوان</label>
    <input type="text" class="form-control shadow-none" name="address">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="form-label">رقم التيلفون</label>
    <input type="number" class="form-control shadow-none"name="phone" >
  </div>
  <!-- <div class="">
    <label for="exampleInputPassword1" class="form-label">تاريخ الحجز </label>
    <input type="date" class="form-control shadow-none"name="date	" >
  </div> -->

  <label for="exampleInputPassword1" class="form-label"> الطبيب</label>

<select name="doctor" class="form-control shadow-none ">
<option >اختار  الطبيب</option>

<?php

$select_doctor="SELECT * FROM doctors ";
$result_doctor= $coon -> query($select_doctor);

while ($row= $result_doctor ->fetch_assoc()) {
?>

<option value=" <?= $row['id'] ?>"> <?= $row['name'] ?> </option>

<?php
}

?>
</select>
  <label for="exampleInputPassword1" class="form-label">نوع الكشف </label>

<select name="type"class="form-control shadow-none ">
<option >اختار نوع الكشف</option>

<?php

  $select_type="SELECT * FROM type ";

  $result_type= $coon -> query($select_type);

  while ($row_type =$result_type -> fetch_assoc()) {
?>

<option value="<?= $row_type['id']?>">  <?= $row_type['name']?> </option>

<?php
  }

  ?>
</select>






  <button type="submit" class="btn   btn-success form-control  shadow-none m-auto">حفظ</button>
</form>


</div>