<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Trang</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="../cart.php">Giỏ hàng</a></li>
                    <li><a href="../contact.php">Liên hệ với chúng tôi</a></li>
                    <li><a href="../shop.php">Cửa hàng</a></li>
                    <li><a href="customer/my_account.php">Tài khoản</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>Người dùng</h4>
                
                <ul><!-- ul Begin -->
                    <?php 
                           
                        if(!isset($_SESSION['customer_username'])){
                               
                            echo"<a href='../checkout.php'>Đăng nhập</a>";
                               
                        }else{
                               
                            echo"<a href='my_account.php?my_orders'>".$_SESSION['customer_username']."</a>"; 
                               
                        }
                           
                    ?>
                    
                    <li>
                    
                        <?php 
                           
                           if(!isset($_SESSION['customer_username'])){
                               
                               echo"<a href='../checkout.php'>Đăng ký</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?edit_account'>Sửa thông tin tài khoản</a>"; 
                               
                           }
                           
                        ?>
                    </li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Danh mục sản phẩm hàng đầu</h4>
                
                <ul><!-- ul Begin -->
                <?php 
                    
                    $get_p_cats = "select * from product_categories";
                
                    $run_p_cats = mysqli_query($con,$get_p_cats);
                
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        
                        $p_cat_title = $row_p_cats['p_cat_title'];
                        
                        echo "
                        
                            <li>
                            
                                <a href='../shop.php?p_cat=$p_cat_id'>
                                
                                    $p_cat_title
                                
                                </a>
                            
                            </li>
                        
                        ";
                        
                    }
                
                ?>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Về chúng tôi</h4>
                
                <p><!-- p Start -->
                    
                    <br/><strong><a href="" target="_blank">Hoàng Xuân Đạt - 2121051246 </a></strong>
                    <br/><strong>Địa chỉ cửa hàng:</strong> 18 P. Viên, Đông Ngạc, Bắc Từ Liêm, Hà Nội
                    <br/><strong>Hoàng Xuân Đạt </strong>
                    <br/><strong>SĐT của hàng:</strong> 038.228.7***
                    <br/><strong>Email cửa hàng:</strong> 2121051246@student.humg.edu.vn
                    
                </p><!-- p Finish -->
                
                <a href="../contact.php">Trang liên hệ của chúng tôi</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.6099144515656!2d106.1760120142351!3d20.440127812989108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e74104c236ad%3A0x96810d666256721c!2zMTA2IE5ndXnhu4VuIMSQ4bupYyBUaHXhuq1uLCBUaOG7kW5nIE5o4bqldCwgVFAuIE5hbSDEkOG7i25oLCBOYW0gxJDhu4tuaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1667228360399!5m2!1svi!2s" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                
                <hr>
                
                <h4>Liên lạc qua mạng xã hội</h4>
                
                <p class="social">
                    <a href="" target="_blank" class="fa fa-facebook"></a>
                    <a href="" target="_blank" class="fa fa-twitter"></a>
                    <a href="" target="_blank" class="fa fa-instagram"></a>>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2022 Su Store All Rights Reserve</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme by: <a href="#">Hoàng Xuân Đạt - 2121051246</a></p>
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->