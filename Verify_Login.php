<?php session_start() ?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   /* print_r($_SERVER['HTTP_HOST']);  */

          $a= trim($_POST['NIC']);

                $b= trim($_POST['password']);


      include("PHP.php");

      $check= new Database();

    $query = "SELECT * FROM user WHERE NIC = '$a' AND Password = '$b'";

   $result = $check->Query($query) ;


      if ($result) {

      if ( mysqli_num_rows($result)==1) {

          $msg['isvalid']="valid";

          $row=mysqli_fetch_array($result);

        /*  print_r($row) ;  */
            $_SESSION["Name"]=$row['Last'];
            $_SESSION["NameF"]=$row['First'];
            $_SESSION["NIC"]=$a;

          if ($row['Super_ID'] == '0'){

             $_SESSION["Type"]="Admin";
            $msg['url'] = 'Manage Slot.php';

          } elseif ($row['Super_ID'] == '1000'){
                   $_SESSION["Type"]="User";
              $msg['url'] =  'Reserve.php';

          }else{



          $_SESSION["Type"]="Supervisor";
             $msg['url'] =  'View Map.php';
          }





      /*     header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/Reserve.php");
           die;
*/

        } else{
            $msg['isvalid']="invalid";
        }



       echo json_encode($msg) ;


} else {

    $errno=$check->geterrno();
      $msg['errno'] = $errno;

    echo json_encode($msg) ;


}




    }

      /* */
   exit();



?>