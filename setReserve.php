<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include("PHP.php");
                     $b=trim($_POST['data']);

           date_default_timezone_set("Asia/Colombo");

     $time = date("Y-m-d H:i:s");
  $date=date_create($time);


            $check = new Database();

            $dd="ETime";
            $qu= "SELECT Value FROM setting WHERE Type ='$dd';";

   $result = $check->Query($qu) ;

    if ($result) {
         $row=mysqli_fetch_array($result);
          $t=$row['Value'];

         }


              $extime = date_add($date,date_interval_create_from_date_string(''.$t.' minutes'));

             $extime= date_format($extime,"Y-m-d H:i:s");

        $b= $b . ",'".$time."','".$extime."');";




      $add = new Database();

   $result = $add->Query($b) ;


 }
     $errno=$add->geterrno();
    echo $errno;

  exit();


?>