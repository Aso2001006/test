<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>favorite-update</title>
    <link rel="stylesheet" herf="./css/style.css">
</head>
<body>
<h2>更新する番号を入力</h2>
<form action="favorite-update-input.php" method="post">
    <input type="number" name="f_id"><br>
    <button type="submit">更新画面へ</button>
</form>
<hr>
<h2>お気に入り一覧</h2>
<?php
$pdo=new PDO('mysql:host=mysql153.phy.lolipop.lan;
             dbname=LAA1290563-favorite;charset=utf8',
    'LAA1290563',
    'katagiri1213As');

print "<table border='1'>";
print "<th>ID</th>";
print "<th>商品名</th>";
print "<th>価格</th>";
print "<th>サイトURL</th>";


//SELECT文実行、結果取得
foreach ($pdo->query('SELECT * FROM favorite') as $row) {
    echo "<tr>";
    echo "<td>", $row['f_id'], "</td>";
    echo "<td>", $row['f_name'], "</td>";
    echo "<td>", $row['f_price'], "</td>";
    echo "<td><a href='", $row['f_site'], "' target='_blank'>", mb_strimwidth($row['f_site'], 0, 20, "..."), "</a></td>";
    echo "</tr>";
}
print "</table>";


$pdo = null;
?>

</body>
</html>





