<div class="modal fade" id="Them_SP" tabindex="-1" role="dialog" aria-labelledby="Dang_Ky_Label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
    	<div class="modal-content">
    		<!-- Modal Header -->
    		<div class="modal-header">
    			<h2 class="modal-title" id="Dang_Ki"> Thêm Sản Phẩm 
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

						$result = mysqli_query($conn, 'SELECT *  FROM sanpham');
						$ma = 0;
						while($row = mysqli_fetch_assoc($result)) {
							$maloaisp = (int)substr($row['masp'], -4);
							if ($ma < $maloaisp){
								$ma = $maloaisp;
							} 
					    }
					    $ma_t = (string)($ma + 1);
					    while (strlen($ma_t) < 4){
					    	$ma_t = "0$ma_t";
					    }
					    return "SP$ma_t";

	        		}

					if($_SERVER["REQUEST_METHOD"] == "POST") {
					    $conn = mysqli_connect('localhost', 'root', '', 'doan');

						$tensp = $_POST['tensp'];
						$loaisp = $_POST['loaisp'];
						$giatien = $_POST['giasp'];
						$mota = $_POST['motasp'];
						$masp = sinhMa();

						$sql = "INSERT INTO sanpham (masp, tensp, maloaisp, giasp, motasp) VALUES ('$masp', '$tensp', '$loaisp',  $giatien , '$mota')";

						if ($conn->query($sql) === TRUE){
							echo "<script type='text/javascript'>alert('Thêm Sản Phẩm thành công');</script>";
							readFileJson();
						}
						else{
							//echo "<script type='text/javascript'>alert('Thêm Sản Phẩm thất bại');</script>";
						}
					}else
				?>
				<form id = "them_SP" action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" role = "form">
		    		<!-- Tên Sản Phẩm -->
		    		<div class="form-group">
					    <label> Tên Sản Phẩm </label>
					    <input type="text" class="form-control" name="tensp" placeholder="Tên Sản Phẩm" required>
				    </div>

				    <!-- Loại Sản Phẩm -->
				    <?php 
				    	$conn = mysqli_connect('localhost', 'root', '', 'doan');
						mysqli_set_charset($conn, 'UTF8');

						$result = mysqli_query($conn, 'SELECT *  FROM loaisp');

						echo '<div class="form-group">
						    <label> Loại Sản Phẩm </label>
						    <select class="form-control" name="loaisp" required>';

						while($row = mysqli_fetch_assoc($result)) {
							$tenloaisp = $row['tenloaisp'];
							$maloaisp = $row['maloaisp'];
					        echo "<option value = $maloaisp> $tenloaisp </option>";
					    }
						    		
						echo '</select>
					    </div>';
				    ?>

				    <!-- Giá Tiền -->
		    		<div class="form-group">
					    <label> Giá Tiền </label>
					    <input type="number" class="form-control" name="giasp" placeholder="Giá Tiền" required>
				    </div>
				    
				    <!-- Mô Tả -->
				    <div class="form-group">
						<label> Mô Tả </label>
						<textarea class="form-control" rows="5" name="motasp" required></textarea>
					</div>

					<!-- Submit -->
				    <div class="modal-footer">
			        	<button type="submit" id = "submit" form = "them_SP" class="btn btn-primary"> Thêm Sản Phẩm </button>
			    	</div>
				</form>
	    	</div>
	    </div>
	</div>
</div>