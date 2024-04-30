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
    <title>お問い合わせフォームを作る</title>
    <link rel = "stylesheet"type = "text/css" href = "01_PHP%2016%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%921%20%E5%95%8F%E5%90%88%E3%82%8F%E3%81%9B%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AE%202%20style.css">

</head>
    
<body>
    <h1>お問い合わせフォーム</h1>
    
    <div class = "confirm">
        <p>お問い合わせありがとうございました。<br>３営業以内に担当よりご連絡差し上げます。
        </p>
    
    </div>
</body>

</html>