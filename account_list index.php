<!DOCTYPE html>
<html lang="jp">
    <head>
       
        <meta charset="UTF-8">
        <title>アカウント一覧画面</title>
        <link rel="stylesheet"type="text/css"href="account_list%20style%20.css">
    
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
            <li> <a href="http://localhost/account/account_list%20index.php">アカウント一覧</a></li>
            </ul>
         </header>
        
             <h1>アカウント一覧画面</h1>
         <!--<form method="post"action="account list insert.php">
    -->
            <table border="1" cellspacing="0" cellpadding="5" align="center">
                <tr bgcolor="#d3d3d3">
                    <td>ID</td>
                    <td>名前（性）</td>
                    <td>名前（名）</td>
                    <td>カナ（性）</td>
                    <td>カナ（名）</td>
                    <td>メールアドレス</td>
                    <td>性別</td>
                    <td>アカウント制限</td>
                    <td>削除フラグ</td>
                    <td>登録日時</td>
                    <td>更新日時</td>
                    <td>操作</td>
                </tr>
                
                <?php
                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=account;host=localhost;","root","");
                $stmt = $pdo->query("select * from account");
                ?>
                
<!--                <tr>-->　<!--row　=　行-->
                    <?php while($row = $stmt->fetch()){
                        echo "<tr>";
                        echo "<td>".$row['id']."<td>";
                        echo "<td>".$row['family_name']."<td>";
                        echo "<td>".$row['last_name']."<td>";
                        echo "<td>".$row['family_name_kana']."<td>";
                        echo "<td>".$row['last_name_kana']."<td>";
                        echo "<td>".$row['mail']."<td>";
                        echo "<td>".$row['authority']."<td>";
                        echo "<td>".$row['delete_flag']."<td>";    
                        echo "<td>".$row['registered_time']."<td>";
                        echo "<td>".$row['update_time']."<td>";
                        /*echo "<td>"."input type="submit"class="submit"value="確認する">"."<td>";*/
                        echo "</tr>";
                        }
                        ?>
                <!--<form action="" method="post"><button type="submit" name="add">更新</button></form>-->
                 <input type="submit"class="button1"value="更新"><input type="submit"class="button2"value="削除">
       
        </table>
        
        <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
        </footer>
     </body>
  </html>