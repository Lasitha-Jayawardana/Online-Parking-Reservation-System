<?php


                include("PHP.php");
                     $b=trim($_POST['data']);



               $check = new Database();


            if ($b[0]=="U"){

              date_default_timezone_set("Asia/Bangkok");

     $time = date("Y-m-d H:i:s");
    $b = str_replace("time","'".$time."'",$b);


            }else if ($b[0]=="D"){



            }else{


                 $d="SELECT NIC,U_Time FROM reservation WHERE Slot_ID = '$b';";

            $result = $check->Query($d) ;
              $row=mysqli_fetch_array($result);
        $w=$row['NIC'] ;
        $t = $row['U_Time'];
         date_default_timezone_set("Asia/Bangkok");

    

          $t=date_create($t);
          /*print_r($t);
*/


     $time = date("Y-m-d H:i:s");
  $date=date_create($time);
 /*
  echo $time;
   print_r($date);*/
          $h=date_diff($date,$t);
       /*print_r($h); */

        echo $h->format("%h");
       if ($h->format("%h")<"1"){

         $hour="1";
       } else{
           $hour =$h->format("%h");
       }



        $d = "SELECT Last FROM user WHERE NIC= '$w';";
            $result = $check->Query($d) ;
              $row=mysqli_fetch_array($result);
        $ww=$row['Last'] ;

             $b = "INSERT INTO bill(NIC,Last,Hours) VALUES('$w','$ww','$hour');";
            }



   $result = $check->Query($b) ;


?>