<?php
mb_internal_encoding("utf8");

if(!empty($_POST['family_name'])&&!empty($_POST['last_name'])&&!empty($_POST['family_name_kana'])&&!empty($_POST['last_name_kana'])&&!empty($_POST['mail'])&&!empty($_POST['gender'])&&!empty($_POST['authority'])&&!empty($_POST['registered_time'])&&!empty($_POST['update_time'])){
    
    $pdo = new PDO("mysql:dbname=account;host=localhost;","root","");

    $pdo->exec("insert into account(family_name,last_name,family_name_kana,last_name_kana,mail,gender,authority,registered_times,update_time)values('"
               .$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['mail']."','".$_POST['gender']."','".$_POST['authority']."','".$_POST['registered_times']."','".$_POST['update_time']."');");
};

header("Location:http://localhost/account list/account_list index.php");

?>
