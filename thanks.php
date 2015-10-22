<?php

mb_language("ja");
mb_internal_encoding('UTF-8');

$name = $_POST['name'];
$title = $_POST['title'];
$address = $_POST['address'];
$message = $_POST['message'];

//初期化
$sTo          = '';
$sFromMail    = '';
$sSubject     = '';
$sMessage     = '';
$sHeaders     = '';

//送信先
$sTo          = 'daiexile@yahoo.co.jp';
//送信元
$sFromMail    = 'yamapoon24@gmail.com';
//題
$sSubject     = '【件名】メール送信テスト';
//ヘッダー
$sHeaders     = "From: {$sFromMail}\r\n";
//$sHeaders .= 'Return-Path: yamapoon24@gmail.com';
//本文
$sMessage .= "名前：".$name."\n"."件名：".$title."\n"."メールアドレス：".$address."\n"."本文：".$message;

//送信処理
if(mb_send_mail($sTo, $sSubject, $sMessage, $sHeaders)){
    echo 'メール送信に成功致しました。<br/>';
} else {
    echo 'メール送信に失敗致しました。<br/>';
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
<h1>お問い合わせいただき、ありがとうございました！</h1>
</body>
</html>