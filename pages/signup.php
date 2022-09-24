<?php
include('./../include/auth/sign_up.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
     <title>تسجيل الدخول</title>
    <link rel="stylesheet" type="text/css" href="./../css/login.css">
     
</head>

<body dir="rtl">
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="./../images/موقع رواد شعار.png" style="width: 360px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">أهلا وسهلا بكم في موقع رواد</h4>
                                    </div>

                                    <form method="post">
                                        <p> قم الآن بإنشاء حسابك</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">إسم المستخدم</label>
                                            <input type="text" id="username" name="username" class="form-control"
                                                placeholder="   " />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">الإيميل</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="country">الدولة</label>
                                            <input type="text" id="country" name="country" class="form-control"
                                                placeholder=" " />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="phone">رقم الهاتف</label>
                                            <input type="text" id="phone" name="phone" class="form-control"
                                                placeholder=" " />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="birthday">تاريخ الميلاد</label>
                                            <input type="date" id="birthday" name="birthday" class="form-control"
                                                placeholder="   " />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="file">صورة شخصية</label>
                                            <input type="file" id="file" name="file" class="form-control"
                                                placeholder="avatar" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">كلمة المرور</label>
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button name="sign_up" class="btn btn-outline-danger"
                                                style="padding:17px">إنشاء حساب </button>

                                        </div>
                                        <a class="text-muted" href="./../pages/login.php"
                                            style="text-decoration: none;"> لدي بالفعل حساب</a>
                                    </form>
                                    <?php echo $alert ?>
                                    <?php echo $error_message ?>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                      <?php include('./../include/slider.php')?>
                                    <h4 class="mb-4  pt-5">إذا أردت سهولة النشر لمقالاتك وكتباتك والتفاعل معها فأنت في
                                        المكان
                                        الصحيح</h4>
                                    <p class="small mb-0">If you want easy access to your articles and book and interact
                                        with them, then you are in the right place</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 </body>

</html>