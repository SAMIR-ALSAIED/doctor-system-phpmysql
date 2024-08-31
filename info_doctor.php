<?php

include("header.php");
include("fun/coon.php");


$select_doctors="SELECT * FROM doctors";

$result= $coon ->query($select_doctors);




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
             
              
<table class="table  text-center   table-hover table-bordered" id="dataTable" >
  <thead >
    <tr >
      <th class=" bg-secondary text-white">اسم الطبيب</th>
      <th class=" bg-secondary text-white">التخصص </th>
      <th class=" bg-secondary text-white">رقم التيلفون </th>
      <th class=" bg-secondary text-white"> سعر الكشف </th>
      <th class=" bg-secondary text-white">  التحكم </th>
  

    </tr>
  </thead>
  <tbody  id="myTable">
    
    <tr>
<?php
while ($row_do = $result -> fetch_assoc()) {
   ?>

<td><?=$row_do['name'] ?></td>
<td><?=$row_do['type_do'] ?></td>
<td><?=$row_do['phone'] ?></td>
<td><?=$row_do['price'] ?></td>


    

      <td>
      <a href="edit_info_doctor.php?id=<?=$row_do['id']?>" class=" btn btn-warning"><i class="fa-solid fa-pen-to-square text-white"></i ></a>  
      <a href="doctors/delete_doctor.php?id=<?=$row_do['id']?>" class=" btn btn-danger"><i class="fa-solid fa-trash "></i></a>  

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