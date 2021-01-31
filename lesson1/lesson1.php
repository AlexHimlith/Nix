<?php

echo <<<EOL
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Таблица умножения</title>

    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<table>
  <tbody>
    <tr>
EOL;

for ($i=1; $i<=10; $i++) 
{
    echo '<td>';
    for ($j=1; $j<=10; $j++) 
    {
        echo $i . " x " . $j . " = " . $i*$j . "<br>";
        //$p=$i*$j;
        //echo "$i x $j = $p<br>";
    }
    echo '</td>';
    if ($i==5) 
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