<?php
 include('./../include/connection.php');
 include('./../include/auth/sess.php');
 include('./../include/auth/auth.php');
$alert="";
$error_message="";
$check=false;
  if (isset($_POST['add'])) {
    $cat_name=$_POST['category'];
    $cat_add=$_POST['add'];
    $sql="SELECT category_name FROM categories ";
    $result = mysqli_query($conn, $sql);              
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    if ($row['category_name']==$cat_name) {
        $check=true;
      }
  }
  }
    
        if (empty($cat_name)) {
        
        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">أملأ الحقل</div>";
     
    }elseif (strlen( $cat_name)>100) {
        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
        عدد الحروف يجب أن لا يتجاوز 100 حرف</div>";
    }elseif ($check) {
        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
        هذا التصنيف موجود مسبقاً</div>";
    }else {

         $query ="INSERT INTO categories (category_name) VALUES ('$cat_name')";
         mysqli_query($conn,$query);
         $alert= "<div class=\"alert alert-primary\" role=\"alert\">
         تمت إضافة التصنيف
       </div>";
    }
  }
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
                <div class="add-category">
                    <!--start form -->
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <label for="category">تصنيف جديد</label>
                            <input type="text" name="category" id="" class="form-control">
                        </div>
                        <button class="btn btn-custom " name="add">إضافة</button>
                    </form>
                    <!-- end form -->
                </div>
                <?=$alert?>
                <?=$error_message?>
                <!-- display categories -->
                <div class="disply-cat mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">إسم الفئة</th>
                                <th scope="col">تاريخ الاضافة</th>
                                <th scope="col">حذف</th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php 

                             $sql="SELECT * FROM categories ";
                             $result = mysqli_query($conn, $sql);
                          
                        if (mysqli_num_rows($result) > 0) {
                            $i=1;
                            
                      while($row = mysqli_fetch_assoc($result)) {
                        $in=  "<a href='./../pages/deletecat.php?a=".$row['id']."' class='btn btn-primary'> Delete</a>";
                          echo "<tr> 
                          <td>".($i++)."</td>".
                            "<td>".$row["category_name"] ."</td>".
                             "<td>" . $row["category_date"]."</td>";
                             echo "<td>". $in."</td>";
                             echo "</tr>";
                      
                            }
                    } 
                            
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <script src="./../js/bootstrap.min.js"></script>
    <script src="./../js/main.js"></script>
</body>

</html>