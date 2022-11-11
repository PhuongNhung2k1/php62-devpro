<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/frontend/layout/css/style.css">
    <link rel="stylesheet" href="../assets/frontend/layout/font/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="../assets/frontend/layout/bootstrap-4.0.0/assets/css/docs.min.css">
    
    <script type="text/javascript" src="../assets/frontend/layout/jquery/jquery-3.6.0.min.js"></script>
    <title>Home main</title>
</head>

<body>
      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/633ec5be37898912e96d30d2/1gemj8t0s';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <!-- load trang header vao day  -->
   <?php include "views/HeaderView.php"; ?>
   <!-- hien thi toan trang vao day -->
   <!-- main -->
    <?php echo $view; ?>
       <!-- end main  -->
    <footer>
        <div class="contact">
            <h2>Liên Hệ</h2>
            <ol>
                <li><a href="#">Địa chỉ : 289 Minh khai, Q. Bắc Từ Liêm, Hà Nội</a></li>
                <li><a href="#">SĐT : 036715281289</a></li>
                <li><a href="#"><i class="fa-brands fa-github"></i> https:/nhung/github.com</a></li>
                <li><a href="#">email : fruitFresh@gmail.com</a></li>
                <li><a href="#">website : htttp:/freshfriut.vn</a></li>
            </ol>
            <ul>
                <li >
                    <span><i class="fa-brands fa-square-twitter"></i></span>
                    <span><i class="fa-brands fa-facebook"></i></span>
                    <span><i class="fa-brands fa-youtube"></i></span>
                </li>
            </ul>
        </div>
        <div class="assistant">
            <h2>Chính Sách</h2>
            <ul>
                <li><a href="#">Chính sách bảo hành.</a></li>
                <li><a href="#">Chính sách đổi trả</a></li>
                <li><a href="#">Chính sách xử lý khiếu nại</a></li>
                <li><a href="#">Chính sách bảo mật thông tin</a></li>
                <li><a href="#">Chính sách thanh toán</a></li>
                <li><a href="#">Chính sách vận chuyển</a></li>
            </ul>
        </div>
        <div class="purchase">
            <h2>Thanh toán</h2>
            <ul>
                <span><a href=""><img src="../assets/frontend/layout/img/contact4.png"></a></span>
                <span><a href=""><img src="../assets/frontend/layout/img/contact2.png"></a></span>
                <span><a href=""><img src="../assets/frontend/layout/img/contact3.png"></a></span>
                <span><a href=""><img src="../assets/frontend/layout/img/visa.png"></a></span>
            </ul>
        </div>
        <div class="google-map">
            <h2>Vị trí</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.527322620672!2d105.73582430026107!3d21.05159088591729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454f79fd137b7%3A0x656d4311d5baa961!2zQ2jhu6MgTmd1ecOqbiBYw6EsIE1pbmggS2hhaSwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1663665841842!5m2!1svi!2s"
                width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
</body>

</html>