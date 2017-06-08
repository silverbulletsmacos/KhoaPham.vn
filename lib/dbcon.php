<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = null;
function connect()
{
    global $conn;
    if(!$conn)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'khoaphamtraining');
        mysqli_set_charset($conn, 'UTF-8');
    }
}

function close()
{
    global $conn;
    if($conn)
    {
        mysql_close($conn);
    }
}
