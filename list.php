<!DOCTYPE html>
<html lang="jp">
    <head>
       
        <meta charset="UTF-8">
        <title>アカウント一覧画面</title>
        <link rel="stylesheet"type="text/css"href="list.css">
    
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
        
             <h1>アカウント一覧画面</h1>
         <!--<form method="post"action="account list insert.php">
    -->
            <table border="1" cellspacing="0" cellpadding="5" align="center">
                <tr bgcolor="#d3d3d3">
                    <th>ID</th>
                    <th>名前（性）</th>
                    <th>名前（名）</th>
                    <th>カナ（性）</th>
                    <th>カナ（名）</th>
                    <th>メールアドレス</th>
                    <th>性別</th>
                    <th>アカウント制限</th>
                    <th>削除フラグ</th>
                    <th>登録日時</th>
                    <th>更新日時</th>
                    <th>操作</th>
                </tr>
                
                          
               <!-- ORDER BY id DESC = 降順-->
                <?php
                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=account;host=localhost;","root","");
                $stmt = $pdo->query("select * from account ORDER BY id DESC");
                ?>
                
                <!-- パラメーターが　0＝有効、1＝無効　-->
                <?php
                /* 有効と表示する*/
                /*$delete_flag=0;*/
                //$row['delete_flag']=0;
                //if($row['delete_flag'] == 0){
                    //echo "有効";}
                //else{
                    //echo "無効";}
                ?>
                
                <!--row　=　行-->
                    <?php while($row=$stmt->fetch()){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['family_name']."</td>";
                        echo "<td>".$row['last_name']."</td>";
                        echo "<td>".$row['family_name_kana']."</td>";
                        echo "<td>".$row['last_name_kana']."</td>";
                        echo "<td>".$row['mail']."</td>";
                        echo "<td>";
                        if($row['gender']==0){
                            echo "男";
                        } else {
                            echo "女";
                        }
                        echo "</td>";
                        echo "<td>";
                        if($row['authority']==0){
                            echo "一般";
                        } else {
                            echo "管理者";
                        }
                        echo "</td>";
//                        echo "<td>";
//                        echo $row['authority'];
//                        echo "</td>";
                       // echo "<td>".$row['delete_flag']."</td>";
                        //$row['delete_flag'] = 1;
                        //echo "<td>".($row['delete_flag']==0 ? "有効" : "無効")."</td>";
                        echo "<td>";
                        //$row['delete_flag']=0;
                        if($row['delete_flag']==0) {
                            echo "有効";
                        } else {
                            echo "無効";
                        }
                        echo "</td>";
                       /* echo "<td>".$row['delete_flag'].$row['delete_flag']=0){if($row['delete_flag']==0){echo "有効";}else{echo "無効";};."</td>"; */
                        echo "<td>".$row['registered_time']."</td>";
                        echo "<td>".$row['update_time']."</td>";
                         /*echo "<td>".."</td>";*/
                        /*echo "<td>"."<input type="submit"class="button1"value="更新">"."<td>";*/
                        /*echo "<td>"."<input type="button" id="foobtn" value="更新"/>"."</td>";*/
                      /*  echo "<td>".<div class="button"><form action="return_index.ph"method="post"><input type="submit"class="button1"value="前に戻る"></form>."</td>";*/
                        /*echo "<td>";*/
                       /* echo "<div class="button">";
                        echo "<form action="return_index.php"method="post">";*/
                      /*  echo "<input type="submit"class="button1"value="更新">";*/
                       /* echo "</form>";
                        echo "</div>";*/
                        /*echo "</td>"*/
                            echo "<td>"."<div class="button">"."<form action=""method="post">"."</td>"."<input type="submit"class="button1"value="更新">"." </form>"." </form>";
                            echo "<td>"
                            /*<div class="button">
                                <form action=""method="post">
                                    <input type="submit"class="button1"value="更新">
                                </form>
                             </form>
                        </td>";*/
                        echo "</tr>";
                        }
                        ?>
                
               
                
             <!-- /*  テーブルの中にボタンを表示させる*/-->
                      <!--  <td>
                            <div class="button">
                                <form action=""method="post">
                                    <input type="submit"class="button1"value="更新">
                                </form>
                            </div>
                        </td>
                -->
                </table>
        
      
                
                
               <!-- ボタン表示-->
         <!--<div class="button">
            <form action="return_index.ph"method="post">
                <input type="submit"class="button1"value="前に戻る"></form>
             
                <form action="" method="post"><button type="submit" name="add">更新</button></form>
                <input type="submit"class="button1"value="更新"><input type="submit"class="button2"value="削除">
             <input type="button" id="botton" value="更新"/></div>-->
       
   
        
        <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
        </footer>
     </body>
  </html>