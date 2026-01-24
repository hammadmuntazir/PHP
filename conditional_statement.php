<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a=5;
    $b=10;
    $time=10;
    echo '<h2> Simple if statement </h2>';
    if($a<$b){
        echo "$a is greater than $b";
    };
    if($time<12){
        echo "<br> Good Morning";
    }

    echo '<h2> if else </h2>';
    $t= date("H");
   if ($t<"20"){
     echo "Have a good day!";
     }else {
     echo "Have a good night!";
    }
    echo '<h2> if elseif else </h2>';
    if($t<10){
        echo "Have a good morning";
    }elseif($t<20){
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo '<br>';
    echo '<h2> short hand if </h2>';
    $num1=16;
    if($num1 %2==0) echo "$num1 is even number";
    echo "<br>";
    $c=20;
    if($c>18) $d="Adult";
    echo $d;

    echo '<br>'.'<h2> short hand if else also known as ternary operator </h2>';
    $e=13;
    $f=($e<18) ? "Minor" : "Adult";
    echo $f;

    echo '<br>'.'<h2> Nested if statements </h2>';
   $e=15;
   if($e>10){
    echo "$e is greater than 10 <br>";
    if($e>20){
        echo "$e is greater than 20";
    }else{
        echo "$e is less than 20";
    }
   }

   echo "<h3> Switch Statement </h3>";
   $favcolor="red";
   switch($favcolor){
    case "red":
        echo "Your favorite color is red";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    default:
        echo "Your favorite color is neither red,blue, nor green";
   }
   echo "<h3>Combined Case Statements </h3>";
   $num=2;
   switch($num){
     case 1:
     case 2:
     case 3:
        echo "Number is between 1 and 3";
        break;
    case 4:
    case 5:
        echo "Number is between 4 and 5";
        break;
    default:
        echo "Number is greater than 5";
   } 

?>
</body>
</html>