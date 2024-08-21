<?php
session_start();
if(isset($_SESSION['username'])){
    require_once("admin-header.php");
    require_once("admin-topbar.php");
    require_once("admin-sidebar.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("db/config.php");
        $query = "SELECT * FROM product WHERE id = $id";
        $sql = $conn->query($query);
        $rows = $sql->fetch_assoc();
    }
    ?>


    <!-- this is add product signle show from start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .user{
            text-align: center;
        }
        .user-info {
            width: 600px;
            display: inline-block;
        }
        img{
            width: 100%;
        }
    </style>
</head>
<body>
    
    <section class="user">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="user-info">
                        <img src="<?php echo $rows['feature_image'] ?>" alt="">
                        <h2><?php echo $rows['name'] ?></h2>
                        <h4> Regular Price: <?php echo $rows['regular_price'] ?> </h4>
                        <h4> Sale Price: <?php echo $rows['sale_price'] ?> </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<!-- this is product single show from end -->
    <?php
    require_once("admin-footer.php");

}else{
    $msg = "product not show there";
    header("location: product-all.php?msg=$msg");
}


?>