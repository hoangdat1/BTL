
<div class="box"><!-- box Begin -->
   
   <?php 
    
    // session_start();

    $session_username = $_SESSION['customer_username'];
    
    $select_customer = "select * from customers where customer_username='$session_username'";

    // echo $select_customer;
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];

    // echo "<h1>$customer_id</h1>";

    // echo "<h1>$ip_add</h1>"
    
    ?>
    
    <h1 class="text-center">Thông tin người nhận</h1>  
     
    <form action="addorder.php?c_id=<?php echo $customer_id ?>" method="post"><!-- form Begin -->
                            
                            <div class="form-group"><!-- form-group Begin -->
                                
                                <label>Tên của bạn</label>
                                
                                <input type="text" class="form-control" placeholder="Nhận tên của bạn" name="name" required value="<?php if(isset($_POST['name']) && $_POST['name'] != NULL){ echo $_POST['name']; } ?>">
                                
                            </div><!-- form-group Finish -->
                            
                            <div class="form-group"><!-- form-group Begin -->
                                
                                <label>Điện thoại</label>
                                
                                <input type="text" class="form-control" placeholder="Số điện thoại" name="phone" required value="<?php if(isset($_POST['phone']) && $_POST['phone'] != NULL){ echo $_POST['phone']; } ?>">
                                
                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->
                                
                                <label>Email</label>
                                
                                <input type="email" class="form-control" placeholder="hoangxuandatnb2003@gmail.com" name="email" required value="<?php if(isset($_POST['email']) && $_POST['email'] != NULL){ echo $_POST['email']; } ?>">
                                
                            </div><!-- form-group Finish -->
                            
                            <div class="form-group"><!-- form-group Begin -->
                                
                                <label>Địa chỉ nhận hàng</label>
                                
                                <input type="text" class="form-control" name="address" required value="trường đại học Mỏ Địa Chất">
                                
                            </div><!-- form-group Finish -->
                            
                            <div class="form-group"><!-- form-group Begin -->
                                
                                <label>Ghi chú</label>
                                
                                <textarea name="message" class="form-control" rows="8">Shop Su Store quá tuyệt vời, 10 điểm :))</textarea>
                                
                            </div><!-- form-group Finish -->
                            
                            <div class="text-center"><!-- text-center Begin -->
                                
                                <button type="submit" name="submit" class="btn btn-primary">
                                
                                 Đặt hàng
                                
                                </button>
                                
                            </div><!-- text-center Finish -->
                            
                        </form><!-- form Finish -->
    
</div><!-- box Finish -->

