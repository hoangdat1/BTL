<?php 

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Su Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
    <div id="top"><!-- Top Begin -->
        
        <div class="container"><!-- container Begin -->
            
            <div class="col-md-8 offer"><!-- col-md-6 offer Begin -->
                
                <a style="margin-right: 10px;" href="tel:0935000000"><i class="fa fa-phone"></i> 0935.000.000</a>
                <a style="margin-right: 10px;" href="mailto:hoangxuandatnb2003@gmail.com"><i class="fa fa-envelope-o"></i> hoangxuandatnb2003@gmail.com</a>
                <a href="https://maps.app.goo.gl/cYW4WKyyRgtbd9LKA"><i class="fa fa-map-marker"></i> 18 P. Viên, Đông Ngạc, Bắc Từ Liêm, Hà Nội</a>
                
            </div><!-- col-md-6 offer Finish -->
            
            <div class="col-md-4"><!-- col-md-6 Begin -->
                
                <ul class="menu"><!-- cmenu Begin -->

                    <li>
                        <a href="../cart.php">Giỏ hàng</a>
                    </li>

                    <li>
                        <?php 
                        
                            if(!isset($_SESSION['customer_username'])){
                                
                                echo "<a href='../customer_register.php'> Đăng ký </a>";
                                
                            }else{
                                
                                echo "<a href='my_account.php?my_orders'> ".$_SESSION['customer_username']." </a>";
                                
                            }
                        
                        ?>
                    </li>
                    
                    <li>
                        <a href="../checkout.php">
                            
                            <?php 
                            
                                if(!isset($_SESSION['customer_username'])){
                        
                                    echo "<a href='checkout.php'> Đăng nhập </a>";

                                }else{

                                    echo " <a href='logout.php'> Đăng xuất </a> ";

                                }
                            
                            ?>
                            
                        </a>
                    </li>
                    
                </ul><!-- menu Finish -->
                
            </div><!-- col-md-6 Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- Top Finish -->
    
    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
        
        <div class="container"><!-- container Begin -->
            
            <div class="navbar-header"><!-- navbar-header Begin -->
                
                <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                    
                    <img src="images/Su Store125x49.png" alt="Su-Store Logo" class="hidden-xs">
                    <img src="images/Su Store 83x33.png" alt="Su-Store Logo Mobile" class="visible-xs">
                    
                </a><!-- navbar-brand home Finish -->
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    
                    <span class="sr-only">Toggle Navigation</span>
                    
                    <i class="fa fa-align-justify"></i>
                    
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    
                    <span class="sr-only">Toggle Search</span>
                    
                    <i class="fa fa-search"></i>
                    
                </button>
                
            </div><!-- navbar-header Finish -->
            
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
                
                <div class="padding-nav"><!-- padding-nav Begin -->
                    
                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                        
                        <li class="<?php if($active=='Home') echo"active"; ?>">
                            <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a>
                        </li>
                        <?php 

                            $get_p_cats = "select * from product_categories";
                                            
                            $run_p_cats = mysqli_query($con,$get_p_cats);

                            while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                
                                $p_cat_id = $row_p_cats['p_cat_id'];
                                
                                $p_cat_title = $row_p_cats['p_cat_title'];
                                
                        ?>
                            <li class="<?php if($active=='') echo"active"; ?>">
                                <a href="shop.php?p_cat=<?php echo $p_cat_id ?>"><?php echo $p_cat_title ?></a>
                            </li>
                        <?php    

                            }

                        ?>
                        
                    </ul><!-- nav navbar-nav left Finish -->
                    
                </div><!-- padding-nav Finish -->
                
                <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                    
                    <i class="fa fa-shopping-cart"></i>
                    
                    <span><?php items(); ?> sản phẩm trong giỏ hàng</span>
                    
                </a><!-- btn navbar-btn btn-primary Finish -->
                
                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                    
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                        
                        <span class="sr-only">Toggle Search</span>
                        
                        <i class="fa fa-search"></i>
                        
                    </button><!-- btn btn-primary navbar-btn Finish -->
                    
                </div><!-- navbar-collapse collapse right Finish -->
                
                <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                    
                    <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                        
                        <div class="input-group"><!-- input-group Begin -->
                            
                            <input type="text" class="form-control" placeholder="Tìm kiến sản phẩm" name="user_query" required>
                            
                            <span class="input-group-btn"><!-- input-group-btn Begin -->
                            
                            <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                                
                                <i class="fa fa-search"></i>
                                
                            </button><!-- btn btn-primary Finish -->
                            
                            </span><!-- input-group-btn Finish -->
                            
                        </div><!-- input-group Finish -->
                        
                    </form><!-- navbar-form Finish -->
                    
                </div><!-- collapse clearfix Finish -->
                
            </div><!-- navbar-collapse collapse Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- navbar navbar-default Finish -->
<?php
    if (isset($_GET['search'])) {
        $search = $_GET['user_query'];
        $_SESSION['user_query'] = $search;
        echo "<script>window.open('results.php','_self')</script>";
    }
?>