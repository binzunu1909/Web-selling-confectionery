<div class="modal fade" id="Chitiet_DH" tabindex="-1" role="dialog" aria-labelledby="Dang_Ky_Label" aria-hidden="true">
	<div class="modal-dialog" role="document"> 
		<!-- Modal content-->
    	<div class="modal-content">
    		<!-- Modal Header -->
    		<div class="modal-header">
    			<h2 class="modal-title" id="Dang_Ki"> Chi Tiết Đơn Hàng
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
    			</button>
    			</h2>	
	    	</div>
	    	<!-- Modal Body -->
	    	<div class="modal-body">
	        	<p style = "padding-bottom: 10px;"> 
	        		<b style = "padding-right: 5%" > Mã Đơn Hàng: </b>
	        		<span id = "madonhang"> DH0001</span>
	        	</p>
	        	<p style = "padding-bottom: 10px;"> 
	        		<b style = "padding-right: 9%" > Trạng thái: </b>
	        		<span id = "trangthai"> Đang vận chuyển </span>
	        	</p>
	        	<p style = "padding-bottom: 10px;"> 
	        		<b style = "padding-right: 5%"> Ngày tạo: </b>
	        		<span  id = "ngaytao"> 20/05/2020 2:51 PM </span>
	        	</p>
	        	<p> <b> Thông Tin Đơn Hàng </b> </p>
	        	<table>
	        		<tr>
	        			<th> Sản Phẩm </th>
	        			<th> SL </th>
	        			<th> Giá </th>
	        		</tr>
	        		<?php 
	        			if (isset($_POST['madonhang'])){
	        			//function chitiet(){
		        			//echo "123213";

		        			$madonhang = $_POST['madonhang'];
		        			//echo $madonhang;
		        			$madonhang = "DH0001";
		        			$conn = mysqli_connect('localhost', 'root', '', 'doan');
							mysqli_set_charset($conn, 'UTF8');
							$result = mysqli_query($conn, "SELECT *  FROM chitietdonhang, sanpham WHERE madonhang = '$madonhang' AND sanpham.masp = chitietdonhang.masp");
							while($row =mysqli_fetch_assoc($result))
							{	$tensp = $row['tensp'];
								$soluong = $row['soluong'];
								$thanhtien = $row['thanhtien'];
			        		echo "
			        		<tr>
			        			<td> $tensp </td>
			        			<td> $soluong </td>
			        			<td> $thanhtien </td>
			        		</tr>
			        		";
		        			}
	        			
		        		
		        		$result = mysqli_query($conn, "SELECT SUM(thanhtien)  FROM chitietdonhang WHERE madonhang = '$madonhang'");
						$row =mysqli_fetch_assoc($result);
						$tongcong = $row['SUM(thanhtien)'];
		        		echo "
		        		<tr>
		        			<th colspan=\"2\">Tổng cộng:</th>
		        			<td>$tongcong ₫</td>
		        		</tr>";
		        		//}
		        		//}
		        		//if ($check == 1){
		        		//	chitiet();
		        		}

	        		?>
	        	</table>
	        	<p style = "padding-bottom: 10px; padding-top: 12px"> 
	        		<b style = "padding-right: 5%"> Hình Thức </b>
	        		<span  id = "hinhthuc"> 20/05/2020 2:51 PM </span>
	        	</p>
	        	<hr>
	        	<p> <b> Thông Tin Khách Hàng </b> </p>
	        	<br>
	        	<p style = "padding-bottom: 10px;"> 
	        		<b style = "padding-right: 20px"> Điện Thoại </b>
	        		<span  id = "sodienthoai"> 20/05/2020 2:51 PM </span>
	        	</p>
	        	<p style = "padding-bottom: 10px;"> 
	        		<b style = "padding-right: 45px"> Họ Tên </b>
	        		<span  id = "hoten"> 20/05/2020 2:51 PM </span>
	        	</p>
	        	<p style = "padding-bottom: 10px;"> 
	        		<b style = "padding-right: 55px"> Email </b>
	        		<span  id = "email"> 20/05/2020 2:51 PM </span>
	        	</p>
	        	<p style = "padding-bottom: 10px;"> 
	        		<b style = "padding-right: 45px"> Địa Chỉ </b>
	        		<span  id = "diachi"> 20/05/2020 2:51 PM </span>
	        	</p>
	    	</div>
	    </div>
	</div>
	<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
	</style>
	<script>
		function chitietdh(madonhang, trangthai, ngaytao, hinhthuc, sodienthoai, hoten, email, diachi){
			document.getElementById("madonhang").innerHTML  = madonhang;

			document.getElementById("trangthai").innerHTML  = trangthai;

			document.getElementById("ngaytao").innerHTML  = ngaytao;

			document.getElementById("hinhthuc").innerHTML  = hinhthuc;

			document.getElementById("sodienthoai").innerHTML  = sodienthoai;

			document.getElementById("hoten").innerHTML  = hoten;

			document.getElementById("email").innerHTML  = email;

			document.getElementById("diachi").innerHTML  = diachi;

			//document.getElementById("idtongtien").value = tongtien;

			//document.getElementById("idhinhthuc").value = hinhthuc;
			$.ajax({
			    type: "POST",
			    url: 'chitiet.php',
			    dataType: 'json',
			    data: {madonhang: madonhang},

			    success: function (obj, textstatus) {
	                  if( !('error' in obj) ) {
	                      yourVariable = obj.result;
	                  }
	                  else {
	                      console.log(obj.error);
	                  }
	            },
	            error : function(e){
	            	alert(e.responseText);
	            }
				});
		}
	</script>
</div>