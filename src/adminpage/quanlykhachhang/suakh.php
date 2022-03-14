<div class="modal fade" id="Sua_KH" tabindex="-1" role="dialog" aria-labelledby="Dang_Ky_Label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
    	<div class="modal-content">
    		<!-- Modal Header -->
    		<div class="modal-header">
    			<h2 class="modal-title" id="Dang_Ki"> Sửa Thông Tin Tài Khoản 
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
    			</button>
    			</h2>	
	    	</div>
	    	<!-- Modal Body -->
	    	<div class="modal-body">
	        	<?php 
					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['suamakh']) && $_POST['suamakh'] != "") {
					    $conn = mysqli_connect('localhost', 'root', '', 'doan');

						$taikhoan = $_POST['suamakh'];
						$hoten = $_POST['suahoten'];
						$diachi = $_POST['suadiachi'];
						$dienthoai = $_POST['suasdt'];
						//$email = $_POST['suaemail'];
						$password = $_POST['suapassword'];

						if ($password == ""){

							$sql = "UPDATE taikhoan SET hoten = '$hoten', diachi = '$diachi', dienthoai = '$dienthoai' WHERE taikhoan = '$taikhoan' ";

							if ($conn->query($sql) === TRUE){
								echo "<script type='text/javascript'>alert('Sửa Thông Tin Tài Khoản thành công');</script>";
								readFileJson();
							}
							else{
								echo "<script type='text/javascript'>alert('Sửa Sản Phẩm thất bại');</script>";
							}
						}
						else{
							$sql = "UPDATE taikhoan SET hoten = '$hoten', diachi = '$diachi', dienthoai = '$dienthoai', email = '$email', matkhau = '$password' WHERE taikhoan = '$taikhoan' ";

							if ($conn->query($sql) === TRUE){
								echo "<script type='text/javascript'>alert('Sửa Thông Tin Tài Khoản thành công');</script>";
								readFileJson();
							}
							else{
								echo "<script type='text/javascript'>alert('Sửa Sản Phẩm thất bại');</script>";
							}
						}
					}
				?>
				<form id = "sua_KH" action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" role = "form">
		    		<!-- Mã Khách Hàng -->
		    		<div class="form-group">
					    <label> Tài Khoản </label>
					    <input type="text" class="form-control" name="suamakh" id = "idmakh" required>
				    </div>

		    		<!-- Họ Tên -->
		    		<div class="form-group">
					    <label> Họ Tên </label>
					    <input type="text" class="form-control" name="suahoten" id = "idhoten" placeholder="Họ Tên" required>
				    </div>

				    <!-- Password -->
		    		<div class="form-group">
					    <label> Mật Khẩu </label>
					    <input type="password" class="form-control" name="suapassword" id = "idmatkhau" placeholder="Mật Khẩu">
				    </div>
				    
				    <!-- Địa Chỉ -->
				    <div class="form-group">
					    <label> Địa Chỉ </label>
					    <input type="text" class="form-control" name="suadiachi" id = "iddiachi" placeholder="Địa Chỉ" required>
				    </div>

				    <!-- Số Điện Thoại -->
				    <div class="form-group">
					    <label> Số Điện Thoại </label>
					    <input type="tel" class="form-control" name="suasdt" id = "idsdt" required>
				    </div>

				    <!-- Email -->
				    <!--div class="form-group">
					    <label> Email </label>
					    <input type="email" class="form-control" name="suaemail" id = "idemail" placeholder="Email" required>
				    </div-->

					<!-- Submit -->
				    <div class="modal-footer">
			        	<button type="submit" id = "submit" form = "sua_KH" class="btn btn-primary"> Sửa Tài Khoản </button>
			    	</div>
				</form>
	    	</div>
	    </div>
	</div>
	<?php 
		if(isset($_POST['mot']) && $_POST['mot'] == 'suasanpham') {
		    $conn = mysqli_connect('localhost', 'root', '', 'doan');

		    $masp = $_POST['masp'];
			$tensp = $_POST['tensp'];
			$loaisp = $_POST['loaisp'];
			$giatien = $_POST['giasp'];
			$mota = $_POST['motasp'];
			

			$sql = "UPDATE sanpham SET tensp = '$tensp', maloaisp = '$loaisp', giasp = $giatien , motasp = '$mota' WHERE masp = '$masp' ";

			if ($conn->query($sql) === TRUE){
				echo "<script type='text/javascript'>alert('Sửa Sản Phẩm thành công');</script>";
				readFileJson();
			}
			else{
				echo "<script type='text/javascript'>alert('Sửa Sản Phẩm thất bại');</script>";
			}
		}
	?>
	<script>
		function suakh(taikhoan, hoten, diachi, dienthoai, email){
			document.getElementById("idmakh").value = taikhoan;

			document.getElementById("idhoten").value = hoten;

			document.getElementById("iddiachi").value = diachi;

			document.getElementById("idsdt").value = dienthoai;

			//document.getElementById("idemail").value = email;

		}
	</script>
</div>