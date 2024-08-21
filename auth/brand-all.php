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
<!-- this is all category from -->

   <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
   <h2> <?php if(isset($_GET['msg'])){
    echo $_GET['msg'];
   } ?> </h2>
  </div>
</div>

<!-- Products Inventory -->
<div class="card card-default">
  <div class="card-header">
    <h2>category Inventory</h2>

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-data-tables" role="button" aria-expanded="false"
      aria-controls="collapse-data-tables"> </a>

  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-data-tables">
      <pre class="language-html mb-4">
<code >
&lt;table id="productsTable" class="table table-hover table-product" style="width:100%">
  &lt;thead>
    &lt;tr>
      &lt;th>Image&lt;/th>
      &lt;th>Product Name&lt;/th>
      &lt;th>ID&lt;/th>
      &lt;th>Qty&lt;/th>
      &lt;th>Variants&lt;/th>
      &lt;th>Committed&lt;/th>
      &lt;th>User Activity&lt;/th>
      &lt;th>Sold&lt;/th>
      &lt;th>In Stock&lt;/th>
      &lt;th>&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-01.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Coach Swagger&lt;/td>
      &lt;td>24541&lt;/td>
      &lt;td>27&lt;/td>
      &lt;td>1&lt;/td>
      &lt;td>2&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-01">&lt;/div>
      &lt;/td>
      &lt;td>4&lt;/td>
      &lt;td>18&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

 



  &lt;/tbody>
&lt;/table>
</code>
      </pre>
    </div>
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>ID</th>
          <th>Qty</th>
          <th>Variants</th>
          <th>Committed</th>
          <th>Action</th>
          <th>Sold</th>
          <th>In Stock</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

      <!-- category dynamic for php start-->
      <?php 
      
      require_once("db/config.php");

      $query = "SELECT * FROM brand";

      $sql = $conn->query($query);

      if($sql->num_rows>0){
        while($rows = $sql->fetch_assoc()){

            ?>

<tr>
          <td class="py-0">
            <img src="<?php echo $rows['image'] ?>" alt="Product Image">
          </td>
          <td><?php echo $rows['name']   ?></td>
          <td><?php echo $rows['id'] ?></td>
          <td>27</td>
          <td>1</td>
          <td>2</td>
          <td>
            <a href="brand-show.php?id=<?php echo $rows['id']  ?>">Show</a> <a href="cat-update.php?id=<?php echo $rows['id'] ?>">Update</a> <a href="brand-delete.php?id=<?php echo $rows['id'] ?>">Deleted</a>
          </td>
          <td>4</td>
          <td>18</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

            <?php
        }
      }
      
      
      ?>

          <!-- category dynamic for php end -->

       



      </tbody>
    </table>

  </div>
</div>
</div>
          
        </div>


<?php
require_once("admin-footer.php");


?>


 



<?php
}else{
    $msg= "you have to need login again";
    header("location: login.php?msg=$msg");
}



?>

