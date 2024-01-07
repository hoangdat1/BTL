<?php 
    
    if(!isset($_SESSION['admin_username'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Xem tất cả đơn đặt hàng
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Xem tất cả đơn đặt hàng
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Đơn đặt hàng: </th>
                                <th> Tên khách hàng: </th>
                                <th> Điện thoại: </th>
                                <th> Email: </th>
                                <th> Địa chỉ: </th>
                                <th> Ghi chú: </th>
                                <th> Tên sản phẩm: </th>
                                <th> Số lượng: </th>
                                <th> Tổng tiền: </th>
                                <th> Ngày đặt: </th>
                                <th> Xoá đơn đặt hàng: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_orders = "select * from orders";
                                
                                $run_orders = mysqli_query($con,$get_orders);
          
                                while($row_order=mysqli_fetch_array($run_orders)){
                                    
                                    $order_id = $row_order['order_id'];                          
                                    $customer_id = $row_order['customer_id'];                         
                                    $name = $row_order['name'];                     
                                    $phone = $row_order['phone'];                      
                                    $email = $row_order['email'];                         
                                    $address = $row_order['address'];
                                    $note = $row_order['note'];
                                    $name_product = $row_order['name_product'];
                                    $quantity = $row_order['quantity'];
                                    $total = $row_order['total']; 
                                    $date_create = $row_order['date_create']; 
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $name; ?> </td>
                                <td> <?php echo $phone; ?></td>
                                <td> <?php echo $email; ?> </td>
                                <td> <?php echo $address; ?></td>
                                <td> <?php echo $note; ?> </td>
                                <td> <?php echo $name_product; ?> </td>
                                <td> <?php echo $quantity; ?> </td>
                                <td> <?php echo $total; ?> đ</td>
                                <td> <?php echo $date_create; ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_order=<?php echo $order_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Xoá
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>