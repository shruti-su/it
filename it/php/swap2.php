<!DOCTYPE html>
<html lang="en">
<head>
    <title>Swapping without third variable</title>
</head>
<body>
    <h1>Swapping without third variable</h1>
    <form action="swap1.php" method="post">
        <label>enter a</label>
        <input type="text" name="num1">
        <br>
        <label>enter b</label>
        <input type="text" name="num2">  
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $x = $x + $y;
    $y = $x - $y;
    $x = $x - $y ;
    echo "a = " . $a;
    echo "b = " . $b;
?>