<div class="modal fade" id="Them_KH" tabindex="-1" role="dialog" aria-labelledby="Dang_Ky_Label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
    	<div class="modal-content">
    		<!-- Modal Header -->
    		<div class="modal-header">
    			<h2 class="modal-title" id="Dang_Ki"> Thêm Tài Khoản
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
    			</button>
    			</h2>	
	    	</div>
	    	<!-- Modal Body -->
	    	<div class="modal-body">
	        	<?php 
	        		function sinhMa(){
	        			$conn = mysqli_connect('localhost', 'root', '', 'doan');
						mysqli_set_charset($conn, 'UTF8');

						$result = mysqli_query($conn, 'SELECT *  FROM taikhoan');
						$ma = 0;
						while($row = mysqli_fetch_assoc($result)) {
							$maloaisp = (int)substr($row['makh'], -4);
							if ($ma < $maloaisp){
								$ma = $maloaisp;
							} 
					    }
					    $ma_t = (string)($ma + 1);
					    while (strlen($ma_t) < 4){
					    	$ma_t = "0$ma_t";
					    }
					    return "KH$ma_t";

	        		}

					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['taikhoan']) && $_POST['taikhoan'] != "") {
					    $conn = mysqli_connect('localhost', 'root', '', 'doan');

						$taikhoan = $_POST['taikhoan'];
						$matkhau = $_POST['matkhau'];
						$hoten = $_POST['hoten'];
						$diachi = $_POST['diachi'];
						$dienthoai = $_POST['sdt'];
						//$email = $_POST['email'];
						$makh = sinhMa();
						$sql = "INSERT INTO taikhoan (taikhoan, makh, matkhau, hoten, diachi, dienthoai) VALUES ('$taikhoan', '$makh', '$matkhau', '$hoten',  '$diachi', $dienthoai)";
						if ($conn->query($sql) === TRUE){
							echo "<script type='text/javascript'>alert('Thêm Tài Khoản thành công');</script>";
							readFileJson();
						}
						else{
							echo "<script type='text/javascript'>alert('Thêm Tài Khoản thất bại');</script>";
						}
					}else
				?>
				<form id = "them_KH" action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" role = "form">
		    		<!-- Họ Tên -->
		    		<div class="form-group">
					    <label> Họ Tên </label>
					    <input type="text" class="form-control" name="hoten" placeholder="Họ Tên" required>
				    </div>

				    <!-- Username -->
					<div class="form-group">
					    <label> Username </label>
					    <input type="text" class="form-control" name="taikhoan" placeholder="Username" required>
				    </div>


				    <!-- Password -->
		    		<div class="form-group">
					    <label> Mật Khẩu </label>
					    <input type="password" class="form-control" name="matkhau" placeholder="Mật Khẩu" required>
				    </div>

				    <!-- Địa Chỉ -->
				    <div class="form-group">
					    <label> Địa Chỉ </label>
					    <input type="text" class="form-control" name="diachi" placeholder="Địa Chỉ" required>
				    </div>

				    <!-- Số Điện Thoại -->
				    <div class="form-group">
					    <label> Số Điện Thoại </label>
					    <input type="tel" class="form-control" name="sdt" required>
				    </div>

				    <!-- Email -->
				    <!--div class="form-group">
					    <label> Email </label>
					    <input type="email" class="form-control" name="email" placeholder="Email" required>
				    </div-->

					<!-- Submit -->
				    <div class="modal-footer">
			        	<button type="submit" id = "submit" form = "them_KH" class="btn btn-primary"> Thêm Tài Khoản </button>
			    	</div>
				</form>
	    	</div>
	    </div>
	</div>
</div>