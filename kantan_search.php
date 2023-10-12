<?php

try {
    // データベースに接続
    $pdo = new PDO(
        // ホスト名、データベース名
        'mysql:host=localhost;dbname=db1;',
        // ユーザー名
        'root',
        // パスワード
        'root',
        // レコード列名をキーとして取得させる
        // [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );

    // SQL文をセット
    $stmt = $pdo->prepare("SELECT * FROM tbk WHERE mesg LIKE :mesg ");
    // 値をセット
    $stmt->bindValue(':mesg', $_POST["c1"]);
    // SQL文を実行
    // var_dump($stmt);
    $stmt->execute();

    // ループして1レコードずつ取得
    foreach ($stmt as $row) {
        echo "<div>$row[0] : $row[1] : $row[2]</div>";
    }
    echo "<br> <a href='index.php'>トップメニューに戻ります</a>";
} catch (PDOException $e) {
    // エラー発生
    echo $e->getMessage();
} finally {
    // DB接続を閉じる
    $pdo = null;
}
