<DOCTYPE html>
<html>
<head>
    <title>Reversing</title>
</head>
<body>
    <form action="reversing.php" method="post">
    <h1>Reversing</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="reversing">
    <br>
    <button type="submit" name="submit" value="Submit">Sumbit</button>
    </form>
</body>
</html>
<?php
$num = $_POST['reversing'];
$rev= strrev($num);
echo "reverse of {$num} is {$rev}";
?>