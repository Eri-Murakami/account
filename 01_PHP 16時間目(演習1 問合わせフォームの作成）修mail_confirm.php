<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charet="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="01_PHP%2016%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%921%20%E5%95%8F%E5%90%88%E3%82%8F%E3%81%9B%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AE%202%20style.css">
</head>
    
<body>
    <h1>お問い合わせ内容確認</h1>
    
    <div class="confirm">
    <p>お問い合わせ内容はこちらで　宜しいでしょうか？
        <br>よろしければ「送信　する」ボタンを押して下さい。
    </p>
    <p>名前
        <br>
        <?php echo $_POST['name'];?>
    </p>
    
    <p>メールアドレス
        <br>
        <?php echo $_POST['mail'];?>
    </p>
        
    <p>年齢
        <br>
        <?php echo $_POST['age']."歳";?>
    </p>
    
    <p>コメント
        <br>
        <?php echo $_POST['comments'];?>
    </p>      
        <div class="button">
            <form action="01_PHP%2016%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%921%20%E5%95%8F%E5%90%88%E3%82%8F%E3%81%9B%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AE2index.php"method="post">
                <input type="submit"class="button1"value="戻って修正する">
                <input type = "hidden" value = "<?php echo $_POST['name'];?>" name = "name">
                <input type = "hidden" value = "<?php echo $_POST['mail'];?>" name = "mail">
                <input type = "hidden" value = "<?php echo $_POST['age'];?>" name = "age">
                <input type = "hidden" value = "<?php echo $_POST['comments'];?>" name = "comments">
            </form>
            
            <form action="01_PHP%2016%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%921%20%E5%95%8F%E5%90%88%E3%82%8F%E3%81%9B%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AEinsert.php"method="post">
                <input type="submit"class="button2"value="登録する">
                <input type = "hidden" value = "<?php echo $_POST['name'];?>" name = "name">
                <input type = "hidden" value = "<?php echo $_POST['mail'];?>" name = "mail">
                <input type = "hidden" value = "<?php echo $_POST['age'];?>" name = "age">
                <input type = "hidden" value = "<?php echo $_POST['comments'];?>" name = "comments">
            </form>
        </div>
       
    </div>
</body>
</html>