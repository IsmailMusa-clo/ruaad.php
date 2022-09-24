<?php
include('./../include/connection.php');
session_start();
$id=$_GET['a'];
 
if (isset($id)) {
    $d="DELETE FROM categories WHERE id=$id ";
    mysqli_query($conn,$d);
    header('Location:http:./../pages/category.php');
}else{
    echo "error";

}
?>