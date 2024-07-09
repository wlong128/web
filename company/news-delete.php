<?php
// 引入資料庫連線語法
include('conn/conn.php');

$id = $_GET['id'];

if($conn){
    $sql = "DELETE FROM news WHERE news.id = $id";
    mysqli_query($conn, $sql);
    header('location: news.php');
}
?>