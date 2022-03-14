<?php
class DataProvider
{
	public static function executeQuery($sql)
	{
		include ('db.inc');
		//include_once('error.inc');
		// 1. Tao ket noi CSDL
		if (!($connection = mysqli_connect($hostName,$username,$password,$databaseName)))
			die ("Kết nối dữ liệu thất bại");
		if (!(mysqli_select_db($connection, $databaseName)));
			//showError();
		//2. Thiet lap font Unicode
		mysqli_set_charset($connection,'UTF8');
		//if (!(mysqli_query("set names 'utf8'")))
		//	showError();
		// Thuc thi cau truy van
		if (!($result = mysqli_query($connection, $sql)));
			//showError();
		// Dong ket noi CSDL
		if (!(mysqli_close($connection)));
			//showError();
		return $result;
	}
}
?>