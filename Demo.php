<!DOCTYPE html>
<html lang="en">
<head>
  <title>Parking Reservation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="b.css" >
   <link rel="stylesheet" type="text/css" href="fontawesome-free-5.3.1-web/css/all.css">

  <link rel="stylesheet" href="dist/pretty-checkbox.min.css" />
    <script src="jq.js" ></script>
    <script src="pop new.js">  </script>
   <script src="b.js">  </script>
     <style type="text/css">
      .car {
/*
*/
      position: relative;;
 display: flex;justify-content: space-around;border: solid 12px #FFFFFF ;
     box-shadow:  inset 0 0 0px 1px #33b5e5,0 0 0 1px #33b5e5;

     border-radius: 4px;   height: 140px; width:275px;
     border-color: #0FFF17 ;
  /*transform: scale(1.8,1);*/
  }


  .car:after{
      content: "";
      position: absolute;;
  left:0;
  right: 0;
  top:0;
  bottom: 0;
  opacity: 0.19;

    background-image: url(car.svg);
      background-position: center;
 background-size: 100% 200%;
  }
     </style>
   </head>

<body class="p-4">
  <h2 style="text-align: center;">Parking Test</h2>
   <br><br>
                                      <!--border: solid 2px;-->



 <div id="sltt" onclick="ca()" style="" class="draggable slot car m-4">
    <span style="position: absolute;margin: auto;align-self: center;color: #880e4f;
    font-size: 40px;" class="text-center">
          <b id ="tex">Not Use</b></span>
</div>
   <div class="d-block mt-3 ml-auto mr-auto" style="">

     Slot ID :     <input id="sltnum" type="text" class="" style="height: 30px;
     font-size: smaller;width: 60px;  " maxlength="3" required="required"/>

       <button onclick=" uss();" style="height: 30px; "
       class="btn btn-outline-success btn-sm m-auto" type="button">Update Status</button>

    </div>
<script>
ob= document.getElementById('sltt');

     var b=true;

 function ca(){
     console.log(b);
    if (b==true){

    ob.style.borderColor = "#FF2010";
    document.getElementById("tex").innerHTML="Park";

    b=false;

     }else if(b==false){
       ob.style.borderColor = "#0FFF17";
       b=true;
       document.getElementById("tex").innerHTML="Leave";
     }

 }



  function uss(){

             var slotid = document.getElementById("sltnum").value;

  if (document.getElementById("tex").innerHTML =="Park"){
         use();

  }else{

      var jdata =slotid;







 console.log(jdata);

   $.ajax({

 /*  dataType: 'json',    */
    cache: false,
  type:'POST',
  beforeSend: function(){

  },

  url:'Demophp.php',
  data: {data : jdata },

   success:function(data){

if(data==0){
      use();
      /*

       window.location.href = "Reserve.php";*/

  }else{
      alert("Fail!.");

  }


  } , error: function(xhr,stat , error){
       alert("An error occured: " + xhr.status + " " + error);


    }
  ,

  complete: function(){
  }

});
 }
}



 function use(){

             var slotid = document.getElementById("sltnum").value;

  if (document.getElementById("tex").innerHTML =="Park"){

       var jdata ="UPDATE reservation SET Status = 'Using',U_Time = time WHERE Slot_ID ='" + slotid + "';" ;

  }else{
     var jdata = "DELETE FROM reservation WHERE Slot_ID = '" + slotid + "';";

  }




 console.log(jdata);

   $.ajax({

 /*  dataType: 'json',    */
    cache: false,
  type:'POST',
  beforeSend: function(){

  },

  url:'Demophp.php',
  data: {data : jdata },

   success:function(data){

if(data==0){

      /*alert("Reservation Successfully!");

       window.location.href = "Reserve.php";*/

  }else{
      alert("Fail!.");

  }


  } , error: function(xhr,stat , error){
       alert("An error occured: " + xhr.status + " " + error);


    }
  ,

  complete: function(){
  }

});
}




</script>

</body>