<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chính sách thanh toán</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">     
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <script type="text/javascript" src="./js/js.js"></script>
</head>
<body>
	<?php
		include("top.php");
	?>
	<div id="bottomtop" style="font-size: 22px;">
		<a class="b1" href="./chinhsach.php?url=chinhsach" style="margin-left: 20%;text-decoration: none;">Chính sách giao hàng</a>
		<a href="./chinhsachthanhtoan.php?url=chinhsach" style="margin-left: 5%;font-size:25px;border-bottom-style: solid;color:red;">Chính sách thanh toán</a>
		<a class="b1" href="./chinhsachbaomat.php?url=chinhsach"style="margin-left: 4%;text-decoration: none;">Chính sách bảo mật</a>
	</div>
	<div id="page-bodyhtml" class="bodytext margin-bottom-lg" style="width: 95%;margin-left: 2.5%;">
		<br>
		<blockquote style="text-align: justify;"><span style="font-size:16px"><font face="Arial" style=""><strong style=""><span style="font-size: 16px;">Phương Thức Thanh Toán Tiền Mặt</span></strong><span style="font-size: 16px;">:</span></font></span></blockquote>
		<p style="text-align:justify"><span style="font-size:16px"><font face="Arial"><span style="background-color: rgb(244, 245, 249); color: rgb(84, 84, 84); font-size: 16px;">✅</span>Quý khách có trách nhiệm thanh toán đầy đủ toàn bộ giá trị đơn hàng cho Nhân viên giao nhận hoặc Nhân viên bán hàng và chăm sóc khách hàng của chúng tôi ngay khi hoàn tất kiểm tra hàng hóa và nhận hóa đơn thanh toán. </font></span></p>
		<p style="text-align:justify"><span style="font-size:16px"><font face="Arial"><span style="background-color: rgb(244, 245, 249); color: rgb(84, 84, 84); font-size: 16px;">✅</span>Quý khách thanh toán đúng số tiền trên hóa đơn đã ghi, nếu có bất cứ thắc mắc nào quý khách gọi lại cho chúng tôi để được thông tin cụ thể hơn.</font></span></p>
		<blockquote style="text-align: justify;"><span style="font-size:16px"><font face="Arial" style=""><b style=""><span style="font-size: 18px;">Phương Thức Thanh Toán Chuyển Khoản</span><span style="font-size: 16px;">:</span></b></font></span></blockquote>
		<p style="text-align:justify"><span style="font-size:16px"><font face="Arial"><span style="background-color: rgb(244, 245, 249); color: rgb(84, 84, 84); font-size: 16px;">✅</span> Đến Ngân hàng gần nơi ở của quý khách nhất để chuyển tiền/chuyển khoản theo thông tin chi tiết&nbsp;chúng tôi cung cấp: Nội dung chuyển tiền là mã đơn hàng.</font></span></p>
		<p style="text-align:justify"><span style="font-size:16px"><font face="Arial"><span style="background-color: rgb(244, 245, 249); color: rgb(84, 84, 84); font-size: 16px;">✅</span>Chuyển tiền thông qua hệ thống thanh toán trực tuyến (internet banking): Nội dung chuyển tiền là mã đơn hàng.</font></span></p>
	</div>
	<?php
		include("foot.php");
	?>
	<style type="text/css">
		.b1:hover
		{
			color: red;
			border-bottom: solid;
		}	
		body blockquote {
    		font-size: 28px;
    		background: rgba(224, 231, 249, 1);
    		padding: 15px;
    		margin-top: 15px;
    		margin-bottom: 15px;
    		border-radius: 3px;
    		float: none;
    		display: block;
		}
	</style>
</body>
</html>