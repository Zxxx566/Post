<?php
$connect = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'PHp' );

if(!$connect){
    die('ошибка ');
}