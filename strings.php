<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php echo 'Hammad <br>'; 
 /* single quotes */
 $name="Hammad";
 echo ' my name is $name';
 /* Double Quotes */
 echo "<br> my name is $name";
 echo "<br> <h1>String Functions in PHP</h1>";
 /* string length */
 echo "<h3>The length of the string is :" .strlen($name) ."</h3>";
    /* word count */
 echo "<h3 style='color:blue;'>The number of words in the string is :".str_word_count($name)."</h3>";

/* checking for words in a string */
$txt="My name is Hammad Muntazir";
var_dump(str_contains($txt,"Hammad"));
/* searches for specific texts in strings*/
echo "<h2 style='color:red;'>".(strpos($txt,"name"))."</h2>";
echo "<h3 style='color:green;'>".strtoupper($name)."</h3>";
echo "<h3 style='color:orange;'>".strtolower($name)."</h3>";
// echo "<h3 style='color:brown;'>".ucwords("my name is hammad muntazir")."</h3>";
echo "<h2 style='background-color:lightblue;'>".str_replace("Hammad","Muntazir",$txt)."</h2>";
echo "<h4 style='background-color:lightgreen;'>" .strrev($name)."</h4>";
$class="  Hammad Muntazir    ";
echo "<h2>"."Length before trim :".strlen($class)."</h2>";
echo "<h2 style='color:red;'>"."Length after trim :".strlen(trim($class))."</h2>";

echo "<h1> Converting Strings to Arrays </h1>";
$y=explode(" ",$txt);
print_r($y);

echo "<h2> Concatenation of Strings </h2>";
$full_name=$name . " Muntazir";
echo $full_name;
echo "<br>".$name . " " . "Muntazir";

$a="Hello";
$b="World";
$c="$a $b";
echo "<br>" .$c;

echo "<h1 style='background-color:lightgreen;'> Slicing  Strings </h1>";
echo substr($name,1,4);
echo "<br>";
echo substr($name,1);
?>
</body>
</html>