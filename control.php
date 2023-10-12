<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="m-5 shadow-lg p-3">
        <form action="./index.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">掲示板を表示します</label>
                <button type="submit" class="btn btn-primary">掲示板を表示</button>
            </div>
        </form>
    </div>

    <div class="m-5 shadow-lg p-3">
        <form action="./kantan_insert.php" method="POST">
            <div class="mb-3">
                <label for="a1" class="form-label">名前</label>
                <input type="text" class="form-control" name="a1" id="a1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="a2" class="form-label">メッセージ</label>
                <input type="text" class="form-control" name="a2" id="a2">
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>

    <div class="m-5 shadow-lg p-3">
        <form action="./kantan_delete.php" method="POST">
            <div class="mb-3">
                <label for="b1" class="form-label">削除する番号</label>
                <input type="text" class="form-control" name="b1" id="b1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">削除</button>
        </form>
    </div>

    <div class="m-5 shadow-lg p-3">
        <form action="./kantan_search.php" method="POST">
            <div class="mb-3">
                <label for="c1" class="form-label">検索するキーワード</label>
                <input type="text" class="form-control" name="c1" id="c1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">検索</button>
        </form>
    </div>
</body>

</html>