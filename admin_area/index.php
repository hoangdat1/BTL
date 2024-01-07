<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_username'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        //Lấy thông tin admin
        $admin_session = $_SESSION['admin_username'];
        
        $get_admin = "select * from admins where admin_username='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];

        $admin_username = $row_admin['admin_username'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_address = $row_admin['admin_address'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        //Lấy thông tin sản phẩm
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        //Lấy thông tin danh mục người dùng
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        //Lấy danh mục sản phẩm
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);

        //Lấy oders
        $get_orders = "select * from orders";
        
        $run_orders = mysqli_query($con,$get_orders);
        
        $count_orders = mysqli_num_rows($run_orders);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang admin Su Store</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                    }
                    //Sản phẩm
                    if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                    }   
                    if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                    }   
                    if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                    }   
                    if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                    }
                    //Danh mục sản phẩm
                    if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                    }   
                    if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                    }   
                    if(isset($_GET['delete_p_cat'])){
                        
                        include("delete_p_cat.php");
                        
                    }   
                    if(isset($_GET['edit_p_cat'])){
                        
                        include("edit_p_cat.php");
                        
                    }  
                    //Slides 
                    if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                    }   
                    if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                        
                    }   
                    if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                    }   
                    if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                        
                    }   
                    //Boxes
                    if(isset($_GET['insert_box'])){
                        
                        include("insert_box.php");
                        
                    }   
                    if(isset($_GET['view_boxes'])){
                        
                        include("view_boxes.php");
                        
                    }   
                    if(isset($_GET['delete_box'])){
                        
                        include("delete_box.php");
                        
                    }   
                    if(isset($_GET['edit_box'])){
                        
                        include("edit_box.php");
                        
                    }
                    //Xem tất cả người dùng
                    if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                        
                    }   
                    if(isset($_GET['delete_customer'])){
                        
                        include("delete_customer.php");
                        
                    }   
                    //Xem đơn đặt hàng
                    if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                    }   
                    if(isset($_GET['delete_order'])){
                        
                        include("delete_order.php");
                        
                    }
                    //Admin  
                    if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                    }   
                    if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                    }   
                    if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                    }   
                    if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                    }
                    if(isset($_GET['change_pass_admin'])){
                        
                        include("change_pass_admin.php");
                        
                    }
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>