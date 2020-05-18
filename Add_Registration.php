<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /*print_r($_POST);*/

        if(isset($_POST['superid'])){

              $s= trim($_POST['superid']);
              $a= trim($_POST['NIC']);
              $b=trim($_POST['First'] ) ;

              $c=trim($_POST['Last']) ;
              $d= trim($_POST['Password']);
              $e=trim($_POST['Email']);
              $f= trim($_POST['Cont_No'] );
              $g= trim($_POST['Address'] );

            $query = "INSERT INTO user(NIC,First,Last,Password,Email,Cont_No,Address,Super_ID)
    VALUES('$a','$b','$c','$d','$e','$f','$g','$s');
            ";

        }else{

             $v_no=implode("|",$_POST["V_No"]);
              $a= trim($_POST['NIC']);
              $b=trim($_POST['First'] ) ;

              $c=trim($_POST['Last']) ;
              $d= trim($_POST['Password']);
              $e=trim($_POST['Email']);
              $f= trim($_POST['Cont_No'] );
              $g= trim($_POST['Address'] );

            $query = "INSERT INTO user(NIC,First,Last,Password,Email,Cont_No,Address,Vehical_No)
    VALUES('$a','$b','$c','$d','$e','$f','$g','$v_no');
            ";
        }



      include("PHP.php");
      $add = new Database();

   $result = $add->Query($query) ;

    if ($result) {

       $msg['success']='Registration successfully';
      echo json_encode($msg) ;

} else {
    $errno=$add->geterrno();
     $msg['errno']=$errno;

    echo json_encode($msg) ;

}


    }


   exit();


?>