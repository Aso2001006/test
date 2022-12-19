<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>favorite-list</title>
    <link rel="stylesheet" herf="./css/style.css">
</head>
<body>
<?php
$pdo=new PDO('mysql:host=mysql153.phy.lolipop.lan;
             dbname=LAA1290563-favorite;charset=utf8',
    'LAA1290563',
    'katagiri1213As');

print "<a href=favorite-in.php>追加</a><br>";

print "<table border='1'>";
print "<th>ID</th>";
print "<th>商品名</th>";
print "<th>価格</th>";
print "<th>サイトURL</th>";
print "<th>編集</th>";
print "<th>削除</th>";

foreach ($pdo->query('SELECT * FROM favorite') as $row){
    echo "<tr>";
    echo "<td>", $row['f_id'], "</td>";
    echo "<td>", $row['f_name'], "</td>";
    echo "<td>", $row['f_price'], "</td>";
    echo "<td><a href='", $row['f_site'], "' target='_blank'>", mb_strimwidth($row['f_site'],0,20,"..."), "</a></td>";
    echo "<td><a href='favorite-update-input.php?f_id=",$row['f_id'],"'>編集</td>>";
    echo "<td><a href='favorite-delete-pre.php?f_id=",$row['f_id'],"'>削除</td>>";
    echo "</tr>";
}
print "</table>";

$pdo = null;
?>
</body>
</html>


