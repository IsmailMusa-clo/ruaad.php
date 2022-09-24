<?php
include('./../include/connection.php');
session_start();
$id=$_GET['a'];
 
if (isset($id)) {
    $d="DELETE FROM posts WHERE post_id=$id ";
    mysqli_query($conn,$d);
    header('Location:./../pages/index.php');
}else{
    echo "error";

}
?>