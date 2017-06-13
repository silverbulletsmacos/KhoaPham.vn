<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function tinmoinhat_mottin()
{
    global $conn;
    connect();
    $sql = "select * from tin order by idTin desc limit 0,1";
    return mysqli_query($conn, $sql);
}

function tinmoinhat_namtin()
{
    global $conn;
    connect();
    $sql = "select * from tin order by idTin desc limit 1,5";
    return mysqli_query($conn, $sql);
}

function tinxemnhieunhat()
{
	global $conn;
	connect();
	$sql = "
	select * from tin 
	order by SoLanXem desc 
	limit 0,7
	";
	return mysqli_query($conn, $sql);
}

function tinmoinhat_theoloai_mottin($idLT)
{
    global $conn;
    connect();
    $sql = "
    	select * from tin,loaitin
    	where tin.idLT = $idLT and tin.idLT = loaitin.idLT
    	order by idTin desc 
    	limit 0,1
    ";
    return mysqli_query($conn, $sql);
}

function tinmoinhat_theoloai_namtin($idLT)
{
    global $conn;
    connect();
    $sql = "
    select * from tin 
    where idLT = $idLT
    order by idTin desc 
    limit 1,5
    ";
    return mysqli_query($conn, $sql);
}

function quangcao($vitri)
{
	global $conn;
	connect();
	$sql = " 
	select * from quangcao
	where vitri = $vitri
	";
	return mysqli_query($conn, $sql);
}

function danhsachtheloai()
{
	global $conn;
	connect();
	$sql = "select * from theloai ";
	return mysqli_query($conn, $sql);
}

function danhsachloaitin_theo_theloai($idTL)
{
	global $conn;
	connect();
	$sql = "select * from loaitin where idTL = $idTL";
	return mysqli_query($conn, $sql);
}

function tinmoinhat_cottrai($idTL)
{
	global $conn;
	connect();
	$sql = "
	select * from tin
	where idTL = $idTL
	order by idTin desc
	limit 0,1
	";
	return mysqli_query($conn, $sql);
}

function tinmoinhat_cotphai($idTL)
{
	global $conn;
	connect();
	$sql = "
	select * from tin
	where idTL = $idTL
	order by idTin desc
	limit 1,2
	";
	return mysqli_query($conn, $sql);
}

function tintheoloaitin($idLT)
{
	global $conn;
	connect();
	$sql = "select * from tin where idLT = $idLT order by idTin desc ";
	return mysqli_query($conn, $sql);

}

function tintheoloaitin_phantrang($idLT, $from, $sotin1trang)
{
	global $conn;
	connect();
	$sql = "
	select * 
	from tin 
	where idLT = $idLT 
	order by idTin desc 
	limit $from, $sotin1trang";
	return mysqli_query($conn, $sql);

}

function breadcrumb($idLT)
{
	global $conn;
	connect();
	$sql = "
	select TenTL, Ten 
	from theloai, loaitin  
	where theloai.idTL = loaitin.idTL and idLT = $idLT;
	";
	return mysqli_query($conn, $sql);
}

function chitiettin($idTin)
{
	global $conn;
	connect();
	$sql = "
	select * from tin
	where idTin = $idTin
	";
	return mysqli_query($conn, $sql);
}
function tincungloai($idTin, $idLT)
{
	global $conn;
	connect();
	$sql = "
	select * from tin
	where idTin <> $idTin and idLT = $idLT
	order by rand()
	limit 0,3
	";
	return mysqli_query($conn, $sql);
}

function capnhatsolanxemtin($idTin)
{
	global $conn;
	connect();
	$sql = "
	update tin
	set SoLanXem = SoLanXem + 1
	where idTin = $idTin
	";
	mysqli_query($conn, $sql);
}

function timkiem($tukhoa)
{
	global $conn;
	connect();
	$sql = "
	select * from tin
	where TieuDe REGEXP '$tukhoa'
	order by idTin desc
	";
	return mysqli_query($conn, $sql);
}





