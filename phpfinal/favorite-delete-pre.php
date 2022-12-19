<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>favorite-delete-pre</title>
    <link rel="stylesheet" herf="./css/style.css">
</head>
<body>
<form action="favorite-update-result.php" method="post">
    <?php
    $pdo=new PDO('mysql:host=mysql153.phy.lolipop.lan;
             dbname=LAA1290563-favorite;charset=utf8',
        'LAA1290563',
        'katagiri1213As');

    $sql=$pdo->prepare('SELECT * FROM favorite WHERE f_id=?');
    $sql->bindValue(1,$_GET['f_id'],PDO::PARAM_INT);
    $res01 = $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $count01 = count($result);

    if($count01 > 0) {
        $f_id = $result[0]['f_id'];
        $f_name = $result[0]['f_name'];
        $f_price = $result[0]['f_price'];
        $f_site = $result[0]['f_site'];

        print $f_id . "<br>";
        print $f_name . "<br>";
        print $f_price . "<br>";
        print $f_site . "<br>";
        ?>
        <a href="favorite-delete-result.php?f_id=<?php print $_GET['f_id']; ?>">削除実行</a>
        <a href="favorite-list.php">リストに戻る</a>

        <?php
    }
    else
    {
        print "該当なし<br>";
        ?>
        <a href="favorite-list.php">リストに戻る</a>
        <?php
    }

    ?>
</form>
<?php
$pdo=null;
?>
</body>
</html>

