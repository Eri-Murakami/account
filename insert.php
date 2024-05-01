<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)values
('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!doctype HTML>
<html lang = "ja">

<head>

    <meta charset = "utf-8">
    <title>アカウント登録完了画面</title>
    <link rel = "stylesheet"type = "text/css" href = "01_PHP%2016%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%921%20%E5%95%8F%E5%90%88%E3%82%8F%E3%81%9B%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AE%202%20style.css">

</head>
    
<body>
    <h1>登録完了しました</h1>
    
      <div>
                <input type="submit"class="submit"value="TOPページへ戻る">
            </div>
</body>

</html>