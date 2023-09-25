<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 14</title>
</head>
<body>
<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1',
    'giá trị 2'
];

$result = [];

foreach ($array1 as $key => $value) {
    $result[$key] = array_merge([$array2[$key]], $array1[$key]);
}

print_r($result);
?>
</body>
</html>