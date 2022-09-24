<?php include('./../include/add_post.php'); ?>
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
    <title>لوحة التحكم</title>
    <link rel="stylesheet" type="text/css" href="./../css/dashboard.css">
</head>

<body dir="rtl">
<?php include('./../include/nav.php') ?>
<!-- start content -->
<div class="container-fluid">
    <div class="row">
    <?php include('./../include/control_panal.php')?>
    <div class="col-md-10 " id="main-area">
        <label style="padding:20px">منشور جديد</label>
        <div class="new-post">
        <form action="" method="post">
            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" name="title" id="" class="form-control">    
            </div>
            <div class="form-group">
                <label for="cat">التصنيف</label>
                 <select name="cat" class="form-controle" id="cat" >
                 <?php 
                             $sql="SELECT * FROM categories ";
                             $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {

                          echo "<option value".$row["category_name"].">".$row["category_name"]."</option>";
                       }
                    } 
                ?>
                 </select>    
            </div>
            <div class="form-group">
                <label for="details">التفاصيل</label>
                   <textarea name="details" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="file">أرفق الملف</label>
                <input type="file" name="file" id="file" class="form-control">    
            </div>
            <button class="btn btn-custom" name="create">نشر</button>
        </form>
        <?php echo $alert ?>
        <?php echo $error_message ?>
    </div>
 </div>
</div>
</div>
<!-- end content -->
     <script src="./../js/bootstrap.min.js"></script>
    <script src="./../js/main.js"></script>
</body>

</html>