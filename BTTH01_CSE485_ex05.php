<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 5</title>
</head>
<body>
<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

$valueB = $a['b']['o']['b'];
$valueC = $a['a']['c'];
$infoA = $a['a'];

echo "Giá trị = $valueB với key b<br>";
echo "Giá trị = $valueC với key c<br>";
echo "Thông tin của phần tử có key a:<br>";
print_r($infoA);
?>

</body>
</html>