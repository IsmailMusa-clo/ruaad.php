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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title> الملف الشخصي</title>
    <link rel="stylesheet" type="text/css" href="./../css/dashboard.css">
</head>

<body dir="rtl">
    <?php include('./../include/nav.php') ?>
    <!-- start content -->
    <div class="container-fluid">
        <div class="row">
            <?php include('./../include/control_panal.php')?>
            <div class="col-md-10 " id="main-area">
                <section>
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <img src="./../images/<?=$avatar?>"                                         
                                           alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        <h5 class="my-3"> </h5>
                                        <p class="text-muted mb-1"> </p>
                                        <p class="text-muted mb-4"> </p>
                                        <div class="d-flex justify-content-center mb-2">
                                            <a href="./../pages/mypost.php"   class="btn btn-primary">منشوراتي</a>
                                            <a href="./../pages/newpost.php" class="btn btn-outline-primary ms-1">إنشاء منشور جديد</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 mb-lg-0">
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush rounded-3">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fas fa-globe fa-lg text-warning"></i>
                                                <p class="mb-0"> </p>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                                <p class="mb-0"> </p>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                                <p class="mb-0"> </p>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                                <p class="mb-0"> </p>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                                <p class="mb-0"> </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">الاسم</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"> <?=$username?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">الايميل</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?=$email?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">رقم الهاتف</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?=$phone?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">الدولة</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?=$country?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">تاريخ الميلاد</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?=$birthday?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- end content -->
        <script src="./../js/bootstrap.min.js"></script>
        <script src="./../js/main.js"></script>
</body>

</html>