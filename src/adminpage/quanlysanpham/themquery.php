<?php
	$conn = mysqli_connect('localhost', 'root', '', 'doan');

	$sql = "INSERT INTO sanpham (masp, tensp, maloaisp, giasp, motasp) VALUES (sp000001, " + $_POST["tensp"] + ", " + $_POST["loaisp"] + ", " +  $_POST["giasp"] + ", " + $_POST["motasp"] + ")";

	if ($conn->query($sql) === TRUE){
		alert('Thêm Sản Phẩm thành công');
	}
	else{
		alert('Thêm Sản Phẩm thất bại');
	}
?>