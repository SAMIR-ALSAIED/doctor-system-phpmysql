<?php

include("header.php");
$coon= new mysqli("localhost","root","","doctor_system");

$id=$_GET['id'];

$select="SELECT * FROM doctors WHERE id='$id'";

$result=$coon -> query($select);

while ($row_do=$result ->fetch_assoc()) {
   ?>






<div class="container">


<form class=" fr mt-2" action="doctors/doedit.php?id=<?=$row_do['id']?>" method="POST">
  
  <div class="">
    <label for="exampleInputPassword1" class="form-label">اسم المريض</label>
    <input type="text" class="form-control shadow-none" name="name"  value="<?= $row_do['name']?>">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="form-label">التخصص</label>
    <input type="text" class="form-control shadow-none" name="type_do" value="<?=$row_do['type_do']?>">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="form-label">رقم التيلفون</label>
    <input type="number" class="form-control shadow-none"name="phone" value="<?=$row_do['phone']?>">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="form-label"> سعر الكشف</label>
    <input type="number" class="form-control shadow-none"name="price"   value="<?=$row_do['price']?>" >
  </div>
 







  <button type="submit" class="btn   btn-success form-control  shadow-none m-auto">تعديل</button>
</form>


</div>
<?php
}
?>

