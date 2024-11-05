<DOCTYPE html>
<html>
<head>
    <title>Lipear calculation</title>
</head>
<body>
    <form action="lipear.php" method="post">
    <h1>Lipear calculation</h1>
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="lipear">
    <br>
    <button type="submit" value="submit" name="submit">Sumbit</button>
    </form>
</body>
</html>
<?php
$a = $_POST['lipear'];
// find if the year is leaper
if ($a % 4 == 0) {
    if ($a % 100 == 0) {
        if ($a % 400 == 0) {
            echo $a. " is a leap year.";
        } else {
            echo $a. " is not a leap year.";
        }
    } else {
        echo $a. " is a leap year.";
    }
} else {
    echo $a. " is not a leap year.";
}
?>