<?php

  header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');




  include("PHP.php");

      $sse = new Database();

    $query= "SELECT * FROM reservation ORDER BY Slot_ID ASC ;";

   $result = $sse->Query($query) ;

    if ($result) {

        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {


             $d['sid']= $row['Slot_ID'];
             $d['sstatus'] = $row['Status'];

             array_push($data,$d);


        }

        }


       $s = json_encode($data) ;
       
       echo "data:{$s}\n\n";





flush();

?>