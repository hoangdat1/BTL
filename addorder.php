<?php 

include("includes/db.php");
include("functions/functions.php");

?>
<?php 

if(isset($_GET['c_id'])){
    
    $customer_id = $_GET['c_id'];
    // echo "<h1>id người dùng: $customer_id</h1>";
    
}
if(isset($_POST['submit'])){

    $name = $_POST['name'];

    $phone = $_POST['phone'];

    $email = $_POST['email'];

    $address = $_POST['address'];

    $message = $_POST['message'];

    $ip_add = getRealIpUser();

    $select_cart = "select * from cart where ip_add='$ip_add'";

    $run_cart = mysqli_query($con,$select_cart);

    while($row_cart = mysqli_fetch_array($run_cart)){
        
        $pro_id = $row_cart['p_id']; //id sản phẩm lấy trong bảng cart
        
        $pro_qty = $row_cart['qty'];
        
        $pro_size = $row_cart['size'];
        
        $get_products = "select * from products where product_id='$pro_id'";
        
        $run_products = mysqli_query($con,$get_products);
        
        while($row_products = mysqli_fetch_array($run_products)){
            
            $product_title = $row_products['product_title'];

            $sub_total = $row_products['product_price']*$pro_qty;
            
            $insert_orders = "insert into orders (customer_id, name, phone, email, address, note, name_product, quantity, total, date_create) values ('$customer_id','$name','$phone','$email','$address','$message','$product_title','$pro_qty','$sub_total',NOW())";
            $run_customer_order = mysqli_query($con,$insert_orders);
            
            $delete_cart = "delete from cart where ip_add='$ip_add'";
            
            $run_delete = mysqli_query($con,$delete_cart);
            
            echo "<script>alert('Đơn đặt hàng của bạn đã được gửi, Cảm ơn bạn đã mua hàng')</script>";
            
            echo "<script>window.open('cart.php','_self')</script>";
            
        }
    }
}

?>