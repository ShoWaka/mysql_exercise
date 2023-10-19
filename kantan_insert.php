<?php

try {
    require_once("db_info.php");
    // データベースに接続
    $pdo = new PDO(
        // ホスト名、データベース名
        "mysql:host=$SERV;dbname=$DBNAME;",
        // ユーザー名
        "$USER",
        // パスワード
        "$PASS",
        // レコード列名をキーとして取得させる
        // [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );


    // SQL文をセット
    $stmt = $pdo->prepare("INSERT INTO tbk (nama,mesg) VALUES (:nama, :mesg)");
    // 値をセット
    $stmt->bindValue(':nama', $_POST["a1"]);
    $stmt->bindValue(':mesg', $_POST["a2"]);
    // SQL文を実行
    $stmt->execute();

    $stmt = $pdo->prepare("SELECT * FROM tbk");
    // SQL文を実行
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
