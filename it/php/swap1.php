<!DOCTYPE html>
<html lang="en">
<head>
    <title>Swapping with third variable</title>
</head>
<body>
    <h1>Swapping with third variable</h1>
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
    $c = $a;
    $a = $b;
    $b = $c;
    echo "a = " . $a;
    echo "b = " . $b;
?>