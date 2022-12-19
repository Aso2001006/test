<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>favorite-update</title>
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
    ?>
    <input type="text" name="f_id"  value="<?=$f_id?>" readonly>
    <input type="text" name="f_name" value="<?=$f_name?>">
    <input type="text" name="f_price" value="<?=$f_price?>">
    <input type="text" name="f_site" value="<?=$f_site?>">
    <button type="submit">更新画面へ</button>
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






