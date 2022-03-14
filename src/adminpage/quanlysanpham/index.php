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
				<li class="active">Quản Lý Sản Phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lý Sản Phẩm</h1>
			</div>
		</div><!--/.row-->

		<!-- Main -->
		<?php
			function readFileJson(){
				$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');

				$result = mysqli_query($conn, 'SELECT *  FROM sanpham WHERE tinhtrang IS NULL');

				$emparray = array();
			    while($row =mysqli_fetch_assoc($result))
			    {
			        $emparray[] = $row;
			    }

			    $fp = fopen('sanpham.json', 'w');
			    fwrite($fp, json_encode($emparray));
			    fclose($fp);

			    $result = mysqli_query($conn, 'SELECT *  FROM sanpham WHERE tinhtrang = "an"');

				$emparray = array();
			    while($row =mysqli_fetch_assoc($result))
			    {
			        $emparray[] = $row;
			    }

			    $fp = fopen('sanpham_an.json', 'w');
			    fwrite($fp, json_encode($emparray));
			    fclose($fp);
		    }

		    function deleteRow($masp){
	    		$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');
				$result = mysqli_query($conn, "DELETE FROM sanpham WHERE masp = \"$masp\" ;");
				echo "<script> alert($query) </script>";
			}
			function hideRow($masp){
	    		$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');
				$sql = "UPDATE sanpham SET tinhtrang = 'an' WHERE masp = '$masp' ";

				if ($conn->query($sql) === TRUE){
					//echo "<script type='text/javascript'>alert('Ẩn Sản Phẩm thành công');</script>";
					readFileJson();
				}
			}

			function openRow($masp){
	    		$conn = mysqli_connect('localhost', 'root', '', 'doan');
				mysqli_set_charset($conn, 'UTF8');
				$sql = "UPDATE sanpham SET tinhtrang = NULL WHERE masp = '$masp' ";

				if ($conn->query($sql) === TRUE){
					//echo "<script type='text/javascript'>alert('Ẩn Sản Phẩm thành công');</script>";
					readFileJson();
				}
			}
			if(isset($_POST['functionname']) && isset($_POST['arguments'])) {
			    $functionname = $_POST['functionname'];
			    switch($functionname) {
			        case 'deleteRow' : deleteRow($_POST['arguments']) ;break;
			        case 'hideRow' : hideRow($_POST['arguments']) ; break;
			        case 'openRow' : openRow($_POST['arguments']) ; break;
			    }
			}
			readFileJson();
		?>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Bảng Sản Phẩm</div>
					<div class="panel-body">
						<?php 
							include("themsp.php");
							include("suasp.php");
						?>
						<div id="toolbar">
							<button id="add" class="btn btn-success" data-target="#Them_SP" data-toggle="modal">
								<i class="glyphicon glyphicon glyphicon-plus"></i> Thêm Sản Phẩm
							</button>
							<button id="remove" class="btn btn-danger">
								<i class="glyphicon glyphicon-remove"></i> Xóa Sản Phẩm
							</button>
							<button id="hide" class="btn btn-info">
								<i class="glyphicon glyphicon-minus"></i> Ẩn Sản Phẩm
							</button>
						</div>
						<table id = "table" data-toggle="table" data-url="sanpham.json" data-toolbar="#toolbar" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-fullscreen="true" data-filter-control="true" data-search="true" data-select-item-name="toolbar"  data-pagination="true" data-sort-name="name" data-sort-order="desc" data-show-export="true">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" > Mã Sản Phẩm </th>
						        <th data-field="masp" data-sortable="true"> Mã Sản Phẩm </th>
						        <th data-field="tensp"  data-sortable="true"> Tên Sản Phẩm </th>
						        <th data-field="maloaisp" data-sortable="true"> Loại Sản Phẩm </th>
						        <th data-field="giasp" data-sortable="true"> Giá Sản Phẩm </th>
						        <th data-field="motasp" data-sortable="true"> Mô Tả </th>
						        <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents"></th>
						    </tr>
						    </thead>
						</table>
						<script>
							var $table = $('#table')

							function operateFormatter(value, row, index) {
								return [
						    	'<a class="modify" href="javascript:void(0)" title="Sửa Sản Phẩm">',
						    	'<i class="glyphicon glyphicon-pencil"></i>',
						    	'</a>  ',
						    	'<a class="remove" href="javascript:void(0)" title="Xóa Sản Phẩm">',
						    	'<i class="glyphicon glyphicon-trash"></i>',
						    	'</a>   ',
						    	'<a class="hide_sp" href="javascript:void(0)" title="Ẩn Sản Phẩm">',
						    	'<i class="	glyphicon glyphicon-eye-close"></i>',
						    	'</a>'
						    	].join('')
							}

							window.operateEvents = {
								'click .modify': function (e, value, row, index) {
							    	/////alert('You click like action, row: ' + JSON.stringify(row))
							    	suasp(row.masp, row.tensp, row.maloaisp, row.giasp, row.motasp);
							    	console.log(row.maloaisp);
							    	$("#Sua_SP").modal()
							    },
							    'click .remove': function (e, value, row, index) {
							    	$table.bootstrapTable('remove', {
							    	field: 'masp',
							    	values: [row.masp]
							    	})
									$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'deleteRow', arguments: row.masp},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã xóa " + row.masp + " thành công");
							    },
							    'click .hide_sp': function (e, value, row, index) {
							    	$table.bootstrapTable('hideRow', {
							    	index:index
							    	})
							    	$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'hideRow', arguments: row.masp},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã ẩn " + row.masp + " thành công");
							    }

							}

							var $table = $('#table')
							var $button = $('#remove')
							var $hide = $('#hide')

							$(function() {
						    	$button.click(function () {
						    		var arr = []
						    		for (i=0; i<$table.bootstrapTable('getSelections').length; i++){
						    			arr.push($table.bootstrapTable('getSelections')[i].masp);
						    		}
						    		$table.bootstrapTable('remove', {
						    			field: 'masp',
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
						   			alert("Đã xóa sản phẩm thành công");
						    	})
						    	$hide.click(function () {
						    		var arr = []
						    		for (i=0; i<$table.bootstrapTable('getSelections').length; i++){
						    			arr.push($table.bootstrapTable('getSelections')[i].masp);
						    		}
						    		for (i=0; i<arr.length; i++){
						    			$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'hideRow', arguments: arr[i]},

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
						    		for (i=0; i<$table.bootstrapTable('getData').length; i++){
						    			for (j=0; j<$table.bootstrapTable('getSelections').length; j++){
						    				if ($table.bootstrapTable('getData')[i].masp == $table.bootstrapTable('getSelections')[j].masp){
						    					$table.bootstrapTable('hideRow', {
										    	index:i
										    	})
						    				}
						    			}
						    		}
				                	alert("Đã ẩn sản phẩm thành công");
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
					<div class="panel-heading">Bảng Sản Phẩm (Ẩn)</div>
					<div class="panel-body">
						<table id = "table_an" data-toggle="table" data-url="sanpham_an.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-fullscreen="true" data-search="true" data-select-item-name="toolbar"  data-filter-control="true" data-pagination="true" data-sort-name="name" data-sort-order="desc" data-show-export="true">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" > Mã Sản Phẩm </th>
						        <th data-field="masp" data-sortable="true"> Mã Sản Phẩm </th>
						        <th data-field="tensp"  data-sortable="true"> Tên Sản Phẩm </th>
						        <th data-field="maloaisp" data-sortable="true" data-filter-control="select"> Loại Sản Phẩm </th>
						        <th data-field="giasp" data-sortable="true"> Giá Sản Phẩm </th>
						        <th data-field="motasp" data-sortable="true"> Mô Tả </th>
						        <th data-field="operate" data-formatter="operateFormatter_an" data-events="operateEvents_an"></th>
						    </tr>
						    </thead>
						</table>
						<script>
							var $table_an = $('#table_an')

							function operateFormatter_an(value, row, index) {
								return [
						    	'<a class="modify_an" href="javascript:void(0)" title="Sửa Sản Phẩm">',
						    	'<i class="glyphicon glyphicon-pencil"></i>',
						    	'</a>  ',
						    	'<a class="remove_an" href="javascript:void(0)" title="Xóa Sản Phẩm">',
						    	'<i class="glyphicon glyphicon-trash"></i>',
						    	'</a>   ',
						    	'<a class="open_sp" href="javascript:void(0)" title="Hiện Sản Phẩm">',
						    	'<i class="	glyphicon glyphicon-eye-open"></i>',
						    	'</a>'
						    	].join('')
							}

							window.operateEvents_an = {
								'click .modify_an': function (e, value, row, index) {
							    	/////alert('You click like action, row: ' + JSON.stringify(row))
							    	suasp(row.masp, row.tensp, row.maloaisp, row.giasp, row.motasp);
							    	console.log(row.maloaisp);
							    	$("#Sua_SP").modal()
							    },
							    'click .remove_an': function (e, value, row, index) {
							    	$table_an.bootstrapTable('remove', {
							    	field: 'masp',
							    	values: [row.masp]
							    	})
									$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'deleteRow', arguments: row.masp},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã xóa " + row.masp + " thành công");
							    },
							    'click .open_sp': function (e, value, row, index) {
							    	$table_an.bootstrapTable('hideRow', {
							    	index:index
							    	})
							    	$.ajax({
									    type: "POST",
									    url: 'index.php',
									    dataType: 'json',
									    data: {functionname: 'openRow', arguments: row.masp},

									    success: function (obj, textstatus) {
									                  if( !('error' in obj) ) {
									                      yourVariable = obj.result;
									                  }
									                  else {
									                      console.log(obj.error);
									                  }
									            }
									});
							    	alert("Đã bỏ ẩn " + row.masp + " thành công");
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
