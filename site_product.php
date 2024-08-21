<?php
require_once("auth/db/config.php");
if(isset($_GET['id'])){
   $proid = $_GET['id'];

   $query = "SELECT * FROM product WHERE id = $proid";
   $sql = $conn->query($query);

   $rows = $sql->fetch_assoc();

   if(!empty($_SESSION['cart'])){
      $proid_array_check = array_column($_SESSION['cart'],'pro_id');
   if(in_array($proid,$proid_array_check)){
         $_SESSION['cart'][$proid]['qty'] +=1;
   }else{
      $items = [
         'pro_id' => $proid,
         'name'   => $rows['name'],
         'price'  => $rows['sale_price'],
         'image'  => $rows['feature_image'],
         'qty'    => 1,
      ];
      $_SESSION['cart'][$proid]= $items;
   }

   }else{
      $items = [
         'pro_id' => $proid,
         'name'   => $rows['name'],
         'price'  => $rows['sale_price'],
         'image'  => $rows['feature_image'],
         'qty'    => 1,
      ];
      $_SESSION['cart'][$proid]= $items;
   }



   

   
   


}


?>

<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               <?php 
                  $query = "SELECT * FROM product";
                  $sql = $conn->query($query);

                  if($sql->num_rows>0){
                     while($rows = $sql->fetch_assoc()){
                        ?>
                     <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="?id=<?php echo $rows['id'] ?>" class="option1">
                           Add To Cart
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="auth/<?php echo $rows['feature_image'] ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo $rows['name'] ?>
                        </h5>
                        <h6>
                           <?php echo $rows['sale_price'] ?>
                        </h6>
                     </div>
                  </div>
               </div>

                        <?php
                     }
                  }
               ?>


               


               
            
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>