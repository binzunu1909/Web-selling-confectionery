<div class="modal fade" id="Them_DH" tabindex="-1" role="dialog" aria-labelledby="Dang_Ky_Label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
    	<div class="modal-content">
    		<!-- Modal Header -->
    		<div class="modal-header">
    			<h2 class="modal-title" id="Dang_Ki"> Thêm Đơn Hàng
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

						$result = mysqli_query($conn, 'SELECT *  FROM donhang');
						$ma = 0;
						while($row = mysqli_fetch_assoc($result)) {
							$maloaisp = (int)substr($row['madonhang'], -4);
							if ($ma < $maloaisp){
								$ma = $maloaisp;
							} 
					    }
					    $ma_t = (string)($ma + 1);
					    while (strlen($ma_t) < 4){
					    	$ma_t = "0$ma_t";
					    }
					    return "DH$ma_t";

	        		}

					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['makhachhang']) && $_POST['makhachhang'] != "") {
					    $conn = mysqli_connect('localhost', 'root', '', 'doan');

						$makhachhang = $_POST['makhachhang'];
						$tongsoluong = $_POST['tongsoluong'];
						$tongtien = $_POST['tongtien'];
						$hinhthuc = $_POST['hinhthuc'];
						$madonhang = sinhMa();

						$sql = "INSERT INTO donhang (madonhang, makhachhang, tongsoluongsp, tongtien, hinhthuc) VALUES ('$madonhang', '$makhachhang', $tongsoluong, $tongtien,  '$hinhthuc')";

						if ($conn->query($sql) === TRUE){
							echo "<script type='text/javascript'>alert('Thêm Đơn Hàng thành công');</script>";
							readFileJson();
						}
						else{
							//echo "<script type='text/javascript'>alert('Thêm Sản Phẩm thất bại');</script>";
						}
					}else
				?>
				<form id = "them_DH" action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" role = "form">
		    		<!-- Mã Khách Hàng -->
		    		<div class="form-group">
					    <label> Mã Khách Hàng </label>
					    <input type="text" class="form-control" name="makhachhang" placeholder="Mã Khách Hàng" required>
				    </div>

				    <!-- Số Lượng -->
					<div class="form-group">
					    <label> Số Lượng </label>
					    <input type="number" class="form-control" name="tongsoluong" required>
				    </div>

				    <div class="form-group">
				    	<label> Sản Phẩm </label>
				    	<table>
				    		<tr>
								<th style="width: 15%"> Mã Sản Phẩm </th>
								<th style="width: 15%"> Số Lượng </th>
								<th style="width: 15%"> Đơn Giá  </th>
								<th style="width: 15%"> Thành Tiền </th>
								<th style="width: 15%">  <th>
								<th style="width: 15%">  <th>
							</tr>
						    <tr>
						        <td>
						            <input type="text" id = "masp_1" />						            
						        </td>
						        <td>
						            <input type="number" id = "solg_1" />						            
						        </td>
						        <td style = "border: 1px solid black;">
						            123				            
						        </td>
						        <td style = "border: 1px solid black;">
						            12312321					            
						        </td>
						        <td>
						            <button type="button" form="my_form">Thêm</button>						            
						        </td>
						        <td>
						            <button type="button" form="my_form">Xóa</button>						            
						        </td>
						    </tr>
						</table>
					</div>

				    <!-- Tổng Tiền -->
		    		<div class="form-group">
					    <label> Tổng Tiền </label>
					    <input type="number" class="form-control" name="tongtien" required>
				    </div>
				    
				    <!-- Hình Thức -->
				    <div class="form-group">
					    <label> Hình Thức </label>
					    <input type="text" class="form-control" name="hinhthuc" required>
				    </div>

					<!-- Submit -->
				    <div class="modal-footer">
			        	<button type="submit" id = "submit" form = "them_DH" class="btn btn-primary"> Thêm Đơn Hàng </button>
			    	</div>
				</form>
	    	</div>
	    </div>
	</div>
</div>