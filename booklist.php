<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>booklist</title>
    </head>
    
    <body>
<?php
    print '<div style="background-color: skyblue;">';
    print '<p>動作確認用;</p>';
    print_r($_POST);
    print '</div>';
    ?>
    
            <a href="booklist.php"><h1>Booklist</h1></a>
            <h2>書籍の登録ファーム</h2>
            <form action="booklist.php" method="POST">
                    <input type = "text" name="book_title" placeholder="書籍タイトルを入力"required>
                    <input type = "submit" name="submit_add_book" value="登録">
            </form>
            <h2>登録された書籍一覧</h2>
            <ul>
                <?php               ?>
                    <li><?php   ?></li>
                    <?php       ?>
               
            </ul>
    </body>
</html>
    