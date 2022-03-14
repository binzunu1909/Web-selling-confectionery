<div class="modal fade" id="Sua_SP" tabindex="-1" role="dialog" aria-labelledby="Dang_Ky_Label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
    	<div class="modal-content">
    		<!-- Modal Header -->
    		<div class="modal-header">
    			<h2 class="modal-title" id="Dang_Ki"> Sửa Sản Phẩm 
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
    			</button>
    			</h2>	
	    	</div>
	    	<!-- Modal Body -->
	    	<div class="modal-body">
	        	<?php 
					if($_SERVER["REQUEST_METHOD"] == "POST") {
					    $conn = mysqli_connect('localhost', 'root', '', 'doan');

					    $masp = $_POST['suamasp'];
						$tensp = $_POST['suatensp'];
						$loaisp = $_POST['sualoaisp'];
						$giatien = $_POST['suagiasp'];
						$mota = $_POST['suamotasp'];
						

						$sql = "UPDATE sanpham SET tensp = '$tensp', maloaisp = '$loaisp', giasp = $giatien , motasp = '$mota' WHERE masp = '$masp' ";

						if ($conn->query($sql) === TRUE){
							echo "<script type='text/javascript'>alert('Sửa Sản Phẩm thành công');</script>";
							readFileJson();
						}
						else{
							//echo "<script type='text/javascript'>alert('Sửa Sản Phẩm thất bại');</script>";
						}


					}
				?>
				<form id = "sua_SP" action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" role = "form">
		    		<!-- Tên Sản Phẩm -->
		    		<div class="form-group">
					    <label> Mã Sản Phẩm </label>
					    <input type="text" class="form-control" name="suamasp" id = "idmasp" placeholder="Mã Sản Phẩm" required>
				    </div>

				    <label for="file"> Hình Sản Phẩm </label>
					<div class="form-row">
					    <div class="form-group col-md-6" class = "pre">
						    <img id = "image_sua" src = "../../img/SP0007.gif" width="45%">
					    </div>
					    <div class="form-group col-md-6" style = "padding-bottom: 24%" >
						    <input type="file" class="custom-file-input" id="file" name="file">
					    </div>
					</div>

		    		<div class="form-group">
					    <label> Tên Sản Phẩm </label>
					    <input type="text" class="form-control" name="suatensp" id = "idtensp" placeholder="Tên Sản Phẩm" required>
				    </div>

				    <!-- Loại Sản Phẩm -->
				    <?php 
				    	$conn = mysqli_connect('localhost', 'root', '', 'doan');
						mysqli_set_charset($conn, 'UTF8');

						$result = mysqli_query($conn, 'SELECT *  FROM loaisp');

						echo '<div class="form-group">
						    <label> Loại Sản Phẩm </label>
						    <select class="form-control" name="sualoaisp" id = "idloaisp" required>';

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
					    <input type="number" class="form-control" name="suagiasp" id = "idgiasp" placeholder="Tên Sản Phẩm" required>
				    </div>
				    
				    <!-- Mô Tả -->
				    <div class="form-group">
						<label> Mô Tả </label>
						<textarea class="form-control" rows="5" name="suamotasp" id = "idmotasp" required></textarea>
					</div>

					<!-- Submit -->
				    <div class="modal-footer">
			        	<button type="submit" id = "submit_SUA" form = "sua_SP" class="btn btn-primary" name = "submit"> Thêm Sản Phẩm </button>
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
		function suasp(masp, tensp, loaisp, giasp, motasp){
			document.getElementById("idmasp").value = masp;

			document.getElementById("idtensp").value = tensp;

			document.getElementById("idloaisp").value = loaisp;

			document.getElementById("idgiasp").value = giasp;

			document.getElementById("idmotasp").value = motasp;

			document.getElementById("image_sua").src = "../img/" + masp + ".gif";

		}
	</script>
	<script>
	$(document).ready(function(){

	    $("#submit_SUA").click(function(){
	    	var maspsua = document.getElementById("idmasp").value;
	    	alert(maspsua);
	        var fd = new FormData();
	        var files = $('#file')[0].files[0];
	        fd.append('file',files);
	        fd.append('maspsua',maspsua);
	        $.ajax({
	            url: 'upload.php',
	            type: 'post',
	            data: fd,
	            contentType: false,
	            processData: false,
	            success: function(response){
		                if(response != 0){
		                    $("#img").attr("src",response); 
		                    $(".pre img").show(); // Display image element

		                    $("#sua_SP").submit();
		                }else{
		                    alert('file not uploaded');
		                }
		            },
		        });
		    });
		});
	</script>
</div>