<!-- 
 Step1: session_start()
 Step2: $_SESSION[name]=value; ->Set session name & value
 Step3:echo $_SESSION[name]; -> get session value
 -->
 <!-- DELETe session
  step1:session_unset()-> remove all session variables
  step2: session_destroy ->Destroy the session -->

  <?php
 session_start();
 $_SESSION["favcolor"]="red";

 echo "Session Variable is set. ";
 ?>
