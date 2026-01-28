<?php
// session  ky related koi bi kaam krna hai tu subsy page ky top pr session ko start krna hai
session_start();

print_r($_SESSION);

?>
<html>
    <head>

    </head>
    <body>
        <?php
         if(isset($_SESSION['favcolor'])){
         echo  "Favorite Color :" . $_SESSION["favcolor"];
         }else{
          echo "Session is not created";
         };
        ?>
    </body>
</html>