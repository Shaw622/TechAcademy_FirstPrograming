{"changed":true,"filter":false,"title":"bookshelf.php","tooltip":"/bookshelf.php","value":"<?php\n    // MySQLサーバ接続に必要な値を変数に代入\n    $host = 'localhost';\n    $username = 'root';\n    $password = '';\n    $db_name = 'bookshelf_mini';\n    \n     // 変数を設定して、MySQLサーバに接続\n     $database = mysqli_connect($host, $username, $password, $db_name);\n     \n    // 接続を確認し、接続できていない場合にはエラーを出力して終了する\n    if ($database == false){\n        die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());\n    }\n\n    // MySQL に utf8 で接続するための設定をする\n    $charset = 'utf8';\n    mysqli_set_charset($database, $charset);\n    \n    // フォームから書籍タイトルが送信されていればデータベースに保存する\n    if($_POST['book_title']){\n        // 実行するSQLを作成\n        $sql = 'INSERT INTO books (book_title) VALUES(?)';\n        \n        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする\n        $statement = mysqli_prepare($database, $sql);\n        \n        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する\n        mysqli_stmt_bind_param($statement, 's', $_POST['book_title']);\n        \n        // SQL文を実行する\n        mysqli_stmt_execute($statement);\n        \n        // SQL文を破棄する\n        mysqli_stmt_close($statement);\n    }\n    \n    \n    $sql = 'SELECT * FROM books ORDER BY created_at DESC';\n    $result = mysqli_query($database, $sql);\n\n    // MySQLを使った処理が終わると、接続は不要なので切断する\n    mysqli_close($database);\n?>\n\n<!DOCTYPE html>\n<html lang=\"ja\">\n    <head>\n        <meta charset=\"UTF-8\">\n        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>\n        <link rel=\"stylesheet\" href=\"bookshelf.css\">\n    </head>\n    <body>\n        \n    <?php\n        //フォームデータ送受信確認用コード（本番では削除）\n        // print '<div style=\"background-color: skyblue;\">';\n        // print '<p>動作確認用:</p>';\n        //var_dump($_POST['book_title']);\n        // print '</div>';\n    ?>\n        \n\n        <form action=\"bookshelf_mini.php\" method=\"POST\">\n            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>\n            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">\n        </form>\n<small>&copy; 2019 Bookshelf</small>\n    </body>\n</html>","undoManager":{"mark":4,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":83,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","    ","     // 変数を設定して、MySQLサーバに接続","     $database = mysqli_connect($host, $username, $password, $db_name);","     ","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false){","        die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","    ","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if($_POST['book_title']){","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(?)';","        ","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = mysqli_prepare($database, $sql);","        ","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        mysqli_stmt_bind_param($statement, 's', $_POST['book_title']);","        ","        // SQL文を実行する","        mysqli_stmt_execute($statement);","        ","        // SQL文を破棄する","        mysqli_stmt_close($statement);","    }","    ","    ","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    $result = mysqli_query($database, $sql);","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>","","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","        ","    <?php","        //フォームデータ送受信確認用コード（本番では削除）","        // print '<div style=\"background-color: skyblue;\">';","        // print '<p>動作確認用:</p>';","        //var_dump($_POST['book_title']);","        // print '</div>';","    ?>","        ","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php","                if ($result){","                    while ($record = mysqli_fetch_assoc($result)){","                        $book_title = $record['book_title'];","            ?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","            <?php","                    }","                    mysqli_free_result($result);","                }","            ?>","        </ul>","    </body>","</html>"],"id":1}],[{"start":{"row":68,"column":0},"end":{"row":81,"column":13},"action":"remove","lines":["        <h2>登録された書籍一覧</h2>","        <ul>","            <?php","                if ($result){","                    while ($record = mysqli_fetch_assoc($result)){","                        $book_title = $record['book_title'];","            ?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","            <?php","                    }","                    mysqli_free_result($result);","                }","            ?>","        </ul>"],"id":2}],[{"start":{"row":68,"column":0},"end":{"row":68,"column":47},"action":"insert","lines":["<small>&copy; 2019 TechAcademy KITCHEN.</small>"],"id":3}],[{"start":{"row":68,"column":19},"end":{"row":68,"column":39},"action":"remove","lines":["TechAcademy KITCHEN."],"id":4},{"start":{"row":68,"column":19},"end":{"row":68,"column":20},"action":"insert","lines":["B"]},{"start":{"row":68,"column":20},"end":{"row":68,"column":21},"action":"insert","lines":["o"]},{"start":{"row":68,"column":21},"end":{"row":68,"column":22},"action":"insert","lines":["o"]},{"start":{"row":68,"column":22},"end":{"row":68,"column":23},"action":"insert","lines":["k"]}],[{"start":{"row":68,"column":19},"end":{"row":68,"column":23},"action":"remove","lines":["Book"],"id":5},{"start":{"row":68,"column":19},"end":{"row":68,"column":28},"action":"insert","lines":["Bookshelf"]}],[{"start":{"row":62,"column":0},"end":{"row":63,"column":26},"action":"remove","lines":["        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>"],"id":6}]]},"ace":{"folds":[],"scrolltop":104,"scrollleft":0,"selection":{"start":{"row":62,"column":0},"end":{"row":62,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1551600021508}