<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 12</title>
</head>
<body>
<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];


$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Đầu tiên: " . $firstElement . "\n";
echo "Cuối cùng: " . $lastElement . "\n\n";


$minValue = min($numbers);
$maxValue = max($numbers);
$sum = array_sum($numbers);

echo "Số nhỏ nhất: " . $minValue . "\n";
echo "Số lớn nhất: " . $maxValue . "\n";
echo "Tổng: " . $sum . "\n\n";


asort($numbers);
print_r($numbers);

arsort($numbers);
print_r($numbers);


ksort($numbers);
print_r($numbers);

krsort($numbers);
print_r($numbers);
?>
</body>
</html>