<?php

$name = $_POST['name'];
$title = $_POST['title'];
$address = $_POST['address'];
$message = $_POST['message'];


if (!isset($name) || $name === "") {
  echo "<p style='color:red;'>名前が入力されておりません。</p>";
}

if (!isset($title) || $title === "") {
  echo "<p style='color:red;'>件名が入力されておりません。</p>";
}

if (!isset($address) || $address === "") {
  echo "<p style='color:red;'>メールアドレスが入力されておりません。</p>";
}

if (!isset($message ) || $message  === "") {
  echo "<p style='color:red;'>本文が入力されておりません。</p>";
}

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
<h1>確認ページ</h1>
<p>お名前：<?php echo htmlspecialchars($name, ENT_QUOTES, 'utf-8'); ?></p>
<p>件名：<?php echo htmlspecialchars($title, ENT_QUOTES, 'utf-8'); ?></p>
<p>メールアドレス：<?php echo htmlspecialchars($address, ENT_QUOTES, 'utf-8'); ?></p>
<p>本文：<?php echo htmlspecialchars($message, ENT_QUOTES, 'utf-8'); ?><br />
<form action="thanks.php" method="post">
  <p><input type="hidden" name="name" value="<?php echo $name; ?>"></p>
  <p><input type="hidden" name="title" value="<?php echo $title; ?>"></p>
  <p><input type="hidden" name="address" value="<?php echo $address; ?>"></p>
  <p><input type="hidden" name="message" value="<?php echo $message; ?>"></p>
  <p><input type="submit" value="送信する"></p>
  <a href="index.php">入力画面へ戻る</a>
</form>
</form>
</body>
</html>