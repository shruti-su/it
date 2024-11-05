<DOCTYPE html>
<html>
<head>
    <title>Even_odd</title>
</head>
<body>
    <form action="even_odd.php" method="post">
    <h1>Even and Odd Numbers</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="numb">
    <br>
    <button type="submit" name="submit" value="Submit">Sumbit</button>
    </form>
</body>
</html>
<?php
$a = $_POST['numb'];
if ($a % 2 == 0) {
    echo "The number $a is even.";
} else {
    echo "The number $a is odd.";
}
?>
    