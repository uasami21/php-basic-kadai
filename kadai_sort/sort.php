<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
     <?php
function sort_2way($array, $order) {
    if ($order === true) {
        echo "昇順にソートします<br>";
        sort($array); // 昇順ソート
    } else {
        echo "降順にソートします<br>";
        rsort($array); // 降順ソート
    }

    foreach ($array as $value) {
        echo $value . "<br>";
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];

// 昇順でソート
sort_2way($nums, true);

echo "<br>";

// 降順でソート
sort_2way($nums, false);
?>
    </p>
</body>

</html>