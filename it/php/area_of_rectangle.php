<DOCTYPE html>
<html>
<head>
    <title>Area of rectangle</title>
</head>
<body>
    <form action="area_of_rectangle.php" method="post">
    <h1>Area of Rectangle</h1>
        <label>enter a</label>
        <input type="text" name="num1">
        <br>
        <label>enter b</label>
        <input type="text" name="num2">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $area=($a*$b);
    echo "area of rectangle is $area";
?>
    