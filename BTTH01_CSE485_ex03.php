<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 3</title>
</head>
<body>
 <?php
 $arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo '<table style="border-collapse: collapse; border: 1px solid black;">';
echo '<tr style="border-bottom: 1px solid black;"><th style="padding: 5px;">Tên khóa học</th></tr>';

foreach ($arrs as $item) {
    echo '<tr style="border-bottom: 1px solid black;"><td style="padding: 5px;">' . $item . '</td></tr>';
}

echo '</table>';
 ?>


</body>
</html>