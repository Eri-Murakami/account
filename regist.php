<!DOCCTYPE HTML>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォームを作る</title>
        <link rel="stylesheet"type="text/css"href="regist%20style.css">
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
            <li> <a href="regist.php">アカウント登録</a></li>
            <li> <a href="list.php">アカウント一覧</a></li>
            </ul>
         </header>
    
        <h1>アカウント登録画面</h1>
        
        <form method="post"action="http://localhost/account/regist_confirm.php">
           
            <div>
                <label>名前(性)</label><br><!--　最大10文字　/　初期値空白　/　ひらがな、漢字のみ　-->
                <input type="text"class="text"size="35"name="family_name"maxlength="10"pattern="^[ぁ-ん一-龠]*$">
            </div>
            
             <div>
                <label>名前(名)</label><br><!--　最大10文字　/　初期値空白　/　ひらがな、漢字のみ　-->
                <input type="text"class="text"size="35"name="last_name"maxlength="10"pattern="^[ぁ-ん一-龠]*$">
            </div>
            
             <div>
                <label>カナ（性）</label><br><!--　最大10文字　/　初期値空白　/　カタカナのみ　-->
                <input type="text"class="text"size="35"name="family_name_kana"maxlength="10"pattern="^[ァ-ヶｱ-ﾝﾞﾟ]+$">
            </div>
            
             <div>
                <label>カナ(名)</label><br><!--　最大10文字　/　初期値空白　/　カタカナのみ　-->
                <input type="text"class="text"size="35"name="last_name_kana"maxlength="10"pattern="^[ァ-ヶｱ-ﾝﾞﾟ]+$">
            </div>
            
            <div>
                <label>メールアドレス</label>
                <!--　最大10文字　/　初期値空白　/　半角英数字、半角ハイフン、半角記号(ハイフンとアットマーク)のみ　※「.」いらない？-->
                <br>
                <input type="mail"class="text"size="35"name="mail"maxlength="100"pattern="^[0-9a-zA-Z\-\@]*$">
            </div>
            
             <div>
                <label>パスワード</label><br><!--　最大10文字　/　初期値空白　/　半角英数字　-->
                <input type="password"class="text"size="10"name="password"maxlength="10"pattern="^[0-9A-Za-z]+$">
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
                <input type="radio" name="gender" value="0" checked="checked">男
                <input type="radio" name="gender" value="1" >女
            </div>
            
             <div>
                <label>郵便番号</label><br><!--　最大7文字　/　初期値空白　/　半角数字のみ-->
                <input type="text"size="10"name="postal_code"maxlength="7"pattern="[0-9]+">
            </div>
            
             <div>
                <label>住所（都道府県）</label><br><!--初期値空白-->
                <select class="dropdown" name="prefecture">
                    <option value="" selected></option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                    </select>
                 
                
            </div>
            
             <div>
                <label>住所（市区町村）</label><br>
                 <!--　最大10文字　/　初期値空白　/　ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ　-->
                <input type="text"class="text"size="35"name="address_1"maxlength="10"pattern="^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠\-\s\0-9]*$">
            </div>
            
             <div>
                <label>住所（番地）</label><br>
                 <!--　　最大100文字　/　初期値空白　/　ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ　-->
                <!-- スペースのみでも送信できてしまう-->
                <input type="text"class="text"size="35"name="address_2"maxlength="100"pattern="^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠\-\s\0-9]*$">
            </div>
            
             <div>
                <label>アカウント制限</label><br><!--初期値「一般」-->
                 <select name="authority"required>
                     <option value="0"selected>一般</option>
                     <option value="1">管理者</option>
                 </select>
            </div>
            
                   
            <div>
                <input type="submit"class="submit"value="確認する">
            </div>
        
        </form>
        
        <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
        </footer>
        
    </body>
    
</html> 
    