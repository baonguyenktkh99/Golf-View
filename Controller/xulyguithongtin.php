<?php
if (isset($_POST['btn_mail'])) {
	require('config.php');
	$hoten = $_POST['txt_hoten'];
	$email = $_POST['txt_email'];
	$dienthoai = $_POST['txt_dienthoai'];
	$bds = $_POST['sl_select'];
	$nhucau = $_POST['txt_nhucau'];
	$sql = "INSERT INTO `tbl_emailkh` (`IDKH`, `HoVaTen`, `Email`, `DienThoai`, `BDS`, `NhuCauKH`) VALUES (NULL, '$hoten', '$email', '$dienthoai', '$bds', '$nhucau')";
	$kq = mysqli_query($con, $sql);
	echo "<script>alert('Đã gửi thành công : $hoten');</script>";
}
?>