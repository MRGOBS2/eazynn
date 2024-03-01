<?php

$username = "root";
$password = "";
$host = 'localhost:3307s';

$is_connect = mysqli_connect($host, $username, $password);
//mysql -u phpmuadmin -p -h localhost

if($is_connect){
    mysqli_select_db($is_connect,"izin_db");
    //use izin_db; di mysql
    
}else{
    echo "raiso jir";
}