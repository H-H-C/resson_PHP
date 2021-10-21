<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $a = htmlspecialchars($_POST['a'], ENT_QUOTES);
    $b = htmlspecialchars($_POST['b'], ENT_QUOTES);
    if ($a < 20) 
    {
      $b = $a;
    }
    else 
    {
      $b = $a - 20;
    }
    echo $b;
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
    <input type="text" name="a" value="">a<br>
    <!-- <input type="text" name="b" value="">b<br> -->
    <input type="submit" name="" value="計算">
  </form>
</body>
</html>