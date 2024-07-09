<?php
// 引入資料庫連線語法
include('conn/conn.php');

$id = $_GET['id'];

if($conn){
    $sql = "SELECT * FROM news WHERE id = $id";
    $table = mysqli_query($conn, $sql);
    // var_dump($table);
    $row = mysqli_fetch_assoc($table);
    // echo $row['title'];
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

    <title>編輯新聞</title>
  </head>
  <body class="">

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <form method="post" action="news-update.php" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="title" class="form-label">新聞標題</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="<?=$row['title']?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="content" class="form-label">新聞內容</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required><?=$row['content']?></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="photo" class="form-label">焦點圖片</label>
                    <input class="form-control" type="file" id="photo" name="photo" multiple accept=".jpg, .png, .jpeg, .gif, .webp">
                  </div>
                  <div class="mb-3">
                    <label for="date" class="form-label">發佈日期</label>
                    <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp" value="<?=$row['date']?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="poster" class="form-label">發佈人</label>
                    <input type="text" class="form-control" id="poster" name="poster" aria-describedby="emailHelp" value="<?=$row['poster']?>" required>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="state" name="state" <?php if($row['state']=='上線') echo 'checked' ?>>
                    <label class="form-check-label" for="state">上線</label>
                  </div>
                  <input type="hidden" name="id" value="<?=$row['id']?>">
                  <input type="hidden" name="photo_name" value="<?=$row['photo']?>">
                  <button type="submit" class="btn btn-primary">儲存新聞</button>
                </form>
            </div>
        </div>
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
