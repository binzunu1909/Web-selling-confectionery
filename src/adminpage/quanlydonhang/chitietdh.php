<? php
if (isset($_POST['madonhang'])){
	$madonhang = $_POST['madonhang'];
	//$madonhang = "DH0001";
	$conn = mysqli_connect('localhost', 'root', '', 'doan');
	mysqli_set_charset($conn, 'UTF8');
	$result = mysqli_query($conn, "SELECT *  FROM chitietdonhang, sanpham WHERE madonhang = '$madonhang' AND sanpham.masp = chitietdonhang.masp");
	$emparray = array();
	while($row =mysqli_fetch_assoc($result))
	{
	    $emparray[] = $row;
	}
	//print_r(json_encode($emparray));
	//echo "34234324";
	//die(json_encode($emparray));
	echo json_encode($emparray);
}
else{
	$madonhang = "DH0001";
	$conn = mysqli_connect('localhost', 'root', '', 'doan');
	mysqli_set_charset($conn, 'UTF8');
	$result = mysqli_query($conn, "SELECT *  FROM chitietdonhang, sanpham WHERE madonhang = '$madonhang' AND sanpham.masp = chitietdonhang.masp");
	$emparray = array();
	while($row =mysqli_fetch_assoc($result))
	{
	    $emparray[] = $row;
	}

	//print_r(json_encode($emparray));
	//echo "645654";
	//die(json_encode($emparray));
	echo json_encode($emparray);
}
?>
