<?php

include("header.php");

include("fun/coon.php");

$select="SELECT * FROM patients ";

$result= $coon -> query ($select);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


<div class="container">

<input type="text"  id="searchInput"  placeholder="بحث " class=" form-control w-25 shadow-none search">
             
              
<table class="table  text-center  table-striped table-bordered" id="dataTable" >
  <thead >
    <tr >
      <th class=" bg-secondary text-white">رقم المريض</th>
      <th class=" bg-secondary text-white">اسم المريض</th>
      <th class=" bg-secondary text-white">العنوان</th>
      <th class=" bg-secondary text-white" >رقم الموبايل </th>
      <th class=" bg-secondary text-white" >الطبيب</th>
      <th  class=" bg-secondary text-white">نوع الكشف</th>
      <th  class=" bg-secondary text-white">التحكم</th>

    </tr>
  </thead>
  <tbody  id="myTable">
    
    <tr>
 <?php
    while ($row= $result -> fetch_assoc()) {
?>

      <td ><?= $row['id']?></td>
      <td><?= $row['name']?></td>
      <td><?= $row['address']?></td>
      <td><?= $row['phone']?></td>
    
      <td><?php $doctor_id= $row['doctor'];
      
      $select_id="SELECT * FROM doctors WHERE id='$doctor_id'";
      $result_id= $coon ->query($select_id);

      $doctor= $result_id -> fetch_assoc();

      echo $doctor['name'];
      
      
      ?></td>
      <td><?php $type_id= $row['type'];

      $type_id="SELECT * FROM type WHERE id='$type_id'";

      $result_id= $coon -> query($type_id);

      $type= $result_id -> fetch_assoc();

      echo $type['name'];
      
      
      ?></td>
   
    

      <td>
      <a href="edit.php?id=<?=$row['id']?>" class=" btn btn-warning"> <i class="fa-solid fa-pen-to-square"></i > </a>  
      <a href="fun/delete.php?id=<?=$row['id']?>" class=" btn btn-danger "><i class="fa-solid fa-trash "></i></a>  

      </td>
    </tr>
    <?php
}
?>






  </tbody>
</table>



</div>



<script src="js/search_table.js"></script>
</body>
</html>