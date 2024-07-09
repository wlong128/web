<?php
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];
$poster = $_POST['poster'];
$state = '下線';
$photo_name = $_POST['photo_name'];
// 判斷 check box 的資料轉換
if(isset($_POST['state']) and $_POST['state']=='on'){
    $state = '上線';
}

// 資料展示
// echo $title.'<br>';
// echo $content.'<br>';
// echo $date.'<br>';
// echo $poster.'<br>';
// echo $state.'<br>';

// 圖片處理
$photo = $_FILES['photo']['name'];
$size = $_FILES['photo']['size'];
$type = $_FILES['photo']['type'];
$temp = $_FILES['photo']['tmp_name'];
// echo $photo.'<br>';
// echo $size.'<br>';
// echo $type.'<br>';
// echo $temp.'<br>';
// 產生新檔名
$sub = explode('.',$_FILES['photo']['name']);
// var_dump($sub);
$photo = date('Ymdhis') . '.' . $sub[count($sub)-1];
// echo $photo.'<br>';

// 將暫存檔案從暫存位置移至指定的upload資料夾內,並改成新檔名
if($_FILES['photo']['name']){
    move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $photo);
}else{
    $photo = $photo_name;
}


// 引入資料庫連線語法
include('conn/conn.php');

// var_dump($conn);

if($conn) {
    // 組合 SQL 字串
    $sql = "UPDATE news SET title = '$title', content = '$content', photo = '$photo', date = '$date', poster = '$poster', state = '$state' WHERE news.id = $id";
    // echo $sql;
    // 執行 SQL 命令
    mysqli_query($conn, $sql);
    // 轉址
    header('location: news.php');
}


?>