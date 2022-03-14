<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/bootstrap-table.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">


<script src="../js/JS2/jquery.min.js"></script>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/chart.min.js"></script>
<script src="../js/chart-data.js"></script>
<script src="../js/easypiechart.js"></script>
<script src="../js/easypiechart-data.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/bootstrap-table.js"></script>
<link href="../js/JS2/bootstrap-table.min.css" rel="stylesheet">
<script src="../js/JS2/bootstrap-table-export.min.js"></script>
<script src="../js/JS2/tableExport.min.js"></script>
<script src="../js/JS2/bootstrap-table.min.js"></script>
<script src="../js/JS2/bootstrap-table-filter-control.min.js"></script>
<!--script src="https://code.jquery.com/jquery-2.1.1.min.js"></script-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php
		include("../sidebar.php");
	?>	
		
	<div id = "main-side" class="col-sm-8 col-sm-offset-4 col-lg-9 col-lg-offset-3 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Quản Lý Đơn Hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lý Đơn Hàng</h1>
			</div>
		</div><!--/.row-->

		<!-- Main -->
		<?php
			function readFileJson(){
				$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');

				$result = mysqli_query($conn, 'SELECT *  FROM donhang, taikhoan WHERE donhang.makhachhang = taikhoan.makh');

				$emparray = array();
			    while($row =mysqli_fetch_assoc($result))
			    {
			        $emparray[] = $row;
			    }

			    $fp = fopen('donhang.json', 'w');
			    fwrite($fp, json_encode($emparray));
			    fclose($fp);


				$result = mysqli_query($conn, 'SELECT *  FROM chitietdonhang, sanpham WHERE sanpham.masp = chitietdonhang.masp');

				$emparray = array();
			    while($row =mysqli_fetch_assoc($result))
			    {
			        $emparray[] = $row;
			    }

			    $fp = fopen('chitietdonhang.json', 'w');
			    fwrite($fp, json_encode($emparray));
			    fclose($fp);
		    }

		    function deleteRow($madonhang ){
	    		$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');
				$result = mysqli_query($conn, "DELETE FROM donhang WHERE madonhang  = \"$madonhang \" ;");
			}
			function testss($madonhang){
				echo "213123213213213";
	    		echo "<script> alert($madonhang)</script>";
			}
			if(isset($_POST['functionname']) && isset($_POST['arguments'])) {
			    $functionname = $_POST['functionname'];
			    $arguments = $_POST['arguments'];
			    echo "<script> alert($arguments)</script>";
			    echo "$arguments";
			    switch($functionname) {
			        case 'deleteRow' : deleteRow($_POST['arguments']) ;break;
			        //case 'viewRow' : echo "<script> alert($madonhang)</script>";break;
			    }
			}
			if (isset($_POST['madonhang'])){
				echo "213123213213213";
			}
			readFileJson();
		?>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Bảng Đơn Hàng</div>
					<div class="panel-body">
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
							        	<table id = "chitietdonhang">
							        		
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
							        	<!--p style = "padding-bottom: 10px;"> 
							        		<b style = "padding-right: 55px"> Email </b>
							        		<span  id = "email"> 20/05/2020 2:51 PM </span>
							        	</p-->
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

									//document.getElementById("email").innerHTML  = email;

									document.getElementById("diachi").innerHTML  = diachi;

									//document.getElementById("idtongtien").value = tongtien;

									//document.getElementById("idhinhthuc").value = hinhthuc;
									

								}
							</script>
						</div>
						<div id="toolbar">
							<!--button id="add" class="btn btn-success" data-target="#Them_DH" data-toggle="modal">
								<i class="glyphicon glyphicon glyphicon-plus"></i> Thêm Đơn Hàng
							</button-->
							<button id="remove" class="btn btn-danger">
								<i class="glyphicon glyphicon-remove"></i> Xóa Đơn Hàng
							</button>
						</div>
						<table id = "table" data-toggle="table" data-url="donhang.json" data-toolbar="#toolbar" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-fullscreen="true" data-search="true" data-filter-control="true" data-select-item-name="toolbar"  data-pagination="true" data-sort-name="name" data-sort-order="desc" data-show-export="true">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" > Mã Đơn Hàng </th>
						        <th data-field="madonhang" data-sortable="true"> Mã Đơn Hàng </th>
						        <th data-field="ngaydatdon" data-sortable="true" data-filter-control="input"> Ngày Đặt Đơn </th>
						        <th data-field="hoten"  data-sortable="true"> Tên Khách Hàng </th>
						        <th data-field="dienthoai"  data-sortable="true"> Số ĐT </th>
						        <th data-field="diachigiao"  data-sortable="true"> Địa Chỉ </th>
						        <th data-field="tongsoluongsp" data-sortable="true"> SL Sản Phẩm </th>
						        <th data-field="tongtien" data-sortable="true"> Tổng Tiền </th>
						        <th data-field="hinhthuc" data-sortable="true" data-filter-control="select"> Hình Thức </th>
						        <th data-field="tinhtrang" data-sortable="true" data-filter-control="select"> Tình Trạng </th>
						        <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents"></th>
						    </tr>
						    </thead>
						</table>
						<script>
							var $table = $('#table')

							function operateFormatter(value, row, index) {
								return [
								'<a class="view" href="javascript:void(0)" title="Xem Chi Tiết Đơn Hàng">',
						    	'<i class="glyphicon glyphicon-zoom-in"></i>',
						    	'</a> ',
						    	//'<a class="modify" href="javascript:void(0)" title="Sửa Thông Tin Đơn Hàng">',
						    	//'<i class="glyphicon glyphicon-pencil"></i>',
						    	//'</a>  ',
						    	'<a class="remove" href="javascript:void(0)" title="Xóa Đơn Hàng">',
						    	'<i class="glyphicon glyphicon-trash"></i>',
						    	'</a>   '
						    	].join('')
							}

							window.operateEvents = {
								'click .view': function (e, value, row, index) {
							    	//alert('You click like action, row: ' + JSON.stringify(row))
							    	chitietdh(row.madonhang, row.tinhtrang, row.ngaydatdon, row.hinhthuc, row.dienthoai, row.hoten, row.email, row.diachigiao);
							    	$.getJSON( "chitietdonhang.json", function( data ) {
						    			sum = 0;
						    			var content = "<tr>\
						        			<th> Sản Phẩm </th>\
						        			<th> SL </th>\
						        			<th> Giá </th>\
						        		</tr>";
						    			if (data != null){
						    				for (let i=0; i<data.length; i++){
						    					if (data[i]['madonhang'] == row.madonhang){
						    						var tensp = data[i]['tensp'];
													var soluong = data[i]['soluong'];
													var thanhtien = data[i]['thanhtien'];
													sum += parseInt(thanhtien);
									        		content += "\
									        		<tr>\
									        			<td>" + tensp + "</td>\
									        			<td>" + soluong + "</td>\
									        			<td>" + thanhtien + "</td>\
									        		</tr>\
									        		";
								        		}
						    				}
						    				content += "\
						    				<tr>\
							        			<th colspan=\"2\">Tổng cộng:</th>\
							        			<td>" + sum + "₫</td>\
							        		</tr>";
						    				document.getElementById('chitietdonhang').innerHTML = content;
						    			}
						    			else{
						    				alert("Lỗi xem chi tiết hóa đơn");
						    			}
							            
									});						    
							    	$("#Chitiet_DH").modal()
							    },
								'click .modify': function (e, value, row, index) {
							    	/////alert('You click like action, row: ' + JSON.stringify(row))
							    	suadh(row.madonhang, row.makhachhang, row.tongsoluongsp, row.tongtien, row.hinhthuc);
							    	$("#Sua_DH").modal()
							    },
							    'click .remove': function (e, value, row, index) {
							    	$table.bootstrapTable('remove', {
							    	field: 'madonhang',
							    	values: [row.madonhang]
							    	})
									$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'deleteRow', arguments: row.madonhang},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã xóa " + row.madonhang + " thành công");
							    }

							}

							var $table = $('#table')
							var $button = $('#remove')

							$(function() {
						    	$button.click(function () {
						    		var arr = []
						    		for (i=0; i<$table.bootstrapTable('getSelections').length; i++){
						    			arr.push($table.bootstrapTable('getSelections')[i].madonhang);
						    		}
						    		$table.bootstrapTable('remove', {
						    			field: 'madonhang',
						    			values: arr
						    		})
						    		for (i=0; i<arr.length; i++){
						    			$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'deleteRow', arguments: arr[i]},

									    success: function (obj, textstatus) {
							                  if( !('error' in obj) ) {
							                      yourVariable = obj.result;
							                  }
							                  else {
							                      console.log(obj.error);
							                  }
							            }
										});
						    		}
						   			alert("Đã xóa đơn hàng thành công");
						    	})
							})
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->

	

	<script>
		$('#calendar').datepicker({
		});

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
	<script>
		var tog = 0;
		document.onkeyup = function(e) {
			if (e.ctrlKey && e.which == 66) {
		    	//alert("Ctrl + B shortcut combination was pressed");
		    	if (tog == 0){
					document.getElementById("sidebar-collapse").style.display = "none";
		    		document.getElementById("main-side").className = "col-sm-12 col-sm-offset-12 col-lg-0 col-lg-offset-0 main";
				}
				else{
		    		document.getElementById("sidebar-collapse").style.display = "block";
		    		document.getElementById("main-side").className = "col-sm-8 col-sm-offset-4 col-lg-9 col-lg-offset-3 main";
				}
				tog = 1 - tog;
			} 
		};
	</script>
</body>

</html>
