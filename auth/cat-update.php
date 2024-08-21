<?php
//class 107-108
require_once("db/config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM category WHERE id =$id ";
    $sql = $conn->query($query);
    $rows = $sql->fetch_assoc();
}
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

          <form action="cat-update-save.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data">
                      <div class="row">
                      
                       
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" name="name" value="<?php echo $rows['name'] ?>" id="email" aria-describedby="emailHelp" placeholder="Enter category name here">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="file" class="form-control input-lg" name="catimage" value="<?php echo $rows['image'] ?>" id="email" aria-describedby="emailHelp" placeholder="Enter catagory Image here">
                        </div>

                     
                          

                          <button type="submit" class="btn btn-primary btn-pill mb-4">Update</button>

                         
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
