
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $joutei = htmlspecialchars($_POST['joutei'], ENT_QUOTES);
    $katei = htmlspecialchars($_POST['katei'], ENT_QUOTES);
    $height = htmlspecialchars($_POST['height'], ENT_QUOTES);

    $menseki = ($joutei + $katei) * $height / 2;
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
    <input type="text" name="joutei" value="">上底<br>
    <input type="text" name="katei" value="">下底<br>
    <input type="text" name="height" value="">高さ<br>
    <input type="submit" name="" value="面積計算">
  </form>
</body>
</html>