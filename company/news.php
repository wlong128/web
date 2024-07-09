<?php
// 引入資料庫連線語法
include('conn/conn.php');

if($conn){
    $sql = "SELECT * FROM news ORDER BY news.id DESC";
    $table = mysqli_query($conn, $sql);
    // var_dump($table);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>新聞列表</title>
  </head>
  <body class="">
    
    <div class="container">
        <table class="table">
            <tr>
                <td>id</td>
                <td>title</td>
                <!-- <td>content</td> -->
                <td>photo</td>
                <td>date</td>
                <td>poster</td>
                <td>state</td>
                <td>function</td>
            </tr>
            <?php
                // 將表格內容逐筆輸出
                while($row = mysqli_fetch_assoc($table)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['title']."</td>";
                    // echo "<td>".$row['content']."</td>";
                    echo '<td><img class="img-fluid" src="upload/'.$row['photo'].'"></td>';
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$row['poster']."</td>";
                    echo "<td>".$row['state']."</td>";
                    // echo '<td><a class="btn btn-success" href="news-content.php?id=1">預覽</a></td>';
                    echo '<td>';
                    echo '<a class="btn btn-success" href="news-content.php?id='.$row['id'].'">預覽</a>';
                    echo '<a class="btn btn-info" href="news-edit.php?id='.$row['id'].'">編輯</a>';
                    echo '<a class="btn btn-danger" onclick="if(!confirm(\'確定要刪除?\')) return false" href="news-delete.php?id='.$row['id'].'">刪除</a>';
                    echo '</td>';
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>
