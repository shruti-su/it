<DOCTYPE html>
<html>
<head>
    <title>Area of triangle</title>
</head>
<body>
    <form action="area_of_triangle.php" method="post">
    <h1>Area of Triangle</h1>
        <label>enter a</label>
        <input type="text" name="num1">
        <br>
        <label>enter b</label>
        <input type="text" name="num2">  
        <br>
        <label>enter c</label>
        <input type="text" name="num3">  

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    function findArea($a, $b, $c) 
    { 
        if ($a < 0 or $b < 0 or
            $c < 0 or ($a + $b <= $c) or
            $a + $c <= $b or $b + $c <= $a) 
        { 
            echo "Not a valid triangle"; 
            exit(0); 
        } 
        $s = ($a + $b + $c) / 2; 
        return sqrt($s * ($s - $a) *  ($s - $b) * ($s - $c)); 
    } 
      
    // Driver Code 
    $a = $_POST('num1'); 
    $b = $_POST('num2'); 
    $c = $_POST('num3'); 
      
    echo "Area is ", findArea($a, $b, $c); 
?> 
