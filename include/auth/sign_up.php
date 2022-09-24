<?php
include('./../include/connection.php');
$alert="";
$error_message="";
$check=false;
 if (isset($_POST['sign_up'])){   
  $sign_up=$_POST['sign_up'];
 $username=  $_POST['username'];
 $email=  $_POST['email'];
 $country=  $_POST['country'];
 $birthday=  $_POST['birthday'];
 $phone=  $_POST['phone'];
 $password=$_POST['password'];
 $avatar=$_POST['file'];
 $sql="SELECT username FROM users ";
 $result = mysqli_query($conn, $sql);              
            if (mysqli_num_rows($result) > 0) {
                 while($row = mysqli_fetch_assoc($result)) {
                      if ($row['username']==$username) {
                        $check=true;
                      }
                 }
            }
      if (empty($username)&&empty($password)&&empty($avatar)&&empty($email)) {
        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
       الرجاء ملئ الحقول المطلوبة</div>";
   }elseif (strlen($username)>50 && strlen($email)>50 && strlen($country)>50&& strlen($phone)>9) {
       $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
       يجب أن لا يكون العنوان أكبر من 50 حرف</div>";
   }elseif (strlen($password)<=8) {
    $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
    يجب أن لا تقل كلمة المرور عن 8 أحرف</div>";
   }elseif($check){
    $error_message="<div class=\"alert alert-warning\" role=\"alert\">
   هذا المستخدم موجود مسبقا</div>";
}else{
     $newpassword =strrev($password); 
          
        $query ="INSERT INTO users (username, email, country, phone,birthday,user_password,avatar)
        VALUES ('$username','$email','$country','$phone','$birthday','$newpassword','$avatar')";
        mysqli_query($conn,$query);

        $alert= "<div class=\"alert alert-primary\" role=\"alert\">
        تم انشاء حسابك 
      </div>";
      header("Location:./../pages/login.php");
    }
 }
?>