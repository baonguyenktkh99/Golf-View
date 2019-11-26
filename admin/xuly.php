<?php session_start(); ?>
<meta charset="utf-8" />
<?php
	require('../Controller/config.php');
	if(isset($_POST['btn_login'])){
		$username = $_POST["txt_user"];
		$password = $_POST["txt_pass"];
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$pass = md5($password);
			$sql = "select * from tbl_admin where User = '$username' and Pass = '$pass' ";
			$query = mysqli_query($con,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<span style='color: red;'>Tên đăng nhập hoặc mật khẩu không đúng</span>";
			}else{
				$_SESSION['username'] = $username;
				// header('location: index.php');
				echo "<script>window.open('index.php','_self',3);</script>";
			}
		}
	}
?>