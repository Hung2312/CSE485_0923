<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 11</title>
</head>
<body>
<?php
$array = array(1, 2, 3, 4, 5);
if (isset($array[2])) {
    unset($array[2]);
    $array = array_values($array);
}

print_r($array);
?>
</body>
</html>