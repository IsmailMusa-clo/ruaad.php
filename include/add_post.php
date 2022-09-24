<?php 
include('./../include/connection.php');
include('./../include/auth/sess.php');
include('./../include/auth/auth.php');
 $alert="";
 $error_message="";

  if (isset($_POST['create'])){   
    $create=  $_POST['create'];
    $post_title=  $_POST['title'];
    $post_cat=  $_POST['cat'];
    $post_details=  $_POST['details'];
    $post_img=  $_POST['file'];
   $post_user=$_SESSION['username'];
   $post_user_id=$_SESSION['id'];
     if (empty($post_title) && empty($post_details)) {
        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
        الرجاء ملئ الحقول الفارغة</div>";
    }elseif (strlen($post_title)>100) {

        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
        يجب أن لا يكون العنوان أكبر من 100 حرف</div>";
    }else{
        $query ="INSERT INTO posts (post_user, post_user_id,post_title, post_cat, post_details,post_img) VALUES ('$post_user','$post_user_id','$post_title','$post_cat','$post_details','$post_img')";
         mysqli_query($conn,$query);
         $alert= "<div class=\"alert alert-primary\" role=\"alert\">
         تم النشر
       </div>";

       header("Location:./../pages/index.php");
      
    }
  }

?>