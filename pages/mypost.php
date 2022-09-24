<?php
 include('./../include/connection.php');
 include('./../include/auth/sess.php');
 include('./../include/auth/auth.php');
 
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./../css/bootstrap.rtl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./../css/style.css">
    <title> منشوراتي</title>
</head>

<body dir="rtl">
    <?php include('./../include/nav.php')?>
    <!-- start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="user_add">
                        <div>
                            <div class="user_image">
                                <img src="./../images/<?php echo $avatar ?>" alt="">
                            </div>
                            <span>
                                <h5><?php echo $username ?></h5>
                            </span>
                        </div>
                        <a class="btn btn-success" href="./../pages/newpost.php" id="add">إضافة
                            منشور</a>
                    </div>


                    <?php 
                       $sql="SELECT * FROM posts WHERE post_user_id = $id ORDER BY post_date DESC";
                             $result = mysqli_query($conn, $sql);
                             if (mysqli_num_rows($result) > 0) {
                               while($row = mysqli_fetch_assoc($result)) {

                         ?>
                    <div class="post">
                        <div id="userpost" >
                            <div class="user_image"><img src="./../images/<?php echo $avatar ?>"></div><span>
                                <h5><?= $row["post_user"] ?></h5>
                            </span>
                        </div>
                        <div class='post-info'>
                            <span><i class='far fa-calendar-alt'></i><?=$row["post_date"]?></span>
                            <span><i class='fas fa-tags'></i><?=$row["post_cat"]?></span>
                        </div>
                        <div class='post-title'>
                            <h4> <span> عنوان المقال :</span> <?=$row["post_title"]?></h4>
                        </div>
                        <div class='post-details'>

                            <p><?=$row["post_details"]?></p>
                        </div>
                        <div class='post-image'>
                            <img src='./../images/<?=$row["post_img"]?>' alt=''>
                        </div>
                    </div>
                    <?php
                         }
                           } 
                      ?>


                </div>

                <div class="col-md-4">
                   <?php include('./../include/sideleft.php') ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->



    <?php include('./../include/footer.php');?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./../js/bootstrap.min.js"></script>
    <script src="./../js/main.js"></script>
</body>

</html>