<?php


        include("PHP.php");
      $getcustomer = new Database();

    $query= "SELECT E_Time,NIC FROM reservation ORDER BY E_Time ASC ;";

   $result = $getcustomer->Query($query) ;
  
      date_default_timezone_set("Asia/Colombo");    
    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
          $d=$row['E_Time'] ;
          $d=date_create($d);

           $time = date("Y-m-d H:i:s");
           $date=date_create($time);

          $h=date_diff($date,$d);
print_r($h->format("%R%i")) ;
echo '<br>';
       if ($h->format("%R%i")<"+5"){

              $too = $row['NIC'];
           $get = new Database();

    $query= "SELECT Email FROM user WHERE '$too' = NIC ;";

   $result = $get->Query($query) ;


         $ro = mysqli_fetch_array($result);

            $to = $ro['Email'] ;

        $subject = "Parking Reservation System";

$message ="Sorry ! ,Your Reservation is Expired ";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



$headers .= 'From: <Email>' . "\r\n";  //Email, shown as From


mail($to,$subject,$message,$headers);
echo $to;



$query= "DELETE FROM reservation WHERE NIC = '$too';";

   $result = $getcustomer->Query($query) ;


         }



        }

        }

?>