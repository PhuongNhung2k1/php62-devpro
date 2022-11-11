<?php 
	$layout = "LayoutTrangTrong.php";
?>

 <main class="container category_prod products">
        <div class="cate_filter">
            <div class="list_category">
                 <?php 
                    $categoryId = isset($_GET["catId"]) ? $_GET["catId"] : 0;
                    $category = $this->modelGetCategory($categoryId);
                   ?>
                <div class="cate--ByProduct">
                    <h3>Sort by Name</h3>
                      <select onchange="location.href= 'index.php?controller=products&action=category&catId=<?php echo $categoryId; ?>&order='+this.value;">
                         <option <?php if(isset($_GET['order'])&& $_GET['order']=="nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Tăng dần</option>
                          <option <?php if(isset($_GET['order'])&& $_GET['order']=="nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Giảm dần</option>
                        <option <?php if(isset($_GET['order'])&& $_GET['order']=="name_T"): ?> selected <?php endif; ?> value="name_T">Táo</option>
                        <option <?php if(isset($_GET['order'])&& $_GET['order']=="name_C"): ?> selected <?php endif; ?> value="name_C">Bắt đầu bằng C</option>
                        <option <?php if(isset($_GET['order'])&& $_GET['order']=="name_abc"): ?> selected <?php endif; ?> value="name_abc">Bắt đầu bằng abc</option>
                    
                    </select>
                </div>

                <div class="cate--Price">
                    <h3>Sort by Price</h3>
                       <?php 
                    $categoryId = isset($_GET["catId"]) ? $_GET["catId"] : 0;
                    $category = $this->modelGetCategory($categoryId);
                   ?>
                    <!-- // lay ra san pham duoc sap xep theo gia -->
                    <br> 
                     <select onchange="location.href= 'index.php?controller=products&action=category&catId=<?php echo $categoryId; ?>&order='+this.value;">
                        <option <?php if(isset($_GET['order'])&& $_GET['order']=="priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                        <option <?php if(isset($_GET['order'])&& $_GET['order']=="priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                        <option <?php if(isset($_GET['order'])&& $_GET['order']=="range100_500"): ?> selected <?php endif; ?> value="range100_500">range 100 - 500</option>
                        <option <?php if(isset($_GET['order'])&& $_GET['order']==">500.000"): ?> selected <?php endif; ?> value=">500.000">Giá > 500000</option>
                        
                    </select>
               
                </div>
                 <?php 
                    $fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
                $toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;

                   ?>
                <div class="search-byprice" >
                    <div><h3>Search Price</h3>
                        <ul>
                            <li><span>Gía từ</span> <input type="number" min="0" value="<?php echo $fromPrice; ?>" id="fromPrice" /></li>
                            <li><span>Gía đến </span><input type="number" value="<?php echo $toPrice; ?>" id="toPrice"  /></li>
                        </ul>
                      <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                   </div>
                </div>
                <div class="cate--ByColor">
                    <h3>Sort by Color</h3>
                    <ul>
                        <li>
                            <input id="cateID_1" type="checkbox" name="category" />
                            <label for="cateID_1">Red</label>
                        </li>
                        <li>
                            <input id="cateID_2" type="checkbox" name="category" />
                            <label for="cateID_2">Green</label>
                        </li>
                        <li>
                            <input id="cateID_3" type="checkbox" name="category" />
                            <label for="cateID_3">White</label>
                        </li>
                        <li>
                            <input id="cateID_4" type="checkbox" name="category" />
                            <label for="cateID_4">Yellow</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="cate_product">
             <h2>
             <?php "<h2>
                Tìm kiếm giá từ <?php echo $fromPrice;?> đến <?php echo $toPrice;?>
              </h2>" ?> 
           
           <hr>
            </h2>
            <div class="cate_Byresult-search">

                <ul>
                    <li><a href="">Mới nhất</a></li>
                    <li><a href="">Liên quan</a></li>
                    <li><a href="">Bán chạy nhất</a></li>
                    <li><a href="">Sale</a></li>
                </ul>
            </div>
           
            <div class="list-product">
                <!-- lay sp theo id -->
                <!-- start -->
                <?php foreach($data as $rows): ?>
                <div class="item">
                    <div class="product">
                        <a href="index.php?controller=products&action=category&catId=<?php echo
                        $categoryId; ?>&id=<?php $id;?>">
                        <div class="info-prod">
                            <div class="img-prod">
                                <img src="../assets/upload/products/<?php echo $rows->photo; ?>" />
                            </div>
                            <h3><?php echo $rows->name; ?></h3>
                            <div class="des-prod">
                               <?php echo $rows->description; ?>

                            </div>
                            <div class="rate-prod info_product_rating">
                                 <ul>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote1" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote2" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote3" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote4" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote5" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="price-prod">
                                <span><?php echo number_format($rows->price); ?>VNĐ</span><span><?php echo number_format(($rows->price)*($rows->discount/100)); ?>VNĐ</span>
                            </div>

                        </div>
                    </a>
                        <div class="add-cart">
                            <form>
                              <a href="index.php?controller=cart&action=create&productId=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                            </form>
                            <!-- <button><i class="fas fa-cart-plus"><a href="index.php?controller=cart&action=create&productId=<?php echo $rows->id; ?>" class="button"></a></i></button>
                            <button>Mua ngay</i></span> -->
                        </div>
                    </div>
                </div>
                <!-- end  -->
                <?php endforeach; ?>
              </div>

            <!-- // hient hi so trang  -->
        
           
       <!--  <div style="clear: both;"></div>
        <div style="margin-top: -50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
          <ul class="pagination">
            <li class="page-item"><span>Trang</span></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&catId=<?php echo $categoryId; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
          </ul>
        </div>
    -->
      </div>
    </main>
<div class="special-collection">
  <div class="tabs-container">
    <div class="row" style="margin-top:10px;">
      <div class="head-tabs head-tab1 col-lg-3">
        <h2>
          <!-- Tìm kiếm giá từ <?php echo $fromPrice; ?> đến <?php echo $toPrice; ?> -->
        </h2>
      </div>
      <div class="col-lg-3 pull-right text-right">
        
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="tabs-content row">
    <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
      <div class="clearfix"> 
         
      <?php foreach($data as $rows): ?>
      <!-- box product -->
      <div class="col-xs-6 col-md-3 col-sm-6 ">
        <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
          <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
          <div class="info">
            <h3 class="name"><a href="index.php?controller=products&action=detail&productId=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
            <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
            <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span> </p>
            <p class="price-box"> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=1"><img src="../assets/frontend/images/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=2"><img src="../assets/frontend/images/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=3"><img src="../assets/frontend/images/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=4"><img src="../assets/frontend/images/star.jpg"></a> 
              <a href="index.php?controller=products&action=rating&productId=<?php echo $rows->id; ?>&star=5"><img src="../assets/frontend/images/star.jpg"></a> 
            </p>
            <div class="action-btn">
              <form>
                <a href="index.php?controller=cart&action=create&productId=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end box product -->  
      <?php endforeach; ?>
        
        <!-- paging -->
        <div style="clear: both;"></div>
<div style="margin-top: -50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
          <ul class="pagination">
            <li class="page-item"><span>Trang</span></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li class="page-item"><a class="page-link" href="index.php?controller=search&action=price&fromPrice=<?php echo $fromPrice;?>&toPrice=<?php echo $toPrice; ?>&p=<?php echo $key; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
          </ul>
        </div>
        <!-- end paging --> 
      </div>
    </div>
  </div>
</div>