<?php 
	$layout = "LayoutTrangTrong.php";
?>
<!-- main -->
 <!-- start detail new  -->
    <main class="container dis-list-news">
        <div class="dis-news-left">
            <h3>Tin trong ngày</h3>
          
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><img src="../assets/upload/news/city.jpg" height="80px" width="80px" /></div>
                <div class="content-new">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro id
                    quibusdam labore sequi illum dolore eius fugit maxime facilis! Illum alias adipisci maxime officia
                    fugiat labore ipsam repudiandae consectetur!</div>
            </div>
            <hr>
            <!-- end item-news  -->
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><img src="../assets/upload/news/duangiaothong.jpg" height="80px" width="80px" /></div>
                <div class="content-new">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro id
                    quibusdam labore sequi illum dolore eius fugit maxime facilis! Illum alias adipisci maxime officia
                    fugiat labore ipsam repudiandae consectetur!</div>
            </div>
            <hr>
            <!-- end item-news  -->
             <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><img src="../assets/upload/news/hoa-da-lat.jpg" height="80px" width="80px" /></div>
                <div class="content-new">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro id
                    quibusdam labore sequi illum dolore eius fugit maxime facilis! Illum alias adipisci maxime officia
                    fugiat labore ipsam repudiandae consectetur!</div>
            </div>
            <hr>
            <!-- end item-news  -->
        </div>
        <div class="dis-news-main">
            <h2>Tin chính</h2>
            <hr>
 			<?php foreach($data as $rows): ?>
            <h3 class="news-content"><?php echo $rows->name; ?></h3>
            <!-- start state new  -->
             
            <div class="dis-news-state-1">

           <a href="index.php?controller=news&action=detail&newsId=<?php $rows->id; ?>" ><img src="../assets/upload/news/<?php echo $rows->photo; ?>" ></a>
            <p><?php echo $rows->description; ?></p>
            </div><hr>
            <!-- end state new  -->
        <?php endforeach; ?>
           
        </div>
        <div class="dis-news-right">
            <h3>Sự kiện liên quan</h3>
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><a href="index.php?controller=news&action=detail&newsId=<?php $rows->id; ?>"><img src="../assets/upload/news/city.jpg" height="80px" width="80px" /></a></div>
                <div class="content-new">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro id
                    quibusdam labore sequi illum dolore eius fugit maxime facilis! Illum alias adipisci maxime officia
                    fugiat labore ipsam repudiandae consectetur!</div>
            </div>
            <hr>
            <!-- end item-news  -->
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><img src="../assets/upload/news/duangiaothong.jpg" height="80px" width="80px" /></div>
                <div class="content-new">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro id
                    quibusdam labore sequi illum dolore eius fugit maxime facilis! Illum alias adipisci maxime officia
                    fugiat labore ipsam repudiandae consectetur!</div>
            </div>
            <hr>
            <!-- end item-news  -->
            <!-- start item-news  -->
            <div class="page-news-item">
                <div class="img-news"><img src="../assets/upload/news/city.jpg" height="80px" width="80px" /></div>
                <div class="content-new">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro id
                    quibusdam labore sequi illum dolore eius fugit maxime facilis! Illum alias adipisci maxime officia
                    fugiat labore ipsam repudiandae consectetur!</div>
            </div>
            <hr>
            <!-- end item-news  -->
        </div>
    </main>
     <!-- end detail new  -->
