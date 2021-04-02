<?php
  //接続情報
  const DSN = "mysql:dbname=test;host=127.0.0.1";
  const USER = "user1";
  const PASSWORD ="password123";
?>

$dbh = new PDO(DSN, USER, PASSWORD);

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録完了画面</title>
</head>
<body>
  <h1>登録が完了しました！</h1>
</body>
</html>