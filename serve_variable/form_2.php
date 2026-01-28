<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
     <h2>for printing on same page</h2>
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        Name:<input type="text" name="fname"><br><br>
        Age:<input type="text" name="age"><br><br>
        <input type="submit" name="save">
</form>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Name:<input type="text" name="fname"><br><br>
    Age:<input type="text" name="age"><br><br>
<?php
// mein chata hu jub page open ho tub run na ho balky jub submit ho tub run ho

if(isset($_POST['save'])){
    echo $_POST['fname']."<br>";
    echo $_POST['age']."<br>";
}

//mean jesay hi save button set ho jaye tu iska code execute krdain

?>
</body>
</html>