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

          <form action="brand-save.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                      
                       
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" name="name" id="email" aria-describedby="emailHelp" placeholder="Enter brand name here">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="file" class="form-control input-lg" name="brand_image" id="email" aria-describedby="emailHelp" placeholder="Enter brand Image here">
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
