 <!-- header -->
    <header>
        <div class="top-header">
            <div class="logo-header">
                <img src="../assets/frontend/layout/img/icon-logo.jpg" alt="">
            </div>
            <div class="search">
                <div id="smart-search">
                <input type="text" onkeyup="searchAjax()" placeholder="  Input key..." id="key" name="search" width="200px">
                <label for="search"></label>
                 <i class="fa-solid fa-magnifying-glass" style="color:#000" onclick="return search()"></i>
                 <div id="smart-search-box">
                     <ul>
                         <li>
                            <a href="#"><img src="http://localhost/devpro/php62/php62_ProjectCuoiKhoa/assets/upload/products/1664426014_dua-ruot-vang.jpg">Sanr pham 1</a>
                         </li>
                          <li>
                            <a href="#"><img src="http://localhost/devpro/php62/php62_ProjectCuoiKhoa/assets/upload/products/1664386181_1664188108_1664077667_nho-den.JPG">Sanr pham 1</a>
                         </li>
                          <li>
                            <a href="#"><img src="http://localhost/devpro/php62/php62_ProjectCuoiKhoa/assets/upload/products/1664386181_1664188108_1664077667_nho-den.JPG">Sanr pham 1</a>
                         </li>
                          <li>
                            <a href="#"><img src="http://localhost/devpro/php62/php62_ProjectCuoiKhoa/assets/upload/products/1664386181_1664188108_1664077667_nho-den.JPG">Sanr pham 1</a>
                         </li>
                     </ul>
                 </div>
             </div>
                 <style type="text/css">
                     
                    #smart-search{
                    position: relative;
                  }
                  #smart-search-box{
                    width: 100%;
                    background: white;
                    position: absolute;
                    z-index: 1;
                  }
                  #smart-search-box ul{
                    padding: 0px; margin: 0px; list-style: none;
                  }
                  #smart-search-box ul li{
                    border-bottom: 1px solid #dddddd;
                  }
                  #smart-search-box img{
                    width: 70px;
                    margin-right: 5px;
                  }
                  #smart-search-box a{
                    text-decoration: none;
                    color: black;
                  }
                  #smart-search-box{
                    max-height: 300px; overflow: scroll;
                    display: none;
                  }
                  .fa-solid{ margin-left: -40px;top: -15px;}
                 </style>
                        <script type="text/javascript">
                      function search(){
                        //lay gia tri cua textbox co id=key
                        var key = document.getElementById("key").value;
                        //di chuyen den trang tim kiem
                        location.href = "index.php?controller=search&action=name&key="+key;
                      }
                      /*
                      //kiem tra jquery (neu website chua co jquery thi phai download va add jquery vao trang)
                      $(document).ready(function(){
                        alert("jquery da load vao trang");
                      });*/
                      function searchAjax(){
                        var key =$("#key").val();
                        //hien thi box search
                        $("#smart-search-box").attr("style","display:block");
                        //thuc hien lay thong tin bang ajax
                        $.get("index.php?controller=search&action=ajax&key="+key, function(data){
                          //lam rong du lieu trong the ul
                          $("#smart-search-box ul").empty();
                          //them du lieu vao the ul
                          $("#smart-search-box ul").append(data);
                        });
                      }
                    </script>
                </label>
            </div>
            <?php 
              $numberProduct = isset($_SESSION['cart'])?count($_SESSION['cart']):0;
             ?>
            <div class="right-header">
                
                <ul><?php if(isset($_SESSION['customer_email'])): ?>
                    <li><a href="#">Xin chào <?php echo $_SESSION['customer_email']; ?></a></li>
                <?php else: ?>
                    <li><a href="index.php?controller=account&action=login"><i class="fas fa-right-to-bracket"></i></i>Login</a></li>
                    <li><a href="index.php?controller=account&action=register"><i class="fas fa-user-plus"></i>Register</a></li>
                <?php endif; ?>
                 <li><a href="index.php?controller=account&action=logout"><i class="fas fa-arrow-up-left-from-circle"></i>Logout</a></li>
                    <li><a class="box-cart" href="index.php?controller=cart">
                            <i style="padding: 10px;border-radius: 50%;display: inline-block;background-color: lightpink;" class="fa-solid fa-cart-plus"></i>
                        </a><span style="color:#fff;display: inline-block;cursor: pointer;"><?php echo $numberProduct; ?> sản phẩm</span></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="container menu-header">
        <ul class="header-menu">
           <li style="color:red;display: inline-block;"><a href="index.php?controller=home">Home</a></li>
            <li><a href="#">Category</a>
                <ul class="header-subMenu">
                	<?php $conn = Connection::getInstance();
                		  $query = $conn->query("select * from categories where parent_id =0 order by id desc");
                		  $categories = $query->fetchAll(PDO::FETCH_OBJ);
                	 ?>
                	 <?php foreach($categories as $rows): ?>

                    <li style="float: left;"><a href="index.php?controller=products&action=category&catId=<?php echo $rows->id; ?>" style="color: red;font-size: 18px;"><?php echo $rows->name; ?></a></li>
                    <?php $querySub = $conn->query("select * from categories where parent_id={$rows->id} order by id desc");
                    $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
                     ?>
                     <?php foreach($categoriesSub as $rowsSub): ?>
                    <li style="float: left;margin-left:15px;"><a href="index.php?controller=products&action=category&catId=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?> </a>
                        <!-- <ul class="header-subMenu">
                            <li><a href="#">Xoài xanh </a></li>
                            <li><a href="#">Xoài cát </a></li>
                            <li><a href="#">Xoài úc </a></li>
                        </ul> -->
                    </li>
                    <?php endforeach; ?>
        <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="index.php?controller=news">Tin tức</a></li>
        <li><a href="index.php?controller=contact">Liên hệ</a></li>
        <li><a href="index.php?controller=introduce">Introduce</a></li>
        </ul>
    </section>
    <section class="slider-header">
          <div class="slide-wrapper">
                <div class="slide"><img src="../assets/frontend/layout/img/banner2.jpg"/>
        </div>  
                <div class="slide"><img src="../assets/frontend/layout/img/banner4.jpg"/>
        </div> 
        <div class="slide"><img src="../assets/frontend/layout/img/banner5.jpg"/>
        </div>
          <!--   <div class="slide"><img src="../img/backgroun-register.jpg" width="100%"></div>
           </div> -->
    </section>