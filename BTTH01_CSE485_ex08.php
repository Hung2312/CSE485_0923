<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 8</title>
</head>
<body>
<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];


$maxLength = 0;
$longestString = '';

foreach ($array as $string) {
    $length = strlen($string);
    if ($length > $maxLength) {
        $maxLength = $length;
        $longestString = $string;
    }
}

echo "Chuỗi lớn nhất là $longestString, độ dài = $maxLength\n";


$minLength = PHP_INT_MAX;
$shortestString = '';

foreach ($array as $string) {
    $length = strlen($string);
    if ($length < $minLength) {
        $minLength = $length;
        $shortestString = $string;
    }
}

echo "<br/>Chuỗi nhỏ nhất là $shortestString, độ dài = $minLength\n";
?>

</body>
</html>