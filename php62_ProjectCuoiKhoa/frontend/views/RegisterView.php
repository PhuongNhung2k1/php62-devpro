<?php 
	$layout = "LayoutTrangTrong.php";
 ?>
<div class="container register-page">
        <div class="form-register">
            <fieldset>
                <legend>
                    <h2>Thông tin đăng ký </h2>
                </legend>
                <form method='post' action="index.php?controller=account&action=registerPost">
                <div class="form-control">
                    <label for="fullname">Name</label>
                    <input type="text" name="name" placeholder=" Input name" />
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder=" Input email" />
                </div>
                 <div class="form-control">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" placeholder="Phone" />
                </div>
                <div class="form-control">
                    <label for="address">Addesss</label>
                    <input type="text" name="address" placeholder="Address" />
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder=" Input password" />
                </div>
                <div class="btn btn-register">
                    <input type="submit" class="input-control" value="Đăng Ký"></input>
                    <input type="reset" class="input-control"></input>
                </div></form>
            </fieldset>
        </div>
        <div class="note-register">
            <h3>Khách hàng đã đăng ký</h3>
            <hr>
            <p>Trở thành thành viên của FRESHFRUIT, là bạn đã gia nhập vào dòng vận động liên tục của mobile marketing. Trong
                môi trường năng động như vậy, có một người đồng hành cùng bạn tiến lên phía trước là điều tất yếu. Chúng
                tôi chính là người đồng hành đó của bạn. Chúng tôi đã phát triển hàng loạt các chương trình, dữ liệu, và
                hoạt động để chắc chắn rằng thành viên của chúng tôi được hưởng nhiều quyền lợi nhất, doanh nghiệp của
                họ phát triển bền vững nhất, và chương trình mobile marketing của họ luôn thành công. Sau đây là một số
                điểm nhấn mà chúng tôi khuyến khích các bạn nên tham khảo.</p>
           <a href="index.php?controller=account&action=login" style="color: #000;">Đăng nhập</a>
        </div>
    </div><hr>