<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板トップページ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
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

        // SQL分をセット
        $stmt = $pdo->prepare("SELECT * FROM tbk");
        // SQL文を実行
        $stmt->execute();
    } catch (PDOException $e) {
        // エラー発生
        echo $e->getMessage();
    } finally {
        // DB接続を閉じる
        $pdo = null;
    }
    ?>

    <div class="m-5 shadow-lg p-3">
        <table class="table-secondary">
            <tbody>
                <?php foreach ($stmt as $row) : ?>
                    <tr>
                        <th scope="row"><?php echo $row[0] ?></th>
                        <td colspan="2"><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a type="button" href="control.php" class="btn btn-primary">操作画面へ</a>
    </div>

    <style>
        td,
        th {
            padding: 5px 10px;
        }
    </style>
</body>

</html>