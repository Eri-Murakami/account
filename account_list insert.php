<?php
mb_internal_encoding("utf8");

if(!empty($_POST['last_name'])&&!empty($_POST['first_name'])&&!empty($_POST['last_name2'])&&!empty($_POST['first_name2'])&&!empty($_POST['mail'])&&!empty($_POST['sex'])&&!empty($_POST['account'])&&!empty($_POST['times'])&&!empty($_POST['datat'])){
    
    $pdo = new PDO("mysql:dbname=account;host=localhost;","root","");

    $pdo->exec("insert into account(last_name,first_name,last_name2,first_name2,mail,sex,account,times,datat)values('"
               .$_POST['last_name']."','".$_POST['first_name']."','".$_POST['last_name2']."','".$_POST['mail']."','".$_POST['sex']."','".$_POST['account']."','".$_POST['times']."','".$_POST['datat']."');");
};

header("Location:http://localhost/account list/account_list index.php");

?>
