<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sum of Digits</title>
</head>
<body>
    <form action="sum_of_digits.php" method="post">
        <label for="">enter number</label>
        <input type="text" name="number">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $num=$_POST['number'];
    $sum=0;
    while($num>0){
        $digit=$num%10;
        $sum+=$digit;
        $num=floor($num/10);
    }
    echo "The sum of digits is: ".$sum;
?>
