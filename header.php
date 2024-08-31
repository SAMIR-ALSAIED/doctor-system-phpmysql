<?php

session_start();

if(!isset($_SESSION['login'])){

  header("location:index.php");

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    

<div class="container-fulid ">


<div class="center  text-center  p-1 m-auto  shadow-sm    bg-dark-subtle  ">

<div class="s p-3" style=" background-color:#f1f3f5;">

<a href="" class=" p-2 ms-2  text-dark    text-decoration-none fs-5"  style="float: right; position: relative; 
bottom: 6px; ">  <?php  echo $_SESSION['login']?> <i class="fa-solid fa-user text-warning"></i></a>

<a href="header.php" class="btn btn-primary p-2 ms-2  " >الريئسية <i class="fa-solid fa-gauge-high"></i></a>
<a href="view.php" class="btn btn-primary p-2 ms-2" >عرض بيانات المريض <i class="fa-solid fa-eye"></i></a>
<a href="add.php" class="btn btn-primary p-2 ms-2" >اضافة مريض <i class="fa-solid fa-plus"></i></a>


  <button class="btn btn-primary dropdown-toggle ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
 الاقسام
  </button>
  <ul class="dropdown-menu  bg-info m-auto text-center">

    <li><a href="add_qism.php" class="btn  btn-outline-dark text-white p-2 mb-3" > اضافة اقسام</a>
    <li><a href="View_qism.php" class="btn  btn-outline-dark text-white p-2 mb-3" > عرض اقسام</a>
</li>
  </ul>

  <button class="btn btn-primary dropdown-toggle ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
 الاطباء <i class="fa-solid fa-users-gear"></i>
  </button>
  <ul class="dropdown-menu  bg-info m-auto text-center">

    <li><a href="AD_doctor.php" class="btn  btn-outline-dark text-white p-2 mb-3" > اضافة طبيب</a>
    <li><a href="info_doctor.php" class="btn  btn-outline-dark text-white p-2 mb-3" > معلومات الاطباء</a>
</li>
  </ul>






  <button class="btn btn-primary dropdown-toggle ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
 الاعدادت <i class="fa-solid fa-gear"></i>
  </button>
  <ul class="dropdown-menu  bg-info m-auto text-center">

    <li><a href="logout.php" class="btn  btn-outline-dark text-white   p-2 mb-3" >تسجيل الخروج</a>
</li>
  </ul>
</div>


</div>

</div>
</div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>