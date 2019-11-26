<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>QUẢN TRỊ HỆ THỐNG</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="css/bootstrap.min.css"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="../Admin/style/css_admin.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/bootstrap4/bootstrap_icons.asp">
</head>

<body>
	<div class="container-fluid">    	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php">Trang chủ</a>
		  <a class="navbar-brand" href="logout.php">Thoát</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		</nav>
        <div class="container-fluid padding">
        	<div class="row padding my-4">
        	<?php
				session_start();
				if($_SESSION['username']!=''){
					require('thongtin.php');
				}else{
					header("location: login.php");
				}
			?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>