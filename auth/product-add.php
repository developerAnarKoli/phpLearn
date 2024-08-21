<?php
//class 107-108
session_start();

if(isset($_SESSION['username'])){
   
?>

<?php
require_once("admin-header.php");
require_once("admin-sidebar.php");
require_once("admin-topbar.php");
?>
<!-- this is add category from start -->
<div class="content-wrapper">
          <div class="content">   

          <form action="product-save.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                      
                       
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" name="name" id="email" aria-describedby="emailHelp" placeholder="Enter category name here">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" name="regular_price" id="email" aria-describedby="emailHelp" placeholder="Enter regular price here">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" name="sale_price" id="email" aria-describedby="emailHelp" placeholder="Enter sale price here">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <label for="cat_id">Product category</label>
                          <select class="form-control input-lg" name="cat_id" id="">
                            <?php
                              require_once("db/config.php");

                              $query = "SELECT * FROM category";
                              $sql = $conn->query($query);
                              if($sql->num_rows>0){
                                while($rows=$sql->fetch_assoc()){
                                  ?>
                                  <option value="<?php echo $rows['id'] ?>"> <?php echo $rows['name']  ?> </option>
                                  <?php
                                }
                              }
                            ?>
                           
                           
                          </select>
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <label for="brand_id">Product Brand</label>
                          <select class="form-control input-lg" name="brand_id" id="">
                            <?php
                              require_once("db/config.php");

                              $query = "SELECT * FROM brand";
                              $sql = $conn->query($query);
                              if($sql->num_rows>0){
                                while($rows = $sql->fetch_assoc()){
                                  ?>
                                    <option value="<?php echo $rows['id'] ?>"><?php echo $rows['name']  ?> </option>
                                  <?php
                                }
                              }

                            ?>
                            
                          </select>
                        </div>

                        <div class="form-group col-md-12 mb-4">
                          <input type="file" class="form-control input-lg" name="feature_image" id="email" aria-describedby="emailHelp" placeholder="Enter catagory Image here">
                        </div>

                     
                          

                          <button type="submit" class="btn btn-primary btn-pill mb-4">Save</button>

                         
                        </div>
                      </div>
                    </form>

</div>
</div>
<!-- this is add category from end -->

<?php
require_once("admin-footer.php");


?>


 



<?php
}else{
    $msg= "you have to need login again";
    header("location: login.php?msg=$msg");
}



?>
