<?php
include('./../include/connection.php');
session_start();
$alert="";
$error_message="";

 if (isset($_POST['signIn'])){   
    $signIn=$_POST['signIn'];
   $username=  $_POST['username'];
   $password=$_POST['password'];

      if (empty($username)&&empty($password)) {
        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
       الرجاء ملئ الحقول المطلوبة</div>";
   }else{
    
    $sql="SELECT username ,user_password ,id FROM users";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $newpass=strrev($row['user_password']);
             if ($username==$row['username']&&$password==$newpass) {
                $_SESSION['username']=$row['username'];
                $_SESSION['id']=$row['id'];
                header("Location:./../pages/index.php");
              }
            }
          }
   }
     
    
 }
?>