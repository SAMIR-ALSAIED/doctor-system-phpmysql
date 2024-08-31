<?php
session_start();
@$username=$_POST['username'];
@$password=$_POST['password'];

if($username=="samir" && $password =="123"){
$_SESSION['login']=$username;

    header("location:header.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body >
    

<!-- Password Reset 7 - Bootstrap Brain Component -->
<section class="bg-light p-3 p-md-4 p-xl-5 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
        <div class="card border border-light-subtle rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
     
 
         
            <form action="index.php"  method="post">
              <div class="row gy-3 overflow-hidden  "> 
                <div class="col-12">
                  <div class="form-floating mb-4 ">
                    <input type="text" class="form-control shadow-none   " name="username"  placeholder="اسم المستخدم" >
                    <label  class="form-label  ">اسم المستخدم</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control shadow-none" name="password"  placeholder="كلمة المرور" >
                    <label  class="form-label  ">كلمة المرور</label>
                  </div>
                </div>
                  <div class="form-floating mb-3">
 <?php
 
 if($username >1 || $password >1){

    echo"<div class=' alert alert-danger  text-center'> خطا ف اسم المستخدم او كلمة المرور</div>";
 }
 
 ?>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary p-3" type="submit">تسجيل الدخول</button>
                  </div>
                </div>
              </div>
            </form>
         
    
  
</section>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>