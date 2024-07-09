<?php
// 設定連線資料庫的參數
$db_server = 'localhost';
$db_user = 'company';
$db_pw = '1234';
$db_name = 'company';

// 連線資料庫，並將結果儲存於 $conn 中
$conn = mysqli_connect($db_server,$db_user,$db_pw,$db_name);
?>