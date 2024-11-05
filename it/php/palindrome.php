<DOCTYPE html>
<html>
<head>
    <title>Palindrome Calculation</title>
</head>
<body>
    <form action="palindrome.php" method="post">
    <h1>Palindrome calculation</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="palindrome">
    <br>
    <button type="submit" value="submit" name="submit">Sumbit</button>
    </form>
</body>
</html>
<?php
    $num = $_POST['palindrome'];
    function isPalindrome($num) {
        $original_num = $num;
        $reverse_num = 0;
        while ($num != 0) {
            $reverse_num = ($reverse_num * 10) + ($num % 10);
            $num = (int)($num / 10);
        }
        return $original_num == $reverse_num;
    }
    if(isset($_POST["submit"])){
        if (isPalindrome($num)) {
            echo "The number $num is a palindrome.";
        }
        else{
            echo "The number $num is not a palindrome.";
        }
    }
?>