<?php

echo <<<EOL
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Таблица умножения в цвете</title>

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="colorstyle.css">
</head>
<body>
<table>
  <tbody>
    <tr>
EOL;

function class_color($number) //определяет цвет цифры и оборачивает ее в span
{
    $span = "";
    $str_number = (string)$number;
    for ($x=0; $x<=strlen($number)-1; $x++) //перебрать цифры в числе ...
    {
        $numeral = $str_number[$x];
        // ... назначить цвет ...
        switch ($numeral) 
        {
            case '1':
                $color = "red";
                break;
            case '2':
                $color = "green";
                break;
            case '3':
                $color = "yellow";
                break;
            case '4':
                $color = "blue";
                break;
            default:
                $color = "";
                break;
        }
        // ... и каждое обернуть в span
        $span .= "<span class='" . $color . "'>" . $numeral . "</span>";
    }
    return $span;
}


for ($i=1; $i<=10; $i++) // множимые
{
    $span_i = class_color($i);

    echo '<td>'; // новая ячейка
        for ($j=1; $j<=10; $j++) //множители 
        {
            $span_j = class_color($j);
            $span_ij = class_color($i * $j);
            
            echo $span_i . " x " . $span_j . " = " . $span_ij . "<br>";
        }
    echo '</td>';

    if ($i==5) // после пятого столбца начать новую строку таблицы
    {
        echo '</tr><tr>';
    }
}
echo <<<EOT
    </tr>
  </tbody>
</table>
<a href="../index.html">Назад</a>
</body>
</html>
EOT;
?>