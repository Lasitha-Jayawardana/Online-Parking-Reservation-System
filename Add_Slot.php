<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $data = json_decode(stripslashes($_POST['data']));



     include("PHP.php");
     $del = new Database();

            $query = "DELETE FROM slot;";

            $result = $del->Query($query) ;

            if ($result) {

       $msg['errno']=0;


} else {
    $errno=$add->geterrno();
     $msg['errno']=$errno;



}
          $result = null;
          $query = null ;
           $del=null;
     $add = new Database();

     foreach($data as $ob){



     if (empty($ob->slotid)){

     $aa=$ob->width;
      $bb=$ob->height;

     $query = "UPDATE setting SET Value='$aa' WHERE Type = 'MapW';";

     $result = $add->Query($query) ;

     $query = "UPDATE setting SET Value='$bb' WHERE Type = 'MapH';";

     $result = $add->Query($query) ;

     }else{


        $a=$ob->slotid;
      $b=$ob->type;
      $c=$ob->top;
      $d=$ob->left;
      $e=$ob->deg;


         $query = "INSERT INTO slot(SlotID,Type,Tp,Lft,Deg)
    VALUES('$a','$b','$c','$d','$e');";



      $result = $add->Query($query) ;


     }


      if ($result) {

       $msg['errno']=0;


} else {
    $errno=$add->geterrno();
     $msg['errno']=$errno;
     $msg['err']=mysqli_error($add ->con);


}




     }

      echo json_encode($msg) ;



            }

      exit();
?>