<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<script src="./js/canvasjs.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<?php
	$conn = mysqli_connect('localhost', 'root', '', 'doan');
	mysqli_set_charset($conn, 'UTF8');
	$result = mysqli_query($conn, 'SELECT ngaydatdon FROM donhang GROUP BY ngaydatdon');
	
	while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row['ngaydatdon'];
		$year = (int)explode("-",$row['ngaydatdon'])[0];
		$month = (int)explode("-",$row['ngaydatdon'])[1];
        $result_2 = mysqli_query($conn, "SELECT COUNT(*) FROM `donhang` WHERE MONTH(ngaydatdon) = $month AND YEAR(ngaydatdon) = $year");
        	while($row_2 =mysqli_fetch_assoc($result_2))
    		{
        		$emparray_2[] = $row_2['COUNT(*)'];
        	}
        //print_r($emparray);
        //print_r($emparray_2);
    }
    //for ($i=0; $i < count($emparray); $i++){
   	//	print_r((int)explode("-",$emparray[0])[0]);
   	//	print_r((int)explode("-",$emparray[0])[1]);
   	//	print_r((int)explode("-",$emparray[0])[2]);
   	//}
?>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("doanhthu-chart", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Biểu Đồ Về Số Đơn Hàng "
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "spline",
      	indexLabelFontSize: 16,
      	showInLegend: true,
		name: "Đơn Hàng",
		xValueFormatString: "MM, YYYY",
		color: "#F08080",
		dataPoints: [
			<?php
			/*{ x: new Date(2017, 0, 1), y: 650 },
			{ x: new Date(2017, 1, 1), y: 700 },
			{ x: new Date(2017, 2, 1), y: 710 },
			{ x: new Date(2017, 3, 1), y: 658 },
			{ x: new Date(2017, 4, 1), y: 734 },
			{ x: new Date(2017, 5, 1), y: 963 },
			{ x: new Date(2017, 6, 1), y: 847 },
			{ x: new Date(2017, 7, 1), y: 853 },
			{ x: new Date(2017, 8, 1), y: 869 },
			{ x: new Date(2017, 9, 1), y: 943 },
			{ x: new Date(2017, 10, 1), y: 970 },
			{ x: new Date(2017, 11, 1), y: 869 },
			{ x: new Date(2018, 0, 1), y: 890 },
			{ x: new Date(2018, 1, 1), y: 930 }*/
			for ($i=0; $i < count($emparray) - 1; $i++){
				$year = (int)explode("-",$emparray[$i])[0];
				$month = (int)explode("-",$emparray[$i])[1];
				$value = $emparray_2[$i];
		   		echo "{ x: new Date($year, $month, 1), y: $value },";
		   	}
		   	$j = count($emparray) - 1;
		   	$year = (int)explode("-",$emparray[$j])[0];
			$month = (int)explode("-",$emparray[$j])[1];
			$value = $emparray_2[$j];
	   		echo "{ x: new Date($year, $month, 1), y: $value }";
			?>
		]
	}]
});
chart.render();

}
</script>

</head>

<body>
	<?php
		include("sidebar.php");
	?>
		
	<div id = "main-side" class="col-sm-8 col-sm-offset-4 col-lg-9 col-lg-offset-3 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Tổng Quan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tổng Quan</h1>
			</div>
		</div><!--/.row-->
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'doan');
			mysqli_set_charset($conn, 'UTF8');

			$result = mysqli_query($conn, 'SELECT COUNT(*) FROM donhang');
			$sl_donhang = mysqli_fetch_assoc($result)['COUNT(*)'];

			$result = mysqli_query($conn, 'SELECT COUNT(*) FROM sanpham');
			$sl_sanpham = mysqli_fetch_assoc($result)['COUNT(*)'];

			$result = mysqli_query($conn, 'SELECT COUNT(*) FROM taikhoan');
			$sl_khachhang = mysqli_fetch_assoc($result)['COUNT(*)'];

			$result = mysqli_query($conn, 'SELECT SUM(tongtien) FROM donhang');
			$sl_doanhthu = mysqli_fetch_assoc($result)['SUM(tongtien)'];
			
			for ($x = strlen($sl_doanhthu) - 3; $x > 0; $x -= 3) {
				$sl_doanhthu = substr_replace($sl_doanhthu, ",", $x, 0);
			}


			echo "
			<div class=\"row\">
				<div class=\"col-xs-12 col-md-6 col-lg-3\">
					<div class=\"panel panel-blue panel-widget \">
						<div class=\"row no-padding\">
							<div class=\"col-sm-3 col-lg-5 widget-left\">
								<em class=\"glyphicon glyphicon-shopping-cart glyphicon-l\"></em>
							</div>
							<div class=\"col-sm-9 col-lg-7 widget-right\">
								<div class=\"large\">$sl_donhang</div>
								<div class=\"text-muted\">Đơn Hàng</div>
							</div>
						</div>
					</div>
				</div>
			<div class=\"col-xs-12 col-md-6 col-lg-3\">
				<div class=\"panel panel-orange panel-widget\">
					<div class=\"row no-padding\">
						<div class=\"col-sm-3 col-lg-5 widget-left\">
							<em class=\"glyphicon glyphicon-leaf glyphicon-l\"></em>
						</div>
						<div class=\"col-sm-9 col-lg-7 widget-right\">
							<div class=\"large\">$sl_sanpham</div>
							<div class=\"text-muted\">Sản Phẩm</div>
						</div>
					</div>
				</div>
			</div>
			<div class=\"col-xs-12 col-md-6 col-lg-3\">
				<div class=\"panel panel-teal panel-widget\">
					<div class=\"row no-padding\">
						<div class=\"col-sm-3 col-lg-5 widget-left\">
							<em class=\"glyphicon glyphicon-user glyphicon-l\"></em>
						</div>
						<div class=\"col-sm-9 col-lg-7 widget-right\">
							<div class=\"large\">$sl_khachhang</div>
							<div class=\"text-muted\">Khách Hàng</div>
						</div>
					</div>
				</div>
			</div>
			<div class=\"col-xs-12 col-md-6 col-lg-3\">
				<div class=\"panel panel-red panel-widget\">
					<div class=\"row no-padding\">
						<div class=\"col-sm-3 col-lg-5 widget-left\">
							<em class=\"glyphicon glyphicon-stats glyphicon-l\"></em>
						</div>
						<div class=\"col-sm-9 col-lg-7 widget-right\">
							<div class=\"large\" style = \"font-size: 16px\";>$sl_doanhthu ₫</div>
							<div class=\"text-muted\">Doanh Thu</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->";
		?>	
		
		
		<div id="doanhthu-chart" style="height: 200; width: 600;"></div>
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
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
