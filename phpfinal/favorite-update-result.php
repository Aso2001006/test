<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>favorite-update-result</title>
</head>
<body>
<?php
$pdo=new PDO('mysql:host=mysql153.phy.lolipop.lan;
             dbname=LAA1290563-favorite;charset=utf8',
    'LAA1290563',
    'katagiri1213As');

    $f_id = $_POST['f_id'];
    $f_name = $_POST['f_name'];
    $f_price = $_POST['f_price'];
    $f_site = $_POST['f_site'];
    
    $sql=$pdo->prepare('UPDATE favorite set f_name=?,f_price=?,f_site=? WHERE f_id=?');
    $sql->bindValue(1,$f_name,PDO::PARAM_STR);
    $sql->bindValue(2,$f_price,PDO::PARAM_STR);
    $sql->bindValue(3,$f_site,PDO::PARAM_STR);
    $sql->bindValue(4,$f_id,PDO::PARAM_STR);
    $sql->execute();
    
echo '<p>更新完了しました</p>';

$pdo = null;
?>
<a href="favorite-list.php">一覧画面</a>
</body>
</html>

