<!DOCCTYPE HTML>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォームを作る</title>
        <link rel="stylesheet"type="text/css"href="home%20style.css">
        <!--目のアイコンをつけてパスワードを表示する-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
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
    
        <h1>アカウント登録画面</h1>
        
        <form method="post"action="mail_confirm.php"method="post">
           
            <div>
                <label>名前（性）</label><br><!--　最大10文字　/　初期値空白　/　ひらがな、漢字のみ　-->
                <input type="text"class="text"size="35"name="last_name"maxlength="10"pattern="^[ぁ-ん一-龠]*$"
                       value="<?php 
                              if(!empty($_POST['family_name'])){
                                  echo $_POST['family_name'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>名前（名）</label><br><!--　最大10文字　/　初期値空白　/　ひらがな、漢字のみ　-->
                <input type="text"class="text"size="35"name="first_name"maxlength="10"pattern="^[ぁ-ん一-龠]*$"
                       value="<?php 
                              if(!empty($_POST['last_name'])){
                                  echo $_POST['last_name'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>カナ（性）</label><br><!--　最大10文字　/　初期値空白　/　カタカナのみ　-->
                <input type="text"class="text"size="35"name="last_name2"maxlength="10"pattern="^[ァ-ヶｱ-ﾝﾞﾟ]+$"
                       value="<?php 
                              if(!empty($_POST['family_name_kana'])){
                                  echo $_POST['family_name_kana'];
                              }
                              ?>">
            </div>
            
             <div>
                <label>カナ（性）</label><br><!--　最大10文字　/　初期値空白　/　カタカナのみ　-->
                <input type="text"class="text"size="35"name="first_name2"maxlength="10"pattern="^[ァ-ヶｱ-ﾝﾞﾟ]+$"
                       value="<?php 
                              if(!empty($_POST['last_name_kana'])){
                                  echo $_POST['last_name_kana'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>メールアドレス</label><br> 
                <!--　最大10文字　/　初期値空白　/　半角英数字、半角ハイフン、半角記号(ハイフンとアットマーク)のみ　※「.」いらない？-->
                <input type="mail"class="text"size="35"name="mail"maxlength="100"pattern="^[0-9a-zA-Z\-\@]*$"
                       value="<?php 
                              if(!empty($_POST['mail'])){
                                  echo $_POST['mail'];
                              }
                              ?>">
            </div>
            
             <div>
                <label>パスワード</label><br><!--　最大10文字　/　初期値空白　/　半角英数字　-->
                <input type="password"class="text"size="10"name="password"maxlength="10"pattern="^[0-9A-Za-z]+$"
                       value="<?php 
                              if(!empty($_POST['password'])){
                                  echo $_POST['password'];
                              }
                              ?>">
                 <!--目のアイコンをつけてパスワードを表示する-->
                <!--<i id="eye" class="fa-solid fa-eye"></i>
                 <script>
                  let eye = document.getElementById("eye");
                  eye.addEventListener('click', function () {
                       if (this.previousElementSibling.getAttribute('type') == 'password') {
                            this.previousElementSibling.setAttribute('type', 'text');
                            this.classList.toggle('fa-eye');
                            this.classList.toggle('fa-eye-slash');
                       } else {
                            this.previousElementSibling.setAttribute('type', 'password');
                            this.classList.toggle('fa-eye');
                            this.classList.toggle('fa-eye-slash');
                       }
                  })
                 </script>-->
            </div>
            
            <div>
                <label>性別</label><br><!--初期値「男」-->
                <input type="radio" name="gender" value="男"
                       <?php if (isset($_POST['sex'])&& $_POST['sex']=="男")echo 'checked';?>>男
                <input type="radio" name="gender" value="女"
                        <?php if (isset($_POST['sex'])&& $_POST['sex']=="女")echo 'checked';?>>女
            </div>
            
            
            <div>
                <label>郵便番号</label><br><!--　最大7文字　/　初期値空白　/　半角数字のみ-->
                <input type="text"size="10"name="postal_code"maxlength="7"pattern="[0-9]+"
                       value="<?php 
                              if(!empty($_POST['post_code'])){
                                  echo $_POST['post_code'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>住所（都道府県）</label><br><!--初期値空白-->
                <select class="dropdown" name="prefecture">
                    
                    <option value=""></option>
                    <option value="北海道"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="北海道")echo 'selected';?>>北海道</option>
                    <option value="青森県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="青森県")echo 'selected';?>>青森県</option>
                    <option value="岩手県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="岩手県")echo 'selected';?>>岩手県</option>
                    <option value="宮城県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="宮城県")echo 'selected';?>>宮城県</option>
                    <option value="秋田県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="秋田県")echo 'selected';?>>秋田県</option>
                    <option value="山形県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="山形県")echo 'selected';?>>山形県</option>
                    <option value="福島県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="福島県")echo 'selected';?>>福島県</option>
                    <option value="茨城県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="茨城県")echo 'selected';?>>茨城県</option>
                    <option value="栃木県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="栃木県")echo 'selected';?>>栃木県</option>
                    <option value="群馬県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="群馬県")echo 'selected';?>>群馬県</option>
                    <option value="埼玉県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="埼玉県")echo 'selected';?>>埼玉県</option>
                    <option value="千葉県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="千葉県")echo 'selected';?>>千葉県</option>
                    <option value="東京都"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="東京都")echo 'selected';?>>東京都</option>
                    <option value="神奈川県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="神奈川県")echo 'selected';?>>神奈川県</option>
                    <option value="新潟県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="新潟県")echo 'selected';?>>新潟県</option>
                    <option value="富山県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="富山県")echo 'selected';?>>富山県</option>
                    <option value="石川県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="石川県")echo 'selected';?>>石川県</option>
                    <option value="福井県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="福島県")echo 'selected';?>>福井県</option>
                    <option value="山梨県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="山梨県")echo 'selected';?>>山梨県</option>
                    <option value="長野県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="長野県")echo 'selected';?>>長野県</option>
                    <option value="岐阜県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="岐阜県")echo 'selected';?>>岐阜県</option>
                    <option value="静岡県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="静岡県")echo 'selected';?>>静岡県</option>
                    <option value="愛知県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="愛知県")echo 'selected';?>>愛知県</option>
                    <option value="三重県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="三重県")echo 'selected';?>>三重県</option>
                    <option value="滋賀県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="滋賀県")echo 'selected';?>>滋賀県</option>
                    <option value="京都府"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="京都府")echo 'selected';?>>京都府</option>
                    <option value="大阪府"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="大阪府")echo 'selected';?>>大阪府</option>
                    <option value="兵庫県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="兵庫県")echo 'selected';?>>兵庫県</option>
                    <option value="奈良県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="奈良県")echo 'selected';?>>奈良県</option>
                    <option value="和歌山県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="和歌山県")echo 'selected';?>>和歌山県</option>
                    <option value="鳥取県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="鳥取県")echo 'selected';?>>鳥取県</option>
                    <option value="島根県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="島根県")echo 'selected';?>>島根県</option>
                    <option value="岡山県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="岡山県")echo 'selected';?>>岡山県</option>
                    <option value="広島県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="広島県")echo 'selected';?>>広島県</option>
                    <option value="山口県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="山口県")echo 'selected';?>>山口県</option>
                    <option value="徳島県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="徳島県")echo 'selected';?>>徳島県</option>
                    <option value="香川県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="香川県")echo 'selected';?>>香川県</option>
                    <option value="愛媛県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="愛知県")echo 'selected';?>>愛媛県</option>
                    <option value="高知県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="高知県")echo 'selected';?>>高知県</option>
                    <option value="福岡県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="福岡県")echo 'selected';?>>福岡県</option>
                    <option value="佐賀県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="佐賀県")echo 'selected';?>>佐賀県</option>
                    <option value="長崎県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="長崎県")echo 'selected';?>>長崎県</option>
                    <option value="熊本県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="熊本県")echo 'selected';?>>熊本県</option>
                    <option value="大分県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="大分県")echo 'selected';?>>大分県</option>
                    <option value="宮崎県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="宮崎県")echo 'selected';?>>宮崎県</option>
                    <option value="鹿児島県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="鹿児島県")echo 'selected';?>>鹿児島県</option>
                    <option value="沖縄県"<?php if (isset($_POST['prefecture'])&& $_POST['prefecture']=="沖縄県")echo 'selected';?>>沖縄県</option>
                    </select>
                
            </div>
            
            <div>
                <label>住所（市区町村）</label><br>
                 <!--　最大10文字　/　初期値空白　/　ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ　-->
                <input type="text"class="text"size="35"name="address_1"maxlength="10"pattern="^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠\-\s\0-9]*$"
                       value="<?php 
                              if(!empty($_POST['address_1'])){
                                  echo $_POST['address_1'];
                              }
                              ?>">
            </div>
            
             <div>
                <label>住所（番地）</label><br>
                 <!--　最大10文字　/　初期値空白　/　ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ　-->
                 <!--スペースのみでも送信可能になっている-->
                <input type="text"class="text"size="35"name="address_2"maxlength="10"pattern="^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠\-\s\0-9]*$"
                       value="<?php 
                              if(!empty($_POST['address_2'])){
                                  echo $_POST['address_2'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>アカウント制限</label><br><!--初期値「一般」-->
                 <select name="account">
                     <option value="一般" <?php if (isset($_POST['authority'])&& $_POST['authority']=="一般")echo 'selected';?>>一般</option>
                     <option value="管理者" <?php if (isset($_POST['authority'])&& $_POST['authority']=="管理者")echo 'selected';?>>管理者</option>
                 </select>
            </div>
            
            <div>
                <input type="submit"class="submit"value="送信する">
            </div>
        
        </form>
        
        <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
        </footer>
        
    </body>
    
</html> 
    