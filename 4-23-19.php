<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4-23-19</title>
</head>
<body>
    <?php
    echo"<h1>Marec Szpor</h1>";
    $limit = 4000000;
    function evenSum($limit) {
        if ($limit < 2)
            return 0;
        $n1 = 1;
        $n2 = 2;
        $sum = $n1 + $n2;
        while ($n2 <= $limit){
            $n3 = 4 * $n2 + $n1;
            if ($n3 > $limit)
                break;
        }
            return $sum;
    }
    echo"(evenSum($limit));";
    ?>
</body>
</html>