<!-- Side Bar -->	
<?php
	if (session_id() === ""){
		session_start();
	}
	if( !isset( $_SESSION['user'] ) ) {
		echo "<script> alert('Chưa Đăng Nhập'); 
			var urll = window.location.href;
			var arr_u = urll.substring(0, urll.lastIndexOf(\"adminpage\") + \"adminpage\".length) + \"/\";
			window.location.href = arr_u + 'login.php';
		</script>";
	}
	$user = $_SESSION['user'];
?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Thai</span>Food</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<?php
						echo "
						<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> $user <span class=\"caret\"></span></a>";
						?>
						<!--ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings </a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
						</ul-->
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-4 col-lg-3 sidebar">
		<form role="search">
			<div class="form-group">
				<!--input type="text" class="form-control" placeholder="Tìm Kiếm..."-->
			</div>
		</form>
		<ul class="nav menu">
			<!-- Tổng Quan -->
			<li class="active"><a href="http://localhost/adminpage/" id = "tongquan"><span class="glyphicon glyphicon-dashboard"></span> Tổng Quan </a></li>
			<!-- Quản Lý Sản Phẩm -->

			<li class="parent">
				<a href="http://localhost/adminpage/quanlysanpham/" id = "quanlysanpham">
					<span class="glyphicon glyphicon-hdd"></span> Quản Lý Sản phẩm <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Danh sách sản phẩm
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Thêm sản phẩm
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sửa sản phẩm
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Xóa sản phẩm
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Ẩn sản phẩm
						</a>
					</li>
				</ul>
			</li>
			<!-- Quản Lý Đơn Hàng -->
			<li class="parent">
				<a href="http://localhost/adminpage/quanlydonhang/" id = "quanlydonhang">
					<span class="glyphicon glyphicon-list-alt"></span> Quản Lý Đơn Hàng <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Danh sách đơn hàng
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Thêm đơn hàng
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sửa đơn hàng
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Xóa đơn hàng
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> In đơn hàng
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Thống kê
						</a>
					</li>
				</ul>
			</li>
			<!-- Quản Lý Khách Hàng -->
			<li class="parent">
				<a href="http://localhost/adminpage/quanlykhachhang/" id = "quanlykhachhang">
					<span class="glyphicon glyphicon-user"></span> Quản Lý Tài Khoản <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Danh sách tài khoản
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Thêm tài khoản
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sửa thông tin tài khoản
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Xóa tài khoản
						</a>
					</li>
				</ul>
			</li>
			<!-- Quản Lý Nhân Viên -->
			<!--li class="parent">
				<a href="http://localhost/adminpage/quanlynhanvien/" id = "quanlynhanvien">
					<span class="glyphicon glyphicon-briefcase"></span> Quản Lý Nhân Viên <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Danh sách nhân viên
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Thêm nhân viên
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sửa thông tin nhân viên
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Xóa nhân viên
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Phân quyền nhân viên
						</a>
					</li>
				</ul>
			</li-->
			<!-- Quản Lý Nhà Cung Cấp -->
			<!--li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-home"></span> Quản Lý Nhà Cung Cấp <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Danh sách nhà cung cấp
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Thêm nhà cung cấp
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sửa nhà cung cấp
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Xóa nhà cung cấp
						</a>
					</li>
				</ul>
			</li-->
			<!-- Quản Lý Kho Hàng -->
			<!--li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-folder-close"></span> Quản Lý Kho Hàng <span data-toggle="collapse" href="#sub-item-6" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Danh sách sản phẩm trong kho
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Thêm sản phẩm vào kho
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sửa sản phẩm trong kho
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Xuất kho
						</a>
					</li>
				</ul>
			</li-->
			<!-- Thống kê -->
			<!-- <li class="parent">
				<a href="http://localhost/adminpage/thongke/" id = "thongke">
					<span class="glyphicon glyphicon-stats"></span> Thống Kê <span data-toggle="collapse" href="#sub-item-7" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Tổng quan
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Theo khách hàng
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Theo sản phẩm
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Theo nhân viên
						</a>
					</li>
				</ul>
			</li> -->
			<li role="presentation" class="divider"></li>
			<li><a href="login.php" id="dangnhap"><span class="glyphicon glyphicon-user"></span> Thoát </a></li>
		</ul>
	</div><!--/.sidebar-->
	<script> 
		var urll = window.location.href;
		var arr_u = urll.substring(0, urll.lastIndexOf("adminpage") + "adminpage".length) + "/";
		document.getElementById("tongquan").href = arr_u;
		document.getElementById("quanlysanpham").href = arr_u + "quanlysanpham/";
		document.getElementById("quanlydonhang").href = arr_u + "quanlydonhang/";
		document.getElementById("quanlykhachhang").href = arr_u + "quanlykhachhang/";
		document.getElementById("thongke").href = arr_u + "thongke/";
		document.getElementById("dangnhap").href = arr_u + "login.php";

		function gotoLogin(){
			window.location.href = arr_u + 'login.php';
		}
	</script>