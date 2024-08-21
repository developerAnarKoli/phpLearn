  <!-- header section strats -->
  <?php require_once("site_header.php") ?>
         <!-- end header section -->
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <style>
                    table{
                        width: 100%;
                        border-collapse: collapse;
                        
                    }
                    th,td{
                        border: 1px solid #ddd;
                        text-align: left;
                        padding: 8px;
                    }
                    tr:nth-child(even){
                        background: #ddd;
                    }
                </style>
            </head>
            <body>
                <?php
                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
                
                ?>
                
                    <table>
                        <tr>
                            <th>Serial NO</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Qty</th>
                            <th>Product Total Price</th>
                            <th>action</th>
                        </tr>

                        <?php
                            if(isset($_SESSION['cart'])){
                                $slno = 1;
                                foreach($_SESSION['cart'] as $signle_cart){
                                    

                                    ?>
                            <form action="update-cart.php" method="post">       
                            <tr>
                                <td> <?php echo $slno; ?> </td>
                                <td> 
                                    
                                    <input type="hidden" name="pro_id" value="<?php echo $single_cart['pro_id']?>">
                                    <?php echo $signle_cart['name'] ?> 
                                
                                </td>
                                <td> <img src="auth/<?php echo $signle_cart['image'] ?>" width="50" alt=""> </td>
                                <td> <?php echo $signle_cart['price'] ?> </td>
                                
                                <td> <input type="text" name="qty" value="<?php echo $signle_cart['qty'] ?>" id=""> </td>
                                
                                <td> <?php echo $signle_cart['price']*$signle_cart['qty'] ?> </td>
                                <td> 
                                    <button type="submit">Update</button>
                                    <a href="deletecart.php?id=<?php echo $signle_cart['pro_id']; ?> ">Deleted</a>
                                </td>
                            </tr>
                            </form>
                                    <?php
                                $slno++;
                                }
                                
                            }
                        ?>

                    </table>
             
            </body>
            </html>          
        <!-- footer start -->
        <?php require_once("site_footer.php") ?>
        <!-- footer end -->
