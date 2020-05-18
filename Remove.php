<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {



              $b=trim($_POST['data']);



      include("PHP.php");
      $add = new Database();

   $result = $add->Query($b) ;


 }
     $errno=$add->geterrno();
    echo $errno;

  exit();


?>