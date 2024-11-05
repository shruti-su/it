<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <form action="fibonacci.php" method="post">
    <h1>Fibonacci Series</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="fibonacci">
    <br>
    <button type="submit" value="submit" name="submit">Sumbit</button>
    </form>
</body>
</html>
<?php
    $n = $_POST['fibonacci'];
    function fibonacciSeries($n)
    {
        $a = 0;
        $b = 1;
        $c = 0;
        echo $a." ".$b." "; 
        for ($i = 2; $i < $n; $i++) {
            $c = $a + $b;
            echo $c. " ";
            $a = $b;
            $b = $c;
        }  
    }
if(isset($_POST["submit"])){
    fibonacciSeries($n);
}

?>