<?php

include("header.php");
$coon= new mysqli("localhost","root","","doctor_system");

$select_qism="SELECT * FROM type ";

$result_qism= $coon ->query($select_qism);

?>



<div class="container">

<input type="text"  id="searchInput"  placeholder="بحث " class=" form-control w-25 shadow-none search">
             
              
<table class="table  text-center  table-striped table-bordered" id="dataTable" >
  <thead >
    <tr >
      <th class=" bg-secondary text-white"> رقم</th>
      <th class=" bg-secondary text-white">الاقسام</th>
      <th class=" bg-secondary text-white">التحكم</th>


    </tr>
  </thead>


  <tbody  id="myTable">
      <tr>
<?php      
     while ($row_qism =$result_qism ->fetch_assoc()) {
 ?>

      <td ><?=$row_qism['id']?></td>
      <td><?=$row_qism['name']?></td>

      
 
    

      <td>
      <a href="qism/delete_qism.php?id=<?= $row_qism['id']?>" class=" btn btn-danger"><i class="fa-solid fa-trash "></i></a>  

      </td>
    </tr>
    
<?php
}
   
 ?>

<script src="js/search_table.js"></script>
