<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>favorite-in</title>
    <link rel="stylesheet" herf="./css/style.css">
</head>
<body>
<h1>お気に入り登録画面</h1>
<form action="favorite-insert.php" method="post">
    商品名<input type="text" name="f_name"><br>
    価格<input type="text" name="f_price"><br>
    サイトURL<input type="text" name="f_site"><br>
    <button type="submit" name="action" value="send">登録</button>
</form>
</body>
</html>


