<div class="modal fade" id="Sua_DH" tabindex="-1" role="dialog" aria-labelledby="Dang_Ky_Label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
    	<div class="modal-content">
    		<!-- Modal Header -->
    		<div class="modal-header">
    			<h2 class="modal-title" id="Dang_Ki"> Sửa Thông Tin Đơn Hàng 
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
    			</button>
    			</h2>	
	    	</div>
	    	<!-- Modal Body -->
	    	<div class="modal-body">
	        	<?php 
					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['suamakhachhang']) && $_POST['suamakhachhang'] != "") {
					    $conn = mysqli_connect('localhost', 'root', '', 'doan');

						$makhachhang = $_POST['suamakhachhang'];
						$tongsoluong = $_POST['suatongsoluong'];
						$tongtien = $_POST['suatongtien'];
						$hinhthuc = $_POST['suahinhthuc'];
						$madonhang = $_POST['suamadonhang'];
						

						$sql = "UPDATE donhang SET makhachhang = '$makhachhang', tongsoluongsp = $tongsoluong, tongtien = $tongtien , hinhthuc = '$hinhthuc' WHERE madonhang = '$madonhang' ";

						if ($conn->query($sql) === TRUE){
							echo "<script type='text/javascript'>alert('Sửa Thông Tin Đơn Hàng thành công');</script>";
							readFileJson();
						}
						else{
							//echo "<script type='text/javascript'>alert('Sửa Sản Phẩm thất bại');</script>";
						}
					}
				?>
				<form id = "sua_DH" action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" role = "form">
		    		<!-- Mã Đơn Hàng -->
		    		<div class="form-group">
					    <label> Mã Đơn Hàng </label>
					    <input type="text" class="form-control" name="suamadonhang" id = "idmadonhang" required>
				    </div>

		    		<!-- Mã Khách Hàng -->
		    		<div class="form-group">
					    <label> Mã Khách Hàng </label>
					    <input type="text" class="form-control" name="suamakhachhang" id = "idmakhachhang" placeholder="Mã Khách Hàng" required>
				    </div>

				    <!-- Số Lượng -->
					<div class="form-group">
					    <label> Số Lượng </label>
					    <input type="number" class="form-control" name="suatongsoluong" id = "idtongsoluongsp" required>
				    </div>

				    <!-- Tổng Tiền -->
		    		<div class="form-group">
					    <label> Tổng Tiền </label>
					    <input type="number" class="form-control" name="suatongtien" id = "idtongtien" required>
				    </div>
				    
				    <!-- Hình Thức -->
				    <div class="form-group">
					    <label> Hình Thức </label>
					    <input type="text" class="form-control" name="suahinhthuc" id = "idhinhthuc" required>
				    </div>


					<!-- Submit -->
				    <div class="modal-footer">
			        	<button type="submit" id = "submit" form = "sua_DH" class="btn btn-primary"> Sửa Đơn Hàng </button>
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
		function suadh(madonhang, makhachhang, tongsoluongsp, tongtien, hinhthuc){
			document.getElementById("idmadonhang").value = madonhang;

			document.getElementById("idmakhachhang").value = makhachhang;

			document.getElementById("idtongsoluongsp").value = tongsoluongsp;

			document.getElementById("idtongtien").value = tongtien;

			document.getElementById("idhinhthuc").value = hinhthuc;

		}
	</script>
</div>