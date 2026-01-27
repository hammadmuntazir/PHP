<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals</title>
</head>
<body>
    <?php 
    echo '<h1> PHP Super Globals</h1>';
    echo'<h3> are always accessible regardless of scope </h3>';
    echo '<h2 style="color:blue;"> $Global</h2>';
    echo '<h3>Global variables are variables that can be accessed from any scope.

Variables of the outer most scope are automatically global variables, and can be used by any scope.
However, to use a global variable inside a function you have to either define them as global with the global keyword, or 
refer to them by using the $GLOBALS syntax.</h3>';
$x=10;
function myFunction(){
    echo $GLOBALS ['x'];
}
myFunction();

echo "<h3>This is different from other programming languages where global variables are available without referring to them as global.</h3>";
echo "<h3>We can also refer to global variables inside functions by defining them as global with the global keyword.</h3>";
function myTest(){
    global $x;
    echo $x;
}
myTest();
echo "<h3>Variables created inside a function only belongs to that function, but you can create global variables inside a function by using the GLOBALS syntax.</h3>";
function myTest1(){
    $GLOBALS['y']=20;
}
myTest1();
echo $y;

echo "<h2 style='color:blue;'>SERVER</h2>";
echo "<h3>The SERVER superglobal holds information about the web server including headers, paths, and script locations.</h3>";
// echo 'The current script name is: '.$SERVER['PHP_SELF']."<br>";
echo 'The server name is:'.$_SERVER['SERVER_NAME']."<br>";
echo 'The host name is:'.$_SERVER['HTTP_HOST']."<br>";
echo 'Server address is:'.$_SERVER['SERVER_ADDR']."<br>";

echo "<h2 style='color:blue;'>Request</h2>";
echo "<h3>The Request Superglobal is used to collect data after submitting an HTML form.</h3>";
echo '<h3>we will access the data with the $_REQUEST keyword followed by the name of the form field, query parameter, or cookie.</h3>';
echo '<h4>Because $_REQUEST can combine data from different sources (GET, POST, and COOKIE), it can introduce security vulnerabilities if not handled carefully. So, while using $_REQUEST can be convenient, it is more recommended to use the more specific $_GET, $_POST, and $_COOKIE superglobals when possible.</h4>';

?>

</body>
</html>