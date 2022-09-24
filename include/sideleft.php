 <!--start catagories -->
 <div class="categories">
     <h4>التصنيفات</h4>
     <ul>
         <?php 
                             $sql="SELECT * FROM categories ";
                             $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {

                          echo "<li><a href='./../pages/cat_post.php?a=".$row['category_name']."'><span><i class='fas fa-tags'></i></span>".$row["category_name"]."</a></li>";
                       }
                    } 
                       ?>
     </ul>
 </div>
 <!-- end catagories -->
 <!-- المستخدمون -->
 <div class="creater" style="">
     <ul>
         <h4>المستخدمون</h4>

         <?php 
                             $sql="SELECT * FROM users ";
                             $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {

                          echo "<li class ='user_image'><a href='./../pages/user_profile.php?a=".$row['id']."'>
                          <span><img src='./../images/".$row['avatar']."'  alt=''></span>"
                          .$row["username"]."</a></li>";
                       }
                    } 
                       ?>
     </ul>
 </div>