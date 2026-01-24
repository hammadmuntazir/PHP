<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops using Php</title>
    
</head>
<body>
    <?php 
    echo '<h1 style="text-align:center;background-color:yellow;"> Loop </h1>';
    echo '<h2 style="background-color:green;"> While Loop </h2>';
    $i=1;
    while($i<=5){
        echo "<p style='text-align:center;background-color:lightblue;'> The number is: $i <br></p>";
        $i++;
    }
    echo '<h2 style="background-color:green;">For Loop </h2>';
    for($j=1;$j<=5;$j++){
    echo "<p style='text-align:center;background-color:lightgreen;'>The number is : $j </p>";
    }
    echo '<h2 style="background-color:green;"> Do While Loop </h2>';
    $k=1;
    do{
        print "<p style='text-align:center;background-color:lightgrey;'> The number is : $k </p>";
        $k++;
        }while($k<=5);

   echo '<h3 style="background-color:green;"> PHP Break statement </h3>';
    $num1=2;
    for($num2=1;$num2<=10;$num2++){
        if($num2==5){
            break;
        }
        echo "<p style='text-align:center;
        background-color:lightblue;'> $num1*$num2=".$num1*$num2."</p>";
    }
    echo "<h3 style='background-color:orange;'>PHP Continue Statement </h3>";
    for($num3=1;$num3<=10;$num3++){
        if($num3==5){
            continue;
        }
        echo "<p style='text-align:center;background-color:lightgrey;'>$num1*$num3=".$num1*$num3."</p>";
    }
    echo "<h2 style='background-color:green;'> For Each Loop </h2>";
    $colors=array("Red","Green","Blue","Yellow");
    foreach($colors as $value){
        echo "<p style='text-align:center;background-color:lightpink;'> $value </p>";
    }
    $members=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($members as $key => $value){
        echo "<p style='text-align:center;background-color:lightyellow;'> $key : $value </p>";
    }
?>
    
</body>
</html>