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
         <form method="post"action="account list insert.php">
    
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
                
                <tr>
                   <td></td>
                    <?php while($row = $stmt->fetch()){
                        echo "<td>".$row['last_name']."<br>"."<td>";
                       /* echo "<td>".$row['first_name']."<td>"
                        echo "<td>".$row['mail']."<td>";*/
                        }
                        ?>
                    <!--<td><?php while($row = $stmt->fetch()){echo $row['first_name'];}?></td>
                    <td><?php foreach($stmt as $row){echo $row['last_name2'];}?></td>
                    <td><?php foreach($stmt as $row){echo $row['first_name2'];}?></td>
                    <td><?php foreach($stmt as $row){echo $row['mail'];}?></td>
                    <td><?php foreach($stmt as $row){echo $row['sex'];}?></td>
                    <td><?php foreach($stmt as $row){echo $row['account'];}?></td>
                    <td></td>
                    <td><?php foreach($stmt as $row){echo $row['times'];}?></td>
                    <td><?php foreach($stmt as $row){echo $row['datet'];}?></td>
                    <td> <input type="submit"class="button1"value="更新">
                         <input type="submit"class="button2"value="削除">
                    </td>-->
                </tr>
       
        </table>
        
        <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
        </footer>
     </body>
  </html>