<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 6</title>
</head>
<body>
<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array_combine($keys, $values);

print_r($keysAndValues) ;
?>

</body>
</html>