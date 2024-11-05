<DOCTYPE html>
<html>
<head>
    <title>Prime Number</title>
</head>
<body>
    <form action="prime.php" method="post">
    <h1>Prime Numbers</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="prime">
    <br>
    <button type="submit" value="submit" name="submit">Sumbit</button>
    </form>
</body>
</html>
<?php
$num = $_POST['prime'];
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
if(isset($_POST["submit"])){
    if (isPrime($num)) {
        echo "The number $num is a prime number.";
    }
    else{
        echo "The number $num is not a prime number.";
    }
}
?>