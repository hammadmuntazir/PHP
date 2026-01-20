<!-- <?php
// php codes goes here
echo "Hello, World!";
?>  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>My first PHP page</h1>
<?php
$color="blue";
$x=5;
echo 'Hello World! <br>';
ECHO 'This is Hammad';
echo "<br> am Wearing a $color Shirt";   

function myTest(){
    echo "<br> Value of x is:$x<br>";
}
myTest();

function myTest1(){
    global $x;
    echo "<br> Value of x is :$x";
}
myTest1();
function myTest2(){
    $x=15;
    echo "<br> Value of x is :$x";
}
myTest2();
?>
</body>
</html>