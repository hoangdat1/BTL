<?php 

session_start();

include("includes/db.php"); //kết nối
include("functions/functions.php"); //gọi đến functions.php (cái này là cái để lưu hàm)

?>

<?php 

    if(isset($_GET['pro_id'])){ //nếu tồn tại với pro_id này tức là tồn tại cái id_sản phẩm nào đó thì sẽ lấy thông tin chi tiết sản phẩm đó
        
        $product_id = $_GET['pro_id']; //khi có biến  $_GET['pro_id'] thì sẽ lấy được ra id sản phẩm đầu tiên
        
        $get_product = "select * from products where product_id='$product_id'";
        
        $run_product = mysqli_query($con,$get_product);
        
        $row_products = mysqli_fetch_array($run_product);
        
        $p_cat_id = $row_products['p_cat_id']; //lấy ra danh mục sản phẩm
        
        $pro_title = $row_products['product_title'];
        
        $pro_price = $row_products['product_price'];

        $pro_sale_price = $row_products['product_sale'];
        
        $pro_desc = $row_products['product_desc'];
        
        $pro_img1 = $row_products['product_img1'];
        
        $pro_img2 = $row_products['product_img2'];
        
        $pro_img3 = $row_products['product_img3'];

        $pro_label = $row_products['product_label'];

        if($pro_label == ""){
                

        }else{

            $product_label = "
            
                <a href='#' class='label $pro_label'>
                
                    <div class='theLabel'> $pro_label </div>
                    <div class='labelBackground'>  </div>
                
                </a>
            
            ";

        }
        
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
                        <?php 
                            
                            if(!isset($_SESSION['customer_username'])){
                                
                                echo "<a href='customer_register.php'>Đăng ký</a>";
                                
                            }else{
                                
                                echo "<a href='customer/my_account.php?edit_account'>".$_SESSION['customer_username']."</a>";
                                
                            }
                        
                        ?>
                    </li>

                    <li>
                        <a href="checkout.php">
                            
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
                
                <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                    
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

                            $get_p_cats = "select * from product_categories"; //câu lệnh truy vấn sql để lấy dữ liệu
                                            
                            $run_p_cats = mysqli_query($con,$get_p_cats); //chạy câu lệnh

                            while($row_p_cats=mysqli_fetch_array($run_p_cats)){ //vòng while lấy dữ liệu (điều kiện chạy vòng while là lấy hết ra danh mục sản phẩm)
                                
                                $p_cat_id = $row_p_cats['p_cat_id']; //lấy được id_danh mục sản phẩm 
                                
                                $p_cat_title = $row_p_cats['p_cat_title']; //ten danh mục sản phẩmm
                                
                        ?>

                            <li class="<?php if($active=='') ?>">
                                <a href="shop.php?p_cat=<?php echo $p_cat_id ?>"><?php echo $p_cat_title ?></a>
                            </li>

                        <?php    

                            } //đây mới là kết thúc của vùng while

                        ?>
                        
                    </ul><!-- nav navbar-nav left Finish -->
                    
                </div><!-- padding-nav Finish -->
                
                <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                    
                    <i class="fa fa-shopping-cart"></i>
                    
                    <span>Có <?php items(); ?> sản phẩm trong giỏ hàng</span> <!--cĐếm số sản phẩm có trong bảng cart -->
                    
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