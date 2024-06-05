<?php
mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:dbname=account;host=localhost;","root","");

$pdo->exec("insert into account(family_name,last_name,family_name_kasa,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');");

?>

<!doctype HTML>
<html lang = "ja">

<head>

    <meta charset = "utf-8">
    <title>アカウント登録完了画面</title>
    <link rel = "stylesheet"type = "text/css" href="insert%20style.css">

</head>
    
<body>
    <form action="diblog index .html"method="post">
    <h1>アカウント登録画面</h1>
    <p>登録完了しました</p>
        <input type="submit"class="button1"value="TOPページに戻る">
    </form>
</body>

</html>