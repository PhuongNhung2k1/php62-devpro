<?php 
$layout = "LayoutTrangTrong.php";

?>         

 <!-- start detail new  -->
    <main class="container dis-list-news">
        <div class="dis-news-left">
            <h3>Tin trong ngày</h3>
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><a href="#"><img src="../assets/upload/news/hoa-da-lat.jpg" height="80px" width="80px" /></a>
                </div>
                <div class="content-new">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            <hr>
            <!-- end item-news  -->
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><a href="#"><img src="../assets/upload/news/duangiaothong.jpg" height="80px" width="80px" /></a>
                </div>
                <div class="content-new">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            <hr>
            <!-- end item-news  -->
            <!-- start item-news  -->
            <div class="page-news-item">
               <div class="img-news"><a href="#"><img src="../assets/upload/news/city.jpg" height="80px" width="80px" /></a>
                </div>
                <div class="content-new">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            <hr>
            <!-- end item-news  -->
        </div>
        <div class="dis-news-main">
            <h2>Tin chính</h2>
            <hr>
          
            <h3 class="news-content"><?php echo $record->name; ?></h3>
            <!-- start state new  -->
             
            <div class="dis-news-state-1">

           <a href="index.php?controller=news&action=detail&newsId=<?php $record->id; ?>" ><img src="../assets/upload/news/<?php echo $record->photo; ?>" height="100px" width="200px"></a>
            <p><?php echo $record->content; ?></p>
            </div><hr>
            <!-- end state new  -->
        
           
        </div>
        <div class="dis-news-right">
            <h3>Sự kiện liên quan</h3>
           <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><a href="#"><img src="../assets/upload/news/hoa-da-lat.jpg" height="80px" width="80px" /></a>
                </div>
                <div class="content-new">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            <hr>
            <!-- end item-news  -->
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><a href="#"><img src="../assets/upload/news/duangiaothong.jpg" height="80px" width="80px" /></a>
                </div>
                <div class="content-new">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            <hr>
            <!-- end item-news  -->
            <!-- start item-news  -->
            <div class="page-news-item">
               <div class="img-news"><a href="#"><img src="../assets/upload/news/city.jpg" height="80px" width="80px" /></a>
                </div>
                <div class="content-new">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            <hr>
            <!-- end item-news  -->
        </div>
    </main>
     <!-- end detail new  -->
