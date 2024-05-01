<!DOCCTYPE HTML>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォームを作る</title>
        <link rel="stylesheet"type="text/css"href="mail_confirm%20style.css">
    </head>
    
    <body>
    
        <h1>お問い合わせフォーム</h1>
        
        <form method="post"action="mail_confirm.php"method="post">
           
            <div>
                <label>名前（性）</label><br><!--　最大10文字　/　初期値空白　/　ひらがな、漢字のみ　-->
                <input type="text"class="text"size="35"name="last name"maxlength="10"pattern="^[ぁ-ん一-龠]*$"
                       value="<?php 
                              if(!empty($_POST['last name'])){
                                  echo $_POST['last name'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>名前（名）</label><br><!--　最大10文字　/　初期値空白　/　ひらがな、漢字のみ　-->
                <input type="text"class="text"size="35"name="first name"maxlength="10"pattern="^[ぁ-ん一-龠]*$"
                       value="<?php 
                              if(!empty($_POST['first name'])){
                                  echo $_POST['first name'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>カナ（性）</label><br><!--　最大10文字　/　初期値空白　/　カタカナのみ　-->
                <input type="text"class="text"size="35"name="last name2"maxlength="10"pattern="^[ァ-ヶｱ-ﾝﾞﾟ]+$"
                       value="<?php 
                              if(!empty($_POST['last name2'])){
                                  echo $_POST['last name2'];
                              }
                              ?>">
            </div>
            
             <div>
                <label>カナ（性）</label><br><!--　最大10文字　/　初期値空白　/　カタカナのみ　-->
                <input type="text"class="text"size="35"name="first name2"maxlength="10"pattern="^[ァ-ヶｱ-ﾝﾞﾟ]+$"
                       value="<?php 
                              if(!empty($_POST['first name2'])){
                                  echo $_POST['first name2'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>メールアドレス</label><br> 
                <!--　最大10文字　/　初期値空白　/　半角英数字、半角ハイフン、半角記号(ハイフンとアットマーク)のみ　※「.」いらない？-->
                <input type="mail"class="text"size="35"name="mail"maxlength="100"pattern="^[0-9a-zA-Z\-\@]*$">
                       value="<?php 
                              if(!empty($_POST['mail'])){
                                  echo $_POST['mail'];
                              }
                              ?>">
            </div>
            
             <div>
                <label>パスワード</label><br><!--　最大10文字　/　初期値空白　/　半角英数字　-->
                <input type="password"class="text"size="10"name="password"maxlength="10"pattern="^[a-zA-Z-9]+$^">
                       value="<?php 
                              if(!empty($_POST['password'])){
                                  echo $_POST['password'];
                              }
                              ?>">
            </div>
            
    
         <!--
            <div>
                <label>年齢</label>
                <br>
                <select class="dropdown"name="age">
                    <option>選択してください</option>
                    <?php
                        $age = 0;
                        if(!empty($_POST['sex'])) {
                            $age = $_POST['sex'];
                        }
                        for ($i = 18; $i <=65; $i++) {
                            if ($i == $age) {
                                echo "<option value=".$i." selected>".$i."歳</option>";
                            } else {
                                echo "<option value=".$i.">".$i."歳</option>";
                            }
                        }
                    ?>
                </select>
            </div>-->
            -->
            
            <div>
                <label>郵便番号</label><br><!--　最大7文字　/　初期値空白　/　半角数字のみ-->
                <input type="text"size="10"name="post code"maxlength="7"pattern="[0-9]+">
                       value="<?php 
                              if(!empty($_POST['post code'])){
                                  echo $_POST['post code'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>住所（市区町村）</label><br>
                 <!--　最大10文字　/　初期値空白　/　ひらがな、漢字、数字、カタカナ、記号(ハイフンとアットマーク)のみ　-->
                <input type="text"　class="text"size="35"　name="municipalities" maxlength="10" pattern="^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠\-\s\0-9]*$">
                       value="<?php 
                              if(!empty($_POST['municipalities'])){
                                  echo $_POST['municipalities'];
                              }
                              ?>">
            </div>
            
             <div>
                <label>住所（市区町村）</label><br>
                 <!--　最大10文字　/　初期値空白　/　ひらがな、漢字、数字、カタカナ、記号(ハイフンとアットマーク)のみ　-->
                <input type="text"　class="text"size="35"　name="municipalities" maxlength="10" pattern="^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠\-\s\0-9]*$">
                       value="<?php 
                              if(!empty($_POST['municipalities'])){
                                  echo $_POST['municipalities'];
                              }
                              ?>">
            </div>
            
            <div>
                <input type="submit"class="submit"value="送信する">
            </div>
        
        </form>
        
    </body>
    
</html> 
    