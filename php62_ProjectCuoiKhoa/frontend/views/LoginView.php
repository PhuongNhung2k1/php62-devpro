<?php $layout = "LayoutTrangTrong.php"; ?>
<section class="container register-page">
        <div class="form-register">
           
                <fieldset>
                <legend>
                    <h2>Thông tin đăng nhập </h2>
                </legend>
                <form method='post' action="index.php?controller=account&action=loginPost">
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder=" Input email" required />
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder=" Input password" required/>
                </div>
                <div class="btn btn-register">
                    <input type="submit" value="Login" class="input-control"></input>
                    <input type="reset" class="input-control" value="Reset"></input>
                </div> </form>
            </fieldset>
          
        </div>
        <div class="note-register">
            <h3>Khách hàng chưa có tài khỏan</h3>
            <hr>
            <p>Trở thành thành viên của FRESHFRUIT, là bạn đã gia nhập vào dòng vận động liên tục của mobile marketing. Trong
                môi trường năng động như vậy, có một người đồng hành cùng bạn tiến lên phía trước là điều tất yếu. Chúng
                tôi chính là người đồng hành đó của bạn. Chúng tôi đã phát triển hàng loạt các chương trình, dữ liệu, và
                hoạt động để chắc chắn rằng thành viên của chúng tôi được hưởng nhiều quyền lợi nhất, doanh nghiệp của
                họ phát triển bền vững nhất, và chương trình mobile marketing của họ luôn thành công. Sau đây là một số
                điểm nhấn mà chúng tôi khuyến khích các bạn nên tham khảo.</p>
            <a href="index.php?controller=account&action=register" style="color:#000;">Đăng ký</a>
        </div><hr>
    </section>