<?php
    $layout = "LayoutTrangChu.php";
?>
<!-- start main  -->
<main class="container products">
    <!-- start session -->
    <h2>Trái cây nội địa</h2>
    <hr>
    <div class="list-product">
        <?php $hotProducts = $this->modelHotProducts();  ?>
    <?php foreach($hotProducts as $rows): ?>
    <div class="item">
        <div class="product">
            <div class="info-prod">
                <div class="img-prod">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" /></a>
                </div>
                <h3><?php echo $rows->name; ?></h3>
                <div class="des-prod">
                    <?php echo $rows->description; ?>
                    
                </div>
                <div class="rate-prod info_product_rating">
                    <ul>
                        <li><a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=1"><img src="../assets/frontend/layout/img/star.jpg"></a></li>
                        <li><a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=2"><img src="../assets/frontend/layout/img/star.jpg"></a></li>
                        <li><a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=3"><img src="../assets/frontend/layout/img/star.jpg"></a></li>
                        <li><a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=4"><img src="../assets/frontend/layout/img/star.jpg"></a></li>
                        <li><a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=5"><img src="../assets/frontend/layout/img/star.jpg"></a></li>
                       
                 </ul>
                </div>
              
                <div class="price-prod">
                    <span><?php echo number_format($rows->price); ?>đ</span><span><?php echo number_format($rows->price-($rows->price*$rows->discount/100)); ?>đ</span>
                </div>
               
            </div>  <form>
            <div class="add-cart">
                <a href="index.php?controller=cart&action=create&productId=<?php echo $rows->id; ?>" class="button">Add cart</a>
            <a>Mua ngay</a>
           
        </div>     <form>
    </div>
        </div>
<!-- end  -->

<?php endforeach; ?>
</div>
<!-- end session -->

<!-- start session -->
<!-- <h2>Trái cây nhập khẩu</h2> -->
<hr>

<!-- end  -->

<!-- end session -->
</main>
<!-- End main  -->

    <section class="list-method">
    <div class="methods">
        <div class="method method1">
            <img src="../assets/frontend/layout/img/giaohang2.png" style="color:oranger;" alt="">
            <div>
                <h3>Giao hàng</h3>
                <p>Giao hàng nhanh tiện lợi.Miễn phí giao hàng trong nội thành Hà Nội</p>
            </div>
        </div>
        <div class="method method2">
            
            <img src="../assets/frontend/layout/img/quatang2.jpg" style="color:oranger;" alt="">
            <div> <h3>Qùa tặng</h3>
                <p>Giao hàng nhanh tiện lợi</p></div>
            </div>
            <div class="method method3">
                
                <img src="../assets/frontend/layout/img/thanhtoan3.jpg" style="color:oranger;" alt="">
                <div> <h3>Khuyến mại</h3>
                    <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p></div>
                </div>
                <div class="method method4">
                    
                    <img src="../assets/frontend/layout/img/doitra.png" style="color:oranger;" alt="">
                    <div><h3>Đổi trả</h3>
                        <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p></div>
                    </div>
                </div>
            </section>
    <section class="hot-news">
        <h2>Hot news</h2><br>
       <div class="hot-new-left">
        <?php 
                $conn = Connection::getInstance();
                //lay 6 tin noi bat
                $queryHotNews = $conn->query("select * from news where hot = 1 order by id desc");
                $hotNews = $queryHotNews->fetchAll(PDO::FETCH_OBJ);
             ?>            
             <?php foreach($hotNews as $rows): ?>
        <!-- start news -->
        <div class="news-item" style="height:150px;overflow: hidden;">
            <a href="#"><a href="index.php?controller=news&action=detail&newsId=<?php echo $rows->id; ?>">
                <div class="news-img">
                  <img src="../assets/upload/news/<?php echo $rows->photo; ?>" height="120px" />
                </div></a>
                <div class="news-info">
                    <h3><?php echo $rows->name; ?></h3>
                    <p><?php echo $rows->description; ?></p>
                </div>
            </a>
        </div> 
        <!-- end news -->
       <?php endforeach; ?>
       </div><hr>
     
    </section>
    