<?php

//load  product
$product_load = $product->getData();
$brand= array_map(function ($pro){return $pro['Pro_band'];},$product_load);
$unique = array_unique($brand);
sort($unique);
shuffle($product_load);
?>
 <!---start register section-->
 <section id="login" class="py-5">
<div class="container-fluid w-75">
<form method="post" action="" enctype="multipart/form-data">
				<div class="login font-rale font-size-16">
					<div id="top">
						<h3 class="color-primary">Nhập Thông Tin Của Bạn</h3><br>
						<small class="font-size-12">(Thông tin của bạn sẽ được bảo mật tuyệt đối)</small>
                        <hr>
					</div>
					<form>
						<p>Họ Và Tên</p>
						<input type="text" name="fullname" required placeholder="Nhập tên của bạn"> 
                        <hr>
						<p>Tài Khoản</p>
						<div>
							<input type="text" name="username" required placeholder="Nhập tài khoản của bạn"><hr>
						</div>
						
						<p>Mật Khẩu</p>
						<div>
							<input type="password" id="password_confirm1" name="password" required placeholder="Nhập mật khẩu của bạn" /><hr>
						</div>
						<p>Nhập lại mật khẩu</p>
						<input type="password" id="password_confirm2" name="confirm_password" required placeholder="Confirm Password" /><hr>
						<p style="padding-right: 40px">Email</p>
						<input type="text" name="email" required placeholder="Nhập email của bạn"> <hr>
						<button type="submit" class = "btn btn-success" name="register" value="Register" >Đăng Ký </button><br>
						<tr>
							<td>Đã có tài khoản?</td>
							<a href="login.php">Đăng Nhập</a>
						</tr>

					</form>				
				</div>
			</form>
</div>
</section>
 <!---end register section-->


 <?php
$con = new mysqli('localhost', 'root', '', 'shoplaptop');
if (!$con) {
    echo "ket noi that bai";
}
if (isset($_POST['register'])) {
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname =$_POST['fullname'];
        $email =$_POST['email']; 
        $confirm_password = $_POST['confirm_password'];
        $check_exist = mysqli_query($con, "select * from account where username = '$username'");
        $username_count = mysqli_num_rows($check_exist);
        $row_register = mysqli_fetch_array($check_exist);
        if ($username_count > 0) {
            echo "<script>alert('Xin lỗi, tài khoàn này đã tồn tại, vui lòng chọn một tài khoản khác')</script>";
        } elseif ($row_register['username'] != $username && $password == $confirm_password) {
            $run_insert = mysqli_query($con, "insert into account(username, password, fullname, email) values ('$username','$password','$fullname','$email') ");
            if ($run_insert) {
                echo "<script>alert('Chúc mừng bạn đã đăng ký tài khoản thành công, bạn đã trở thành một thành viên của Dat Laptop')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
        }
    }
}
?>