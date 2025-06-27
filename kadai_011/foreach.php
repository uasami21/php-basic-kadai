<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>

<?php
// 連想配列
$vegetable  = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

// foreach と echo を使って出力
foreach ($vegetable as $key => $value) {
echo "{$key}:{$value}<br>";
}
?>

  </p>
</body>

</html>