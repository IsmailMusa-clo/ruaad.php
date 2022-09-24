<?php
   session_start();
   $id=$_SESSION['id'];
  $username=$_SESSION['username'];
 $avatar="";
  $email="";
  $phone="";
  $country="";
  $birthday="";
     $sql="SELECT * FROM users ";
                             $result = mysqli_query($conn, $sql);
                             if (mysqli_num_rows($result) > 0) {
                               while($row = mysqli_fetch_assoc($result)) {
                                 if ($_SESSION['id']==$row['id']) {
                                 $avatar =$row['avatar']; 
                                 $email =$row['email']; 
                                 $phone =$row['phone']; 
                                 $country =$row['country']; 
                                 $birthday =$row['birthday']; 
                                }
                               }
                            }

?>