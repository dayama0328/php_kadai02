<?php

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>[課題]PHP基礎編(2)</title>
  <link rel="stylesheet" href="">
</head>
<body>
<h1>お問い合わせフォーム</h1>
<form action="confirm.php" method="post">
  <p>お名前：<input type="text" name="name" value=""></p>
  <p>件名：<input type="text" name="title" value=""></p>
  <p>メールアドレス：<input type="text" name="address" value=""></p>
  <p>本文：</p><textarea name="message" cols="50" rows="10"></textarea><br />
<input type="submit" value="確認ページへ進む">
</form>
</body>
</html>