<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charet="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="mail_confirm%20style.css">
</head>
    <body>
        <img src="diblog_logo.jpg"width=20%> 
        <header>
           <div class="menu">トップ</div>
            <ul>
            <li>プロフィール</li>
            <li>D.l.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
                <li> <a href="home%20index.html">アカウント登録</a></li>
            </ul>
         </header>
    
    <h1>お問い合わせ内容確認</h1>
    
    <div class="confirm">
    <p>名前(性)
        <br>
        <?php
        $errors = []; 
        if(empty($_POST['last_name'])){
            $errors[]="<font color='red'>名前（性）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['last_name'];
        }
        ?>
    </p>
        
    <p>名前(名)
        <br>
        <?php
        $errors = []; 
        if(empty($_POST['first_name'])){
            $errors[]="<font color='red'>名前（名）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['first_name'];
        }
        ?>
    </p>
    
    <p>カナ（性）
        <br>
         <?php
        $errors = []; 
        if(empty($_POST['last_name'])){
            $errors[]="<font color='red'>カナ（性）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['last_name'];
        }
        ?>
    </p>
        
    <p>カナ(名)
        <br>
         <?php
        $errors = []; 
        if(empty($_POST['first_name2'])){
            $errors[]="<font color='red'>カナ（名）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['first_name2'];
        }
        ?>
    </p>
        
    <p>メールアドレス
        <br>
         <?php
        $errors = []; 
        if(empty($_POST['mail'])){
            $errors[]="<font color='red'>メールアドレスが未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['mail'];
        }
        ?>
    </p>
    
    <p>パスワード
        <br>
        <?php
        $errors = []; 
        if(empty($_POST['password'])){
            $errors[]="<font color='red'>パスワードが未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['password'];
        }
        ?>
    </p>
        
    <p>性別
        <br>
        <?php echo $_POST['sex'];?>
    </p>
    
    <p>郵便番号
        <br>
         <?php
        $errors = []; 
        if(empty($_POST['post_code'])){
            $errors[]="<font color='red'>郵便番号が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['post_code'];
        }
        ?>
    </p>
    
    <p>住所（都道府県）
        <br>
        <?php
        $errors = []; 
        if(empty($_POST['address1'])){
            $errors[]="<font color='red'>住所（都道府県）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['address1'];
        }
        ?>
    </p> 
    
    <p>住所（市区町村）
        <br>
         <?php
        $errors = []; 
        if(empty($_POST['address2'])){
            $errors[]="<font color='red'>住所（市区町村）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['address2'];
        }
        ?>
    </p>
    
      <p>住所（番地）
        <br>
         <?php
        $errors = []; 
        if(empty($_POST['address3'])){
            $errors[]="<font color='red'>住所（番地）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            echo $_POST['address3'];
        }
        ?>
    </p> 
    
      <p>アカウント制限
        <br>
         <?php echo $_POST['account'];?>
    </p> 
        
        <div class="button">
            <form action="return_index.php"method="post">
                <input type="submit"class="button1"value="前に戻る">
                 <input type = "hidden" value = "<?php echo $_POST['last_name'];?>" name="last_name">
                <input type = "hidden" value = "<?php echo $_POST['first_name'];?>" name="first_name">
                <input type = "hidden" value = "<?php echo $_POST['last_name2'];?>" name="last_name2">
                <input type = "hidden" value = "<?php echo $_POST['first_name2'];?>" name="first_name2">
                <input type = "hidden" value = "<?php echo $_POST['mail'];?>" name="mail">
                <input type = "hidden" value = "<?php echo $_POST['password'];?>" name="password">
                <input type = "hidden" value = "<?php echo $_POST['sex'];?>" name="sex">
                <input type = "hidden" value = "<?php echo $_POST['post_code'];?>" name="post_code">
                <input type = "hidden" value = "<?php echo $_POST['address1'];?>" name="address1">
                <input type = "hidden" value = "<?php echo $_POST['address2'];?>" name="address2">
                <input type = "hidden" value = "<?php echo $_POST['address3'];?>" name="address3">
                <input type = "hidden" value = "<?php echo $_POST['account'];?>" name="account">
            </form>
            
            <form action="insert.php"method="post">
                <input type="submit"class="button2"value="登録する">
                <input type = "hidden" value = "<?php echo $_POST['last_name'];?>" name = "last_name">
                <input type = "hidden" value = "<?php echo $_POST['first_name'];?>" name = "first_name">
                <input type = "hidden" value = "<?php echo $_POST['last_name2'];?>" name = "last_name2">
                <input type = "hidden" value = "<?php echo $_POST['first_name2'];?>" name = "first_name2">
                <input type = "hidden" value = "<?php echo $_POST['mail'];?>" name = "mail">
                <input type = "hidden" value = "<?php echo $_POST['password'];?>" name = "password">
                <input type = "hidden" value = "<?php echo $_POST['sex'];?>" name = "sex">
                <input type = "hidden" value = "<?php echo $_POST['post_code'];?>" name = "post_code">
                <input type = "hidden" value = "<?php echo $_POST['address1'];?>" name = "address1">
                <input type = "hidden" value = "<?php echo $_POST['address2'];?>" name = "address2">
                <input type = "hidden" value = "<?php echo $_POST['address3'];?>" name = "address3">
                <input type = "hidden" value = "<?php echo $_POST['account'];?>" name = "account">
            </form>
        </div>
       
    </div>
        
    <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
    </footer>
    
</body>
</html>