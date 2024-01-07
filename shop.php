<?php 

    $active='Shop';
    include("includes/header.php");

?>



<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <ul class="breadcrumb">
                <!-- breadcrumb Begin -->
                <li>
                    <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a>
                </li>
                <li>
                    Cửa hàng
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-12">
            <!-- col-md-9 Begin -->

            <div id="products" class="row"><!-- row Begin -->


            <?php 
               
               getpcatpro(); 
               
               getcatpro();
               
            ?>

        </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->
    </div><!-- #content Finish -->
</div>

<?php 
    
    include("includes/footer.php");
    
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>