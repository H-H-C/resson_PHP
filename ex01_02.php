<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $tate = htmlspecialchars($_POST['tate'], ENT_QUOTES);
    $yoko = htmlspecialchars($_POST['yoko'], ENT_QUOTES);
    $menseki = $tate * $yoko;
    echo $menseki;
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="tate" value="">縦<br>
    <input type="text" name="yoko" value="">横<br>
    <input type="submit" name="" value="面積計算">
  </form>
</body>
</html>