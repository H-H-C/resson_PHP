<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $x = htmlspecialchars($_POST['x'], ENT_QUOTES);
    $y = htmlspecialchars($_POST['y'], ENT_QUOTES);
    $z = $x - $y;
    if ($z >= 0) 
    {
      $z = $x;
    }
    else 
    {
      $z = $y;
    }
    echo $z;
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
    <input type="text" name="x" value="">x<br>
    <input type="text" name="y" value="">y<br>
    <input type="submit" name="" value="計算">
  </form>
</body>
</html>