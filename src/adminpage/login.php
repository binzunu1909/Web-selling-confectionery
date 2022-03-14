<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php
		if (session_id() === '')
			session_start();

		unset($_SESSION['user']);
		if (isset($_GET['action'] )&& $_GET['action'] == "reg"){
			if (isset($_POST['email']) && isset($_POST['password'])){
				$taikhoanadmin = $_POST['email'];
				$password = md5($_POST['password']);

				$conn = mysqli_connect('localhost', 'root', '', 'doan1');
				mysqli_set_charset($conn, 'UTF8');

				$result = mysqli_query($conn, "SELECT *  FROM admin WHERE taikhoanadmin = '$taikhoanadmin' AND password = '$password'");
				//print_r("SELECT *  FROM admin WHERE taikhoanadmin = '$taikhoanadmin' AND password = '$password'");
				if (mysqli_num_rows($result) != 0)
				{	
					
					if( !isset( $_SESSION['user'] ) ) {
					    $_SESSION['user'] = $taikhoanadmin;
					}
					echo "<script> alert('Đăng Nhập Thành Công'); alert(\"Chào mừng $taikhoanadmin \"); window.location.href = './index.php';</script>";
				} else {
					echo "<script> alert('Đăng Nhập Thất Bại');</script>";
				}
			}
		}
	?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng Nhập</div>
				<div class="panel-body">
					<form action="./login.php?action=reg" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Tên Đăng Nhập" name="email" type="text" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật Khẩu" name="password" type="password" value="" required>
							</div>
							<button type="submit" class="btn btn-primary">Đăng Nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
