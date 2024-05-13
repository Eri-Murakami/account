<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charet="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="mail_confirm%20style.css">
    
    <!--「登録」ボタンを押したときにアラートを出す-->
    <!--<script language="JavaScript">
        function check(){
            if(document.form.last_name.value == ""){
                alert("名前（性）が未入力です。");
                return false;
            }
        }
    </script>-->
    
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
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
       /* $errors = []; 
        if(empty($_POST['last_name'])){
            $errors[]="<font color='red'>名前（性）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['last_name'];
        /*}*/
        ?>
    </p>
    <!--getElementById …　任意のHTMLタグで指定したIDにマッチするドキュメント要素を取得するメゾット-->
    <!--validate …　立証する，正しいことを証明する，認証する，確認する-->
    <!-- innerHTML　…　HTML要素の中身を変更するのに活躍するプロパティ-->
        
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「名前（性）が未入力です。」と赤字でメッセージを出す-->
    <p id="validate_msg1" style="color: red;"></p>
        <script>
            function testCheck(){
                var test1 = document.getElementById("test1").value;
                if(test1 ==''){
                    var validate = "名前（性）が未入力です。";
                    document.getElementById("validate_msg1").innerHTML = validate; 
                    return false; 
                }
            }
        </script>
    
        
    <p>名前(名)
        <br>
        <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
       /* $errors = []; 
        if(empty($_POST['first_name'])){
            $errors[]="<font color='red'>名前（名）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['first_name'];
        /*}*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「名前（名）が未入力です。」と赤字でメッセージを出す-->
    <p id="validate_msg2" style="color: red;"></p>
        <script>
            function testCheck(){
                var test2 = document.getElementById("test2").value;
                if(test2 ==''){
                    var validate = "名前（名）が未入力です。";
                    document.getElementById("validate_msg2").innerHTML = validate; 
                    return false; 
                }
            }
        </script>
        
    
    <p>カナ（性）
        <br>
         <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
       /* $errors = []; 
        if(empty($_POST['last_name'])){
            $errors[]="<font color='red'>カナ（性）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['last_name2'];
       /* }*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「カナ（性）が未入力です。」と赤字でメッセージを出す-->
        <!--<p id="validate_msg3" style="color: red;"></p>
        <script>
            function testCheck(){
                var test3 = document.getElementById("test3").value;
                if(test3.length ==''){
                    var validate = "カナ（性）が未入力です。";
                    document.getElementById("validate_msg3").innerHTML = validate; 
                    return false; 
                }
            }
        </script>-->
        
   <!---->
        
    <p>カナ(名)
        <br>
         <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
       /* $errors = []; 
        if(empty($_POST['first_name2'])){
            $errors[]="<font color='red'>カナ（名）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['first_name2'];
       /* }*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「カナ（名）が未入力です。」と赤字でメッセージを出す-->
    <!--<p id="validate_msg4" style="color: red;"></p>
        <script>
            function testCheck(){
                var test4 = document.getElementById("test4").value;
                if(test4.length ==''){
                    var validate = "カナ（名）が未入力です。";
                    document.getElementById("validate_msg4").innerHTML = validate; 
                    return false; 
                }
            }
        </script>-->
        
    <p>メールアドレス
        <br>
         <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
        /*$errors = []; 
        if(empty($_POST['mail'])){
            $errors[]="<font color='red'>メールアドレスが未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['mail'];
        /*}*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「メールアドレスが未入力です。」と赤字でメッセージを出す-->
   <!-- <p id="validate_msg5" style="color: red;"></p>
        <script>
            function testCheck(){
                var test5 = document.getElementById("test5").value;
                if(test5.length ==''){
                    var validate = "メールアドレスが未入力です。";
                    document.getElementById("validate_msg5").innerHTML = validate; 
                    return false; 
                }
            }
        </script>-->
    
    <p>パスワード
        <br>
        <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
/*        $errors = []; 
        if(empty($_POST['password'])){
            $errors[]="<font color='red'>パスワードが未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['password'];
        /*}*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「パスワードが未入力です。」と赤字でメッセージを出す-->
   <!-- <p id="validate_msg6" style="color: red;"></p>
        <script>
            function testCheck(){
                var test6 = document.getElementById("test6").value;
                if(test6.length ==''){
                    var validate = "パスワードが未入力です。";
                    document.getElementById("validate_msg6").innerHTML = validate; 
                    return false; 
                }
            }
        </script>
        -->
    <p>性別
        <br>
        <?php echo $_POST['sex'];?>
    </p>
    
    <p>郵便番号
        <br>
         <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
       /* $errors = []; 
        if(empty($_POST['post_code'])){
            $errors[]="<font color='red'>郵便番号が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['post_code'];
        /*}*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「郵便番号が未入力です。」と赤字でメッセージを出す-->
   <!-- <p id="validate_msg7" style="color: red;"></p>
        <script>
            function testCheck(){
                var test7 = document.getElementById("test7").value;
                if(test7.length ==''){
                    var validate = "郵便番号が未入力です。";
                    document.getElementById("validate_msg7").innerHTML = validate; 
                    return false; 
                }
            }
        </script>-->
        
    <p>住所（都道府県）
        <br>
        <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
        /*$errors = []; 
        if(empty($_POST['address1'])){
            $errors[]="<font color='red'>住所（都道府県）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['address1'];
       /* }*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「都道府県が未選択です。」と赤字でメッセージを出す-->
    <!--<p id="validate_msg8" style="color: red;"></p>
        <script>
            function testCheck(){
                var test8 = document.getElementById("test8").value;
                if(test8.length ==''){
                    var validate = "都道府県が未選択です。";
                    document.getElementById("validate_msg8").innerHTML = validate; 
                    return false; 
                }
            }
        </script>-->
    
    <p>住所（市区町村）
        <br>
         <?php
        /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
        /*$errors = []; 
        if(empty($_POST['address2'])){
            $errors[]="<font color='red'>住所（市区町村）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['address2'];
       /* }*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「住所（市区町村）が未入力です。」と赤字でメッセージを出す-->
    <!--<p id="validate_msg9" style="color: red;"></p>
        <script>
            function testCheck(){
                var test9 = document.getElementById("test9").value;
                if(test9.length ==''){
                    var validate = "住所（市区町村）が未入力です。";
                    document.getElementById("validate_msg9").innerHTML = validate; 
                    return false; 
                }
            }
        </script>-->
    
      <p>住所（番地）
        <br>
         <?php
          /*「送信する」ボタンから移動してきたときに赤文字でメッセージが出る*/
        /*$errors = []; 
        if(empty($_POST['address3'])){
            $errors[]="<font color='red'>住所（番地）が未入力です。</font>";
        }
        if($errors){
            foreach($errors as $error){
                echo $error;
            }
        }else{*/
            echo $_POST['address3'];
       /* }*/
        ?>
    </p>
    <!-- 「登録する」を押したときに空白だった場合、エラーメッセージ「住所（番地）が未入力です。」と赤字でメッセージを出す-->
   <!-- <p id="validate_msg10" style="color: red;"></p>
        <script>
            function testCheck(){
                var test10 = document.getElementById("test10").value;
                if(test10.length ==''){
                    var validate = "住所（番地）が未入力です。";
                    document.getElementById("validate_msg10").innerHTML = validate; 
                    return false; 
                }
            }
        </script>-->
    
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
            
            <form name="form" action="insert.php"method="post">
                <input type = "hidden" id="test1" value = "<?php echo $_POST['last_name'];?>" name = "last_name">
                <input type = "hidden" id="test2" value = "<?php echo $_POST['first_name'];?>" name = "first_name">
                <input type = "hidden" id="test3" value = "<?php echo $_POST['last_name2'];?>" name = "last_name2">
                <input type = "hidden" id="test4" value = "<?php echo $_POST['first_name2'];?>" name = "first_name2">
                <input type = "hidden" id="test5" value = "<?php echo $_POST['mail'];?>" name = "mail">
                <input type = "hidden" id="test6" value = "<?php echo $_POST['password'];?>" name = "password">
                <input type = "hidden" value = "<?php echo $_POST['sex'];?>" name = "sex">
                <input type = "hidden" id="test7" value = "<?php echo $_POST['post_code'];?>" name = "post_code">
                <input type = "hidden" id="test8"value = "<?php echo $_POST['address1'];?>" name = "address1">
                <input type = "hidden" id="test9" value = "<?php echo $_POST['address2'];?>" name = "address2">
                <input type = "hidden" id="test10" value = "<?php echo $_POST['address3'];?>" name = "address3">
                <input type = "hidden" value = "<?php echo $_POST['account'];?>" name = "account">
                
                <!--onclick …　要素がクリックされた際に発生するイベントの処理を設定するための属性--> 
                <input type="submit"class="button2" onclick="return testCheck()" value="登録する">
               
            </form>
            
         

        </div>
       
    </div>
        
    <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
    </footer>
    
</body>
</html>