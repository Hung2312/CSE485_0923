<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 10</title>
</head>
<body>
<?php
function convertToUpperCase($arr)
{
    $result = array();
    foreach ($arr as $item) {
        if (is_string($item)) {
            $result[] = strtoupper($item);
        } else {
            $result[] = $item;
        }
    }
    return $result;
}

$arrs1 = ['1', 'b', 'c', 'd'];
$arrs2 = ['a', 0, null, false];

$result1 = convertToUpperCase($arrs1);
$result2 = convertToUpperCase($arrs2);

print_r($result1);
print_r($result2);

?>
</body>
</html>