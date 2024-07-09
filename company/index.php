<?php
// 輸入 HTML 字串
echo '<h1>Hello world</h1>';

// 變數的宣告及串接
$name = 'Dragon';
echo '傳統的串接法：My name is '.$name.'<br>';
echo "簡易的串接法：My name is $name<br>";

// if 判斷性別
$sex = '男';
if($sex == '男'){
    echo "先生<br>";
}else{
    echo "小姐<br>";
}

// 直接判斷性別並串接
echo $name . (($sex=='男')?' 先生':' 小姐') . " 您好<br>";

// 指定時區
date_default_timezone_set("Asia/Taipei");
// 輸出日期
echo date('Y-m-d H:i:s').'<br>';

// 宣告陣列
$data = Array('A','B','C','E','F','G');
foreach($data as $item){
    echo $item.'<br>';
}
?>