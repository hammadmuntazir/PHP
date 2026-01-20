<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP output</title>
    </head>
    <body>
      <?php 
        echo "hello world";
        echo ("<h1>This is Hammad</h1>");
        $x=5;
        $y="Hammad";
        $cars=array("Volvo","BMW","Toyota");
        print(var_dump($x));
        print("<br>");
        print(var_dump($y));
        print("<br>");
        print(var_dump($cars));
        echo strlen($y);
        echo str_word_count($y);
        $z = "Hello World!";
echo str_replace("World", "Dolly", $z);
        ?>
    </body>
    </html>