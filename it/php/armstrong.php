<DOCTYPE html>
<html>
<head>
    <title>Armstrong</title>
</head>
<body>
    <form action="armstrong.php" method="post">
    <h1>Armstrong Checking</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="numb">
    <br>
    <button type="submit" value="Submit">Sumbit</button>
    </form>
</body>
</html>
<?php
$num = $_POST['numb'];
function isArmstrong($num) {
    $original_num = $num;
    $sum = 0;
    $count = 0;
    while ($num != 0) {
        $count++;
        $digit = $num % 10;
        $sum += pow($digit, $count);
        $num = (int)($num / 10);
    }
    return $original_num === $sum;
};
if(isset($_POST["submit"])){
    if (isArmstrong($num)) {
        echo "The number $num is an Armstrong number.";
    }
    else{
        echo "The number $num is not an Armstrong number.";
    }
}
?>