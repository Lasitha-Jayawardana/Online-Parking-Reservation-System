<?php session_start() ?>
<?php
    if (empty($_SESSION["NIC"]) or empty($_SESSION["Name"])){
        session_unset();
 session_destroy  ();
    header('location:index.html');

       }

       ?>
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

    @keyframes sonarbadge {
        0% {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            opacity: 1;
        }
        100% {
            left: -8px;
            right: -8px;
            top: -8px;
            bottom: -8px;
            opacity: 0;
        }
    }
.blink {
        position: relative;
    }

    .blink:before {
        content: '';
        position: absolute;
        border: solid 4px;
        border-color: #33b5e5;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        opacity: 0;
        border-radius: inherit;
        width: auto;
        height: auto;
        animation: sonarbadge 1.5s infinite;
    }
.btn-success{

background-image: linear-gradient(to bottom,#00A300 0,#339266 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFE85B54', endColorstr='#FFB22520', GradientType=0);
    border-color: #00A300;
    box-shadow: inset 0 1px 0 rgba(242,164,162,.6), 0 1px 2px rgba(0,0,0,.05);

}


.boxshadow{
    border: 1px solid #E3E9ED;
    border-radius: 3px;

    box-shadow: 1px 1px 3px rgba(11,34,57,0.2);

}



.draggable {
    position: absolute;
    z-index: 2;
   cursor: move;
}

 .car {
/*
*/

 display: flex;justify-content: space-around;border: solid 4px #FFFFFF ;
     box-shadow:  inset 0 0 0px 1px #33b5e5,0 0 0 1px #33b5e5;

     border-radius: 4px;   height: 40px; width:75px;
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

  .bike{
 /* background-image: url(bike.svg); */



display: flex;justify-content: space-around;
 border-radius: 4px;
    border: solid 4px #FFFFFF ;
     box-shadow:  inset 0 0 0px 1px #33b5e5,0 0 0 1px #33b5e5;
     height: 28px; width: 55px;
  }
   .bike:after{
      content: "";
      position: absolute;;
  left:0;
  right: 0;
  top:0;
  bottom: 0;
  opacity: 0.19;

    background-image: url(bike.svg);
    background-position: center;
 background-size: 100% 150%;

  }

  .direction{
  background-image: url(d.svg);


 background-position: center;
 background-size: 100% 300%; display: flex;justify-content: space-around;height: 15px; width:90px;
  }

.in{
  background-image: url(i.svg);


 background-position: center;
 background-size: 100% 100%; display: flex;justify-content: space-around;height: 45px; width: 50px;
  }
  .out{
  background-image: url(o.svg);


 background-position: center;
 background-size: 160% 120%;display: flex;justify-content: space-around;height: 45px; width:50px;
  }
   .margin{
  background-color: black;
 display: flex;justify-content: flex-start;height: 20px; width: 120px;
  }


.wrapper{
  width:70%;
}
@media(max-width:992px){
 .wrapper{
  width:100%;
}
}
.panel-heading {
  padding: 0;
	border:0;
}
.panel-title>a, .panel-title>a:active{
	display:block;
	padding:15px;
  color:#555;
  font-size:16px;
  font-weight:bold;
	text-transform:uppercase;
	letter-spacing:1px;
  word-spacing:3px;
	text-decoration:none;
}
.panel-heading  a:before {
    font-family: "Font Awesome 5 Free";
     font-weight: 900;
     content: "\f13a";
   float: right;
   margin-right: 10px;
   transition: all 0.5s;
}
.panel-heading.active a:before {
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	transform: rotate(180deg);

}


.list-group{

display: grid;
    grid-gap: 10px;
    grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
}
.panel-icon{

    float: right;
    margin-right: 10px;
    transition: all 0.5s;
}



</style>
</head>
<body>





 <nav  class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end pl-1">
    <i class="fas fa-car-alt fa-2x " style="color: white;"></i>
       <a class="navbar-brand mr-auto  ml-2"
        style="font-size: large;" href="#">Parking Reservation System</a>

        <button onclick="window.location.href = 'Log_Out.php';" class="btn btn-sm btn-success mr-4 ml-auto" >Log Out &nbsp;<i class="fas fa-sign-out-alt" style="color: white;"></i></button>
     <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon btn-sm"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">

         <ul class="navbar-nav text-right">

            <li class="nav-item">
                 <i class="fas fa-user-shield" style="color: white;"></i>&nbsp;&nbsp;<a class="navbar-text" style="color: white;" >MR. <?php echo $_SESSION['NameF'] ?> <?php echo $_SESSION['Name'] ?></a>
            </li>
        </ul>
    </div>


</nav>



   <h4 class="text-center mt-3 mb-3 ">Parking Map</h4>






<div id="accordion" class="boxshadow" style="margin: 12px;max-width: 700px;">
  <div class="card">
    <div style="padding: 6px;" class="card-header panel-heading active" role="tab" id="headingOne">

        <a style="padding: 6px;height: 8px;text-decoration: solid;" role="button" data-toggle="collapse" data-parent="#accordion"
        href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Available  Slots <!--<i class="fas fa-chevron-circle-down panel-icon mt-1"></i>-->
        </a>

    </div>


     <div id="collapseOne" style="padding-top: 2px;" class="list-group panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">



      </div>



 </div>

</div>


 <div id="alet" class="alert alert-warning mx-5">

     Your reservation Valid till &nbsp;<strong id="countdown"></strong> .
  </div>


<div style="width: 100%;height:70vw;border: solid 2px #0066CC;border-radius: 2px;overflow: auto;position: relative" class="boxshadow">



 <?php       include("PHP.php");

      $getcustomer = new Database();
    $query= "SELECT Value AS height FROM setting WHERE Type = 'MapH';";

   $result = $getcustomer->Query($query) ;


         $row=mysqli_fetch_array($result);

            $h=$row['height'] ;
    $query= "SELECT Value AS width FROM setting WHERE Type = 'MapW';";

   $result = $getcustomer->Query($query) ;


         $row=mysqli_fetch_array($result);
        $w=$row['width'] ;

  ?>


<div id="slt" style="height:<?php echo $h ?>;position: relative;width:<?php echo $w ?>;">
                                            <!-- border: solid 2px #AD0000;border-radius: 2px;-->


<?php
$view=new View_Map("view");

       echo $view->map;
?>



 </div>
 </div>

   <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Reserve Parking Slot</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <label style="vertical-align: -webkit-baseline-middle;margin: auto;">Slot Number :&nbsp; </label>
          <label style="vertical-align: -webkit-baseline-middle;margin: auto;"><b id="sltnum">12</b></label>
          <i id="slticon" class="fas fa-car-alt fa-3x float-right mr-4" style="color: black;"></i>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">

          <button type="button" class="btn btn-success btn-sm"
  style="font-size: small;float:right;margin-right: 10px;" onclick="reserve()">Reserve Now</button>
  <button type="button" class="btn btn-secondary btn-sm" style="font-size: small;" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>



   <!-- The Modal -->
  <div class="modal fade" id="cModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Cancel this Reservation</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <label style="vertical-align: -webkit-baseline-middle;margin: auto;">Slot Number :&nbsp; </label>
          <label style="vertical-align: -webkit-baseline-middle;margin: auto;"><b id="csltnum">12</b></label>
          <i id="cslticon" class="fas fa-car-alt fa-3x float-right mr-4" style="color: black;"></i>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">

          <button type="button" class="btn btn-danger btn-sm"
  style="font-size: small;float:right;margin-right: 10px;" onclick="cancel()">Cancel Now</button>
  <button type="button" class="btn btn-secondary btn-sm" style="font-size: small;" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>



    <select id='zooming' onchange="zoomings(this);" class="rounded form-control-sm float-right m-2 shadow" style="width:75px;">
<option  value="25%">25%</option>
<option value="50%">50%</option>
<option value="75%">75%</option>
<option value="100%" selected="selected">100%</option>
<option value="150%">150%</option>
<option value="200%">200%</option>
<option value="250%">250%</option>
<option value="300%">300%</option>
</select>
           <!--border: solid 2px;-->
 <div class="container d-flex justify-content-around mt-4 flex-wrap">
    <div style="height: 4vw;display: inline-flex;min-height: 25px;"  class="boxshadow mb-2">
         <div  style="height: auto;width: 4vw;min-height: 25px;min-width:25px;background-color: #14FF14;display:inline-flex;border-radius: 3px;border: solid 1px #000000;">
         </div>   <span style="align-self: center;font-size:15px;"> &nbsp;Reserved&nbsp;&nbsp;&nbsp;</span> </div>


    <div style="height: 4vw;display: inline-flex;min-height: 25px;" class="boxshadow mb-2">

         <div  style="height: auto;width: 4vw;min-height: 25px;min-width:25px;background-color: #FFFFFF;display:inline-flex;border-radius: 3px;border: solid 1px #000000;">
         </div>   <span style="align-self: center;font-size:15px;"> &nbsp; Available&nbsp;&nbsp;&nbsp;</span> </div>


     <div style="height: 4vw;display: inline-flex;min-height: 25px;" class="boxshadow">
         <div  style="height: auto;width: 4vw;min-height: 25px;min-width:25px;background-color: #CC0000;display:inline-flex;border-radius: 3px;border: solid 1px #000000;">
         </div>   <span style="align-self: center;font-size:15px;">  &nbsp;Using&nbsp;&nbsp;&nbsp;</span> </div>

  </div>
       <div class="cc"></div>
 <!--
  <button onclick="ddd()">accascsa</button>-->

    <br><br><br><br>

  <script>

  <?php


      $check = new Database();
      $nic=$_SESSION['NIC'] ;


    $query= "SELECT COUNT(NIC) AS isreserved ,Slot_ID,E_Time,Status FROM reservation WHERE NIC = '$nic';";

   $result = $check->Query($query) ;
        echo 'var reserveid = 0;';
         $row=mysqli_fetch_array($result);

            $hh=$row['isreserved'] ;
           if ($hh>0){
               $ww= $row['Slot_ID'] ;
               echo 'var state = "'.$row['Status'] .'";';
                echo 'var reserveid = "'.$ww.'";';
            if ($row['Status'] !="Using"){
                echo ' $("#alet").show(); ';

                 echo 'var countDownDate = new Date("'. $row['E_Time'].'").getTime();

var x = setInterval(function() {

    var now = new Date().getTime();

   var distance = countDownDate - now;

    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s ";

   if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
    alert("Your Last Reservation has been Expired ! ");
    cancel();
  }
}, 1000);';


            } else{
                 echo ' $("#alet").hide(); ';
            }




           }else{
             echo ' $("#alet").hide(); ';
           }


   echo 'var isreserved = "'.$hh.'";';


   ?>









    var slotid;

if(typeof(EventSource) !== "undefined") {

    var source = new EventSource("SSE.php");


    source.onmessage = function(event) {


    var jd= JSON.parse(event.data);



    $('.slot').each(function(index,item){

               ob = jd.find(ob=>ob.sid==item.id);


    if (reserveid==item.id){


           if (!ob){
              window.location.href = "Reserve.php";
           }
            if (ob.sstatus=="Using"){
               console.log(item.style.backgroundColor);
            if (state=="Reserved"){
              window.location.href = "Reserve.php";
            }

                   $("#" +item.id +"").addClass("blink");
            item.style.backgroundColor = "#F02222";

            }else{
                $("#" +item.id +"").addClass("blink");
            item.style.backgroundColor = "#14FF14";

            }



    } else
    {





       if (ob != undefined){




       if (ob.sstatus=="Reserved"){

            item.style.borderColor = "#14FF14";

            ell= $('#a' + item.id + '')[0] ;

            if (ell){
               re = document.getElementById("a" + item.id);


               console.log(re.parentNode);

             re.parentNode.remove();

             }

         }else if (ob.sstatus=="Using"){

               item.style.borderColor ="#F02222";
               ell= $('#a' + item.id + '')[0] ;
               if (ell){
               re = document.getElementById("a" + item.id);


               console.log(re.parentNode);

             re.parentNode.remove();

             }




         }

         }else{
          item.style.borderColor = "#FFFFFF";
            el= $('#a' + item.id + '')[0] ;

         if (!el){

          if (isreserved =='1'){

            var dis =' disabled="disabled" ';

            } else{
                var dis='';
            }

           if (item.id[0]=='c'){
             var obj='<a class="list-group-item list-group-item-action"><span ><i class="fas fa-car-alt fa-2x" style="color: black;">&nbsp;</i> <span style="vertical-align:  super;"> Slot ' +item.id.substr(1) + '</span></span><button ' + dis + ' id="a' + item.id + '" type="button" class="btn btn-success btn-sm" style="font-size: small;float:right;margin-right: 3px;" onclick="show(this)">Reserve</button></a>';


            $("#collapseOne").append(obj);
          }else if (item.id[0]=='b'){
            var obj='<a class="list-group-item list-group-item-action"><span ><i class="fas fa-motorcycle fa-2x" style="color: black;">&nbsp;</i> <span style="vertical-align:  super;"> Slot ' +item.id.substr(1) + '</span></span><button ' + dis + ' id="a' + item.id + '" type="button" class="btn btn-success btn-sm" style="font-size: small;float:right;margin-right: 3px;" onclick="show(this)">Reserve</button></a>';


            $("#collapseOne").append(obj);
          }

  }






         }
           }
          });







    /*jd.forEach(function(item,index){



      console.log(item.id);
    });*/




    };
} else {

}


 function reserve(){


    var  nic="<?php echo $_SESSION['NIC'] ?>"  ;
    var status= "Reserved";
   var jdata = "INSERT INTO reservation(Slot_ID,NIC,Status,R_Time,E_Time) VALUES('" + slotid + "','" + nic + "','"+ status +"'";


 console.log(jdata);

   $.ajax({

 /*  dataType: 'json',    */
    cache: false,
  type:'POST',
  beforeSend: function(){

  },

  url:'setReserve.php',
  data: {data : jdata },

   success:function(data){

if(data==0){

      alert("Reservation Successfully!");

       window.location.href = "Reserve.php";

  }else{
      alert("Reservation Fail!." + data);

  }
   $("#myModal").modal('hide');

  } , error: function(xhr,stat , error){
       alert("An error occured: " + xhr.status + " " + error);


    }
  ,

  complete: function(){
  }

});
}






function show(obj){

if (isreserved !='1'){

         var id =obj.id;





    if (id.charAt(0)=='a'){
      id=id.substr(1);

    }
     /* alert(id);*/
     document.getElementById("sltnum").innerHTML= id.substr(1);


        if (document.getElementById(id).style.borderColor == "rgb(255, 255, 255)"){

      if (id.charAt(0) == 'c'){
           $("#slticon").removeClass("fa-motorcycle").addClass("fa-car-alt");
          }else{
            $("#slticon").removeClass("fa-car-alt").addClass("fa-motorcycle");
          }


      slotid = id ;


     if (id.charAt(0) == 'c' || id.charAt(0)== 'b'){


       $("#myModal").modal();
    }

     }


  } else if(reserveid==obj.id && state=="Reserved"){

  document.getElementById("csltnum").innerHTML= obj.id.substr(1);

    if (obj.id.charAt(0) == 'c'){
           $("#cslticon").removeClass("fa-motorcycle").addClass("fa-car-alt");
          }else{
            $("#cslticon").removeClass("fa-car-alt").addClass("fa-motorcycle");
          }
     $("#cModal").modal();


  }
  console.log(reserveid);
  console.log(obj.id);
     }





   function cancel(){


 var jdata = "DELETE FROM reservation WHERE Slot_ID = '" + reserveid + "';";
 console.log(jdata);

   $.ajax({

 /*  dataType: 'json',    */
    cache: false,
  type:'POST',
  beforeSend: function(){

  },

  url:'Remove.php',
  data: {data : jdata },

   success:function(data){

if(data==0){
      alert("Your Reservation was canceled!");

     window.location.href = "Reserve.php";

  }else{
      alert("Cancel Fail!.");

  }
   $("#cModal").modal('hide');

  } , error: function(xhr,stat , error){
       alert("An error occured: " + xhr.status + " " + error);


    }
  ,

  complete: function(){
  }

});
}





    function zoomings(optionSel)
{

if (navigator.userAgent.indexOf("Firefox")!=-1)
{
var OptionSelected = optionSel.selectedIndex;
var optionT = document.getElementById ("zooming");
var len=optionT.options[OptionSelected].text.length-1;
var val = optionT.options[OptionSelected].text.substring(0,len)/100;
var div = document.getElementById ("slt");
var dd="scale("+ val +")";

div.style.MozTransform = dd;
div.style.MozTransformOrigin = "0 0";
}
else{
var OptionSelected = optionSel.selectedIndex;
var val = optionSel.options[OptionSelected].text;
var div = document.getElementById ("slt");
div.style.zoom = val;
}
}


          $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });












  </script>


















</body>

