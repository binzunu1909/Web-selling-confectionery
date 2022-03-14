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
				<li class="active">Quản Lý Tài Khoản</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lý Tài Khoản</h1>
			</div>
		</div><!--/.row-->

		<!-- Main -->
		<?php
			function readFileJson(){
				$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');

				$result = mysqli_query($conn, 'SELECT *  FROM taikhoan WHERE trangthai IS NULL');

				$emparray = array();
			    while($row =mysqli_fetch_assoc($result))
			    {
			        $emparray[] = $row;
			    }

			    $fp = fopen('khachhang.json', 'w');
			    fwrite($fp, json_encode($emparray));
			    fclose($fp);

			    $result = mysqli_query($conn, 'SELECT *  FROM taikhoan WHERE trangthai = "khoa"');

				$emparray = array();
			    while($row =mysqli_fetch_assoc($result))
			    {
			        $emparray[] = $row;
			    }

			    $fp = fopen('khachhang_khoa.json', 'w');
			    fwrite($fp, json_encode($emparray));
			    fclose($fp);
		    }

		    function deleteRow($taikhoan ){
	    		$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');
				$result = mysqli_query($conn, "DELETE FROM taikhoan WHERE taikhoan  = \"$taikhoan \" ;");
			}
			function lockRow($taikhoan){
	    		$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');
				$sql = "UPDATE taikhoan SET trangthai = 'khoa' WHERE taikhoan = '$taikhoan' ";

				if ($conn->query($sql) === TRUE){
					//echo "<script type='text/javascript'>alert('Ẩn Sản Phẩm thành công');</script>";
					readFileJson();
				}
			}
			function unlockRow($taikhoan){
	    		$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');
				$sql = "UPDATE taikhoan SET trangthai = NULL WHERE taikhoan = '$taikhoan' ";

				if ($conn->query($sql) === TRUE){
					//echo "<script type='text/javascript'>alert('Ẩn Sản Phẩm thành công');</script>";
					readFileJson();
				}
			}
			if(isset($_POST['functionname']) && isset($_POST['arguments'])) {
			    $functionname = $_POST['functionname'];
			    switch($functionname) {
			        case 'deleteRow' : deleteRow($_POST['arguments']) ;break;
			        case 'lockRow' : lockRow($_POST['arguments']) ;break;
			        case 'unlockRow' : unlockRow($_POST['arguments'])	; break;
			    }
			}
			readFileJson();
		?>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Bảng Tài Khoản</div>
					<div class="panel-body">
						<?php 
							include("themkh.php");
							include("suakh.php");
						?>
						<div id="toolbar">
							<button id="add" class="btn btn-success" data-target="#Them_KH" data-toggle="modal">
								<i class="glyphicon glyphicon glyphicon-plus"></i> Thêm Tài Khoản
							</button>
							<button id="remove" class="btn btn-danger">
								<i class="glyphicon glyphicon-remove"></i> Xóa Tài Khoản
							</button>
						</div>
						<table id = "table" data-toggle="table" data-url="khachhang.json" data-toolbar="#toolbar" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-fullscreen="true" data-search="true" data-select-item-name="toolbar"  data-pagination="true" data-sort-name="name" data-sort-order="desc" data-show-export="true">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" > Tài Khoản </th>
						        <th data-field="taikhoan"  data-sortable="true"> Tài Khoản </th>
						        <th data-field="hoten" data-sortable="true"> Họ Tên </th>
						        <th data-field="diachi" data-sortable="true"> Địa Chỉ </th>
						        <th data-field="dienthoai" data-sortable="true"> Số Điện Thoại </th>
						        <!--th data-field="email" data-sortable="true"> Email </th-->
						        <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents"></th>
						    </tr>
						    </thead>
						</table>
						<script>
							var $table = $('#table')

							function operateFormatter(value, row, index) {
								return [
						    	'<a class="modify" href="javascript:void(0)" title="Sửa Thông Tin Tài Khoản">',
						    	'<i class="glyphicon glyphicon-pencil"></i>',
						    	'</a>  ',
						    	'<a class="remove" href="javascript:void(0)" title="Xóa Tài Khoản">',
						    	'<i class="glyphicon glyphicon-trash"></i>',
						    	'</a>   ',
						    	'<a class="lock" href="javascript:void(0)" title="Khóa Tài Khoản">',
						    	'<i class="glyphicon glyphicon-lock"></i>',
						    	'</a>   '
						    	].join('')
							}

							window.operateEvents = {
								'click .modify': function (e, value, row, index) {
							    	/////alert('You click like action, row: ' + JSON.stringify(row))
							    	suakh(row.taikhoan, row.hoten, row.diachi, row.dienthoai, row.email);
							    	$("#Sua_KH").modal()
							    },
							    'click .remove': function (e, value, row, index) {
							    	$table.bootstrapTable('remove', {
							    	field: 'taikhoan',
							    	values: [row.taikhoan]
							    	})
									$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'deleteRow', arguments: row.taikhoan},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã xóa " + row.taikhoan + " thành công");
							    },
							    'click .lock': function (e, value, row, index) {
							    	$table.bootstrapTable('hideRow', {
							    	index:index
							    	})
									$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'lockRow', arguments: row.taikhoan},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã khóa " + row.taikhoan + " thành công");
							  	}

							}

							var $table = $('#table')
							var $button = $('#remove')

							$(function() {
						    	$button.click(function () {
						    		var arr = []
						    		for (i=0; i<$table.bootstrapTable('getSelections').length; i++){
						    			arr.push($table.bootstrapTable('getSelections')[i].taikhoan);
						    		}
						    		$table.bootstrapTable('remove', {
						    			field: 'taikhoan',
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
						   			alert("Đã xóa tài khoản thành công");
						    	})
							})
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Bảng Tài Khoản (Khóa)</div>
					<div class="panel-body">
						<table id = "table_khoa" data-toggle="table" data-url="khachhang_khoa.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-fullscreen="true" data-search="true" data-select-item-name="toolbar"  data-pagination="true" data-sort-name="name" data-sort-order="desc" data-show-export="true">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" > Tài Khoản </th>
						        <th data-field="taikhoan"  data-sortable="true"> Tài Khoản </th>
						        <th data-field="hoten" data-sortable="true"> Họ Tên </th>
						        <th data-field="diachi" data-sortable="true"> Địa Chỉ </th>
						        <th data-field="dienthoai" data-sortable="true"> Số Điện Thoại </th>
						        <!--th data-field="email" data-sortable="true"> Email </th-->
						        <th data-field="operate" data-formatter="operateFormatter_khoa" data-events="operateEvents_khoa"></th>
						    </tr>
						    </thead>
						</table>
						<script>
							var $table_khoa = $('#table_khoa')

							function operateFormatter_khoa(value, row, index) {
								return [
						    	'<a class="modify_khoa" href="javascript:void(0)" title="Sửa Thông Tin Tài Khoản">',
						    	'<i class="glyphicon glyphicon-pencil"></i>',
						    	'</a>  ',
						    	'<a class="remove_khoa" href="javascript:void(0)" title="Xóa Tài Khoản">',
						    	'<i class="glyphicon glyphicon-trash"></i>',
						    	'</a>   ',
						    	'<a class="lock_khoa" href="javascript:void(0)" title="Bỏ Khóa Tài Khoản">',
						    	'<i class="glyphicon glyphicon-wrench"></i>',
						    	'</a>   '
						    	].join('')
							}

							window.operateEvents_khoa = {
								'click .modify_khoa': function (e, value, row, index) {
							    	/////alert('You click like action, row: ' + JSON.stringify(row))
							    	suakh(row.taikhoan, row.hoten, row.diachi, row.dienthoai, row.email);
							    	$("#Sua_KH").modal()
							    },
							    'click .remove_khoa': function (e, value, row, index) {
							    	$table_khoa.bootstrapTable('remove', {
							    	field: 'taikhoan',
							    	values: [row.taikhoan]
							    	})
									$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'deleteRow', arguments: row.taikhoan},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã xóa " + row.taikhoan + " thành công");
							    },
							    'click .lock_khoa': function (e, value, row, index) {
							    	$table_khoa.bootstrapTable('hideRow', {
							    	index:index
							    	})
									$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'unlockRow', arguments: row.taikhoan},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã bỏ khóa " + row.taikhoan + " thành công");
							  	}

							}
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
