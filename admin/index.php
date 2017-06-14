<?php
	ob_start();
	session_start();
	if( !isset($_SESSION['idUser']) && ($_SESSION['idGroup']==1))
	{
		header('location: ../index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="layout.css" />
	</head>
	<body>
		<table width="1000px" align="center">
			<tr>
				<td id="hangtieude">TRANG QUẢN TRỊ</td>
			</tr>

			<tr>
				<td id="hang2"> <?php require "menu.php"; ?> </td>
			</tr>

			<tr>
				<td></td>
			</tr>
		</table>
	</body>
</html>