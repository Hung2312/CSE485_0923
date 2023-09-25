<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 13</title>
</head>
<body>
<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Tính toán giá trị trung bình của mảng
$average = array_sum($numbers) / count($numbers);

echo "Average: " . $average . "\n\n";


echo "số có giá trị lớn hơn giá trị trung bình:\n";
foreach ($numbers as $number) {
    if ($number > $average) {
        echo $number . "\n";
    }
}
echo "\n";


echo "số có giá trị nhỏ hơn hoặc bằng giá trị trung bình:\n";
foreach ($numbers as $number) {
    if ($number <= $average) {
        echo $number . "\n";
    }
}
?>
</body>
</html>