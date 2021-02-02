<?php

$rev_text = '';

if (isset($_POST['text'])) 
{
    $rev_text = strrev(htmlspecialchars($_POST['text']));
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Разворот строки</title>
</head>
<body>
    <form action='lesson3.php' method='POST'>
        <input type='text' name='text' size='50'>
        <input type="submit" value="Развернуть">
    </form>
</body>
</html>

<?php
echo $rev_text . '<br><br>';
echo '<a href="../index.html">Назад</a>'
?>