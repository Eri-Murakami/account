<?php
mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:dbname=account;host=localhost;","root","");

$pdo->exec("insert into account(last_name,first_name,last_name2,first_name2,mail,password,sex,post_code,address1,address2,address3,account)
values('".$_POST['last_name']."','".$_POST['first_name']."','".$_POST['last_name2']."','".$_POST['first_name2']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['sex']."','".$_POST['post_code']."','".$_POST['address1']."','".$_POST['address2']."','".$_POST['address3']."','".$_POST['account']."');");

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