<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>favorito-delete-result</title>
    <link rel="stylesheet" herf="./css/style.css">
</head>
<body>
<h2>削除完了画面</h2>
<?php
$pdo=new PDO('mysql:host=mysql153.phy.lolipop.lan;
             dbname=LAA1290563-favorite;charset=utf8',
    'LAA1290563',
    'katagiri1213As');


$song_id = $_GET['f_id'];

$sql=$pdo->prepare('DELETE FROM favorite WHERE f_id=?');
$sql->bindValue(1,$song_id,PDO::PARAM_STR);
$sql->execute();

echo '<p>削除完了しました</p>';

//DB接続解除
$pdo = null;
?>
<a href="favorite-list.php">一覧
    画面</a>
</body>
</html>

