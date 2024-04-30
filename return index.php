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
                <label>名前</label><br>
                <input type="text"class="text"size="35"name="name"
                       value="<?php 
                              if(!empty($_POST['name'])){
                                  echo $_POST['name'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>メールアドレス</label>
                <br>
                <input type="text"class="text"size="35"name="mail"
                       value="<?php 
                              if(!empty($_POST['mail'])){
                                  echo $_POST['mail'];
                              }
                              ?>">
            </div>
            
            <div>
                <label>年齢</label>
                <br>
                <select class="dropdown"name="age">
                    <option>選択してください</option>
                    <?php
                        $age = 0;
                        if(!empty($_POST['age'])) {
                            $age = $_POST['age'];
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
            </div>
            
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35"rows="7"name="comments"><?php 
                    if(!empty($_POST['comments'])){
                        echo $_POST['comments'];
                    }
                    ?>
                s
                </textarea>
            </div>
            
            <div>
                <input type="submit"class="submit"value="送信する">
            </div>
        
        </form>
        
    </body>
    
</html> 
    