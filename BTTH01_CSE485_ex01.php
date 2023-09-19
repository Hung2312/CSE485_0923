<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 1</title>
</head>
<body>
    <?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
    $result = calculateOperation($arrs);
    function calculateOperation($arr){
        $sum = 0;
        $product = 1;
        $difference = $arr[0];
        $quotient = $arr[0];

        foreach ($arr as $value){
            $sum += $value;
            $product *= $value;
            $difference -= $value;
            $quotient /= $value;
        }

        return array(
            'sum' => $sum,
            'product' => $product,
            'difference' => $difference,
            'quotient' => $quotient
        );
    }
    echo "Tổng các phần tử " . implode(" + ",$arrs) . " = " . $result['sum'] . '<br>';
    echo "Tích các phần tử = " . implode(" * ",$arrs) . " = " . $result['product'] . '<br>';
    echo "Hiệu các phần tử = " . implode(" - ",$arrs) . " = " . $result['difference'] . '<br>';
    echo "Thương các phần tử = " . implode(" / ",$arrs) . " = " . $result['quotient'] . '<br>';
    ?>
</body>
</html>