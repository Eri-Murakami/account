<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charet="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="mail_confirm%20style.css">
</head>
    
<body>
    <h1>お問い合わせ内容確認</h1>
    
    <div class="confirm">
    <p>名前(性)
        <br>
        <?php echo $_POST['last name'];?>
    </p>
        
    <p>名前(名)
        <br>
        <?php echo $_POST['first name'];?>
    </p>
    
    <p>カナ（性）
        <br>
        <?php echo $_POST['last name2'];?>
    </p>
        
    <p>カナ(名)
        <br>
        <?php echo $_POST['first name2'];?>
    </p>
        
    <p>メールアドレス
        <br>
        <?php echo $_POST['mail'];?>
    </p>
    
    <p>パスワード
        <br>
        <?php echo $_POST['password'];?>
    </p>
        
    <p>性別
        <br>
        <?php echo $_POST['sex'];?>
    </p>
    
    <p>郵便番号
        <br>
        <?php echo $_POST['post code'];?>
    </p>
    
    <p>住所（都道府県）
        <br>
        <?php echo $_POST['prefectures'];?>
    </p> 
    
    <p>住所（市区町村）
        <br>
        <?php echo $_POST['municipalities'];?>
    </p>
    
      <p>住所（番地）
        <br>
        <?php echo $_POST['street address'];?>
    </p> 
    
      <p>アカウント制限
        <br>
        <?php echo $_POST['account'];?>
    </p> 
        
        <div class="button">
            <form action="return index.php"method="post">
                <input type="submit"class="button1"value="前に戻る">
                <input type = "hidden" value = "<?php echo $_POST['name'];?>" name = "name">
                <input type = "hidden" value = "<?php echo $_POST['mail'];?>" name = "mail">
                <input type = "hidden" value = "<?php echo $_POST['age'];?>" name = "age">
                <input type = "hidden" value = "<?php echo $_POST['comments'];?>" name = "comments">
            </form>
            
            <form action="insert.php"method="post">
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