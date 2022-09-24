<?php include('./../include/auth/sign_in.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" type="text/css" href="./../css/login.css">
     <link rel="stylesheet" href="./../css/bootstrap.rtl.css">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
   
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
                                        <p>الرجاء قم بتسجيل الدخول</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" id="form2Example11" class="form-control"
                                                placeholder="إسم المستخدم" />
                                            <label class="form-label" for="form2Example11"></label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" placeholder="كلمة المرور" />
                                            <label class="form-label" for="form2Example22"></label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-outline-danger" name="signIn" style="padding:17px"
                                                v>تسجيل الدخول</button>
                                            <a class="text-muted" href="#!" style="text-decoration: none;">نسيت كلمة
                                                المرور؟</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">ليس لديك حساب؟</p>
                                            <a href="http:./../pages/signup.php"
                                                class="btn btn-outline-danger">أنشئ حسابك الآن</a>
                                        </div>

                                    </form>
                                    <?php echo $alert ?>
                                    <?php echo $error_message ?>
                                </div>
                            </div>

                            <div class="col-lg-6 d-flex  gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <!-- هنا  -->
                                    <?php include('./../include/slider.php') ?>

                                    <h4 class="mb-4   pt-5">إذا أردت سهولة النشر لمقالاتك وكتباتك والتفاعل معها فأنت في
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
     
</body>
<script src="./../js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>