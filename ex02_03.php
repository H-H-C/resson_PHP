<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $suu = htmlspecialchars($_POST['suu'], ENT_QUOTES);
    $shisu = htmlspecialchars($_POST['shisu'], ENT_QUOTES);
    
    if ($shisu == 2)
    {
      $jousu = $suu * $suu;
    } 
    else 
    {
      $jousu = $suu ** 3;
    }
    echo $jousu;
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
    <input type="text" name="suu" value="">suu<br>
    <input type="text" name="shisu" value="">shisu<br>
    <input type="submit" name="" value="計算">
  </form>
</body>
</html>