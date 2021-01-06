<?php

//load  product
$product_load = $product->getData();
$brand= array_map(function ($pro){return $pro['Pro_band'];},$product_load);
$unique = array_unique($brand);
sort($unique);
shuffle($product_load);
?>

<!--start login section-->
<section id="login" class="py-5">
<div class="container-fluid w-75">
    <form method="post" action="">
				<div class="login">
					<div id="top">
						<h2 class="color-primary">Đăng Nhập Vào Hệ Thống</h2> <br>
					</div>
					<form>
						<p>Tài Khoản</p>
						<div>
							<input type="text" name="username" required placeholder="Nhập tài khoản của bạn"><hr>
						</div>						 
						<p>Mật Khẩu</p>
						<div>
							<input type="Password" name="password"  required placeholder="Nhập mật khẩu của bạn"><hr>
						</div>						
						<button class="btn btn-success" type="submit" name="login" value="Login">Đăng Nhập</button> <br>
                        <td>Chưa có tài khoản?</td>
						<a href="register.php">Đăng ký ngay ở đây</a>	
					</form>
				</div>	
	</form>
</div>
</section>

<?php 
$con = new mysqli('localhost', 'root', '', 'shoplaptop');
      if (!$con){
        echo "ket noi that bai";        
      }
if(isset($_POST['login'])){
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query($con, "select * from account where username='$username' AND password='$password' " );
  
  $check_login = mysqli_num_rows($result);
  
  $row_login = mysqli_fetch_array($result);
  
  if($check_login == 0){
   echo "<script>alert('tài khoản hoặc mật khẩu không chính xác, vui lòng nhập lại')</script>";
   exit();
  }  
  if($check_login > 0){ 
  
  echo "<script>alert('bạn đã đăng nhập thành công')</script>";
  echo "<script>window.open('index.php','_self')</script>";
  
  }
}

?>