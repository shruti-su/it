<DOCTYPE html>
<html>
<head>
    <title>Factorial Calculation</title>
</head>
<body>
    <form action="factorial.php" method="post">
    <h1>Factorial calculation</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="factorial">
    <br>
    <button type="submit" value="submit" name="submit">Sumbit</button>
    </form>
</body>
</html>
<?php
$n=$_POST['factorial'];
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        $fact = 1;  // Initialize result variable as 1.
        for ($i = 2; $i <= $n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }
}
if(isset($_POST["submit"])){
    echo "The factorial of $n is: " . factorial($n);
}
?>