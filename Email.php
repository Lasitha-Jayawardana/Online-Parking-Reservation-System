

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $data = json_decode(stripslashes($_POST['data']));

   /*print_r($data);  */
     $to =$data->to;

  include("PHP.php");

      $get = new Database();

    $query= "SELECT Email FROM user WHERE '$to' = NIC ;";
   $result = $get->Query($query) ;


         $row = mysqli_fetch_array($result);

            $to = $row['Email'] ;



$subject = $data->subject;

$message =$data->msg;


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



$headers .= 'From: sltclasith@gmail.com' . "\r\n";
/*$headers .= 'Cc: myboss@example.com' . "\r\n";*/

mail($to,$subject,$message,$headers);





   /* echo json_encode($data) ;  */

}
?>
