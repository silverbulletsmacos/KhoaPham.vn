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