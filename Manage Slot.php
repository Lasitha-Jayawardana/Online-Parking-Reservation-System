<?php session_start() ?>
<?php
    if (empty($_SESSION["NIC"]) or empty($_SESSION["Name"])){
        session_unset();
 session_destroy  ();
    header('location:index.html');

       }

       ?>
<!DOCTYPE html>

<html>

<head>
 <title>Parking Reservation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="b.css" >
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.3.1-web/css/all.css">
   <link rel="stylesheet" type="text/css" href="sidebar.CSS">
  <link rel="stylesheet" href="pretty-checkbox.min.css" />
    <script src="jq.js" ></script>
    <script src="pop.js">  </script>
   <script src="b.js">  </script>
<style type="text/css">
 body {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent
}
.btn-success{

background-image: linear-gradient(to bottom,#00A300 0,#339266 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFE85B54', endColorstr='#FFB22520', GradientType=0);
    border-color: #00A300;
    box-shadow: inset 0 1px 0 rgba(242,164,162,.6), 0 1px 2px rgba(0,0,0,.05);


}
 .btn-outline-success{


    box-shadow:0 0 0 2px #00CC00;


}

.draggable {
    position: absolute;
    z-index: 9;
   cursor: move;
}


 .car {
/* background-image: url(car.svg);
*/

 background-position: center;
 background-size: 100% 200%; display: flex;justify-content: space-around;border: solid 4px #FFFFFF ;
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


 background-position: center;
 background-size: 100% 150%;
display: flex;justify-content: space-around;border: solid 4px #FFFFFF ;
     box-shadow:  inset 0 0 0px 1px #33b5e5,0 0 0 1px #33b5e5;

     border-radius: 4px; height: 28px; width: 55px;
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

</style>
</head>
<body>

 <nav style="background-color: #343a40;height: 54px;"  class="navbar navbar-expand-sm navbar-dark justify-content-end pl-1 fixed-top">
    <i style="padding: .25rem .5rem;color: white;
    font-size: .875rem;
    line-height: 1.5;" id="toggle-sidebar" class="fas fa-bars pl-0 bar"></i><i class="fas fa-car-alt fa-2x " style="color: white;"></i>
       <a class="navbar-brand mr-auto  ml-2"
        style="font-size: large;" href="#">Parking Reservation System</a>
      <button onclick="window.location.href = 'Log_Out.php';" class="btn btn-sm btn-success mr-2 ml-auto">Log Out &nbsp;<i class="fas fa-sign-out-alt" style="color: white;"></i></button> <!-- <button  class="btn btn-sm btn-success mr-4 ml-auto">Log Out &nbsp;<i class="fas fa-sign-out-alt" style="color: white;"></i></button>

   <!--    <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon btn-sm"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">

         <ul class="navbar-nav text-right">

            <li class="nav-item">
               <i class="fas fa-people-carry" style="color: white;"></i> &nbsp;&nbsp; <a class="navbar-text" style="color: white;">Mr. L.S. Jayawardana.</a>
            </li>
        </ul>
    </div>-->


</nav>




<div class="page-wrapper chiller-theme mt-5">
        <nav id="sidebar" class="sidebar-wrapper" style="margin-top: 54px;">
            <div class="sidebar-content">

                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/bootstrap4/assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span  class="user-name">
                            <strong><?php echo $_SESSION['NameF'] ?></strong>
                        </span>
                        <span class="user-role"><?php echo $_SESSION['Type'] ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span >Online</span>
                        </span>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Services</span>
                        </li>

                        <li >
                            <a href="Add Supervisor.php">
                                <i class="fas fa-user-plus"></i>
                                <span>Add Supervisor</span>

                            </a>

                        </li>
                         <li >
                            <a href="#" style="box-shadow: 0 0 0 0 red;">
                                <i class="far fa-edit"></i>
                                <span style="color: white;">Manage Parking Slots</span>

                            </a>

                        </li>
                         <li >
                            <a href="Manage Supervisor.php">
                                <i class="fas fa-user-tie"></i>
                                <span>Manage Supervisor</span>

                            </a>

                        </li>
                              <li >
                            <a href="Manage Customer.php">
                                <i class="fas fa-user-edit"></i>
                                <span>Manage Customer</span>

                            </a>

                        </li>
                             <li >
                            <a href="Parking Details.php">
                                <i class="fas fa-parking"></i>
                                <span>Parking Details</span>

                            </a>

                        </li>
                        <li >
                            <a href="View Map.php">
                                <i class="fas fa-eye"></i>
                                <span >View Map</span>

                            </a>

                        </li>
                         <li >
                            <a href="Bill Payment.php">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span >Pending Bills</span>

                            </a>

                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">

                <a href="Manage System Settings.php" data-toggle="tooltip" data-placement="top" title="Manage System Settings">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="Log_Out.php" data-toggle="tooltip" data-placement="top" title="Log Out">
                    <i class="fa fa-power-off" ></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content pb-5" style="overflow: visible;">

   <h4 class="text-center mt-3 mb-3 z">Manage Parking Slots</h4>

 <div class="d-flex" >
   <div style="display: flex;width: auto;margin-left: auto;margin-right: auto;">
             <!-- position: absolute;top:0;left:-90px;style="border: solid 2px #0BAD11;"
             -->


                              <!--border: solid 2px #AD0000;-->
     <div id="slt" style="width:90px;display: flex;flex-direction: column;border-radius: 2px;align-self: center;">
    <button id="c" class="btn btn-sm btn-outline-success ml-auto mr-auto mt-2 p-0" style="height: 60px;width: 60px;background-image: url(car.svg);


 background-position: center;
 background-size: 100% 150%;" onclick="Car()"></button>


   <button id="b" class="btn btn-sm btn-outline-success ml-auto mr-auto mt-4" style="height: 60px;width: 60px; background-image: url(bike.svg);


 background-position: center;
 background-size: 90% 150%;" onclick="Bike()"></button>
 <button id="en" class="btn btn-sm btn-outline-success ml-auto mr-auto mt-4" style="height: 60px;width: 60px;
  background-image: url(i.svg);


 background-position: center;
 background-size: 100% 93%;
 " onclick="Entrance()"></button>
 <button id="ex" class="btn btn-sm btn-outline-success ml-auto mr-auto mt-4" style="height: 60px;width: 60px; background-image: url(o.svg);


 background-position: center;
 background-size: 90% 150%;" onclick="Out()"></button>
 <button id="d" class="btn btn-sm btn-outline-success ml-auto mr-auto mt-4" style="height: 60px;width: 60px;background-image: url(d.svg);


 background-position: center;
 background-size: 80% 320%;" onclick="Direction()"></button>
  <button id="m" class="btn btn-sm btn-outline-success ml-auto mr-auto mt-4" style="height: 60px;width: 60px; background-image: url(m.svg);


 background-position: center;
 background-size: 50px 40px;" onclick="Margin()"></button>

    </div>

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


    <div id="map" style="border: solid 2px #AD0000;border-radius: 2px;
    height: <?php echo $h ?>;position: relative;width:<?php echo $w ?>;resize: both;overflow: auto;">




<?php
$view=new View_Map("manage");

if ($view->slot_ID >0){
echo '<script>
var slot_ID = '.$view->slot_ID.'

</script>';

}
if ($view->other >0){
 echo '<script>
var other = '.$view->other.'
</script>';
}
       echo $view->map;
?>






    </div>


                   <!-- position: absolute;right: 30px;
                    -->
   <!--  <div style="display: flex;border: solid 2px #AD0000;border-radius: 2px;top:240px;position: relative;"> border: solid 2px #0B10AD;
   -->            <!---->
    <div  class="float-right;" style="position: relative;width:90px;display: flex;flex-direction: column;border-radius: 2px;height: 200px;align-self: center;">


     <div class="d-block mt-3 ml-auto mr-auto" style="">
         <input id="deg" type="number" class="form-control" style="height: 30px;font-size: smaller;width: 60px;  " max="360" min="0" maxlength="3" required="required"/>

             <button onclick="setangle()" style="height: 30px; " class="btn btn-outline-success btn-sm m-auto" type="button">Degree</button>

     </div>

   <button id="del" class="btn btn-sm btn-danger ml-auto mr-auto mt-2" style="height: 30px;width: 60px;" onclick="del()">Del</button>
   <button id="save" class="btn btn-sm btn-success ml-auto mr-auto mt-2" style="height: 30px;width: 60px;" onclick="save()">Save</button>
 <button id="reset" class="btn btn-sm btn-success ml-auto mr-auto mt-2" style="height: 30px;width: 60px;" onclick="window.location.href='Manage Slot.php'">Reset</button>


    </div><!--</div> -->


    </div>
</div>

    </main>
    <!-- page-content" -->
    </div>



</body>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }

    });

    $("#toggle-sidebar").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });


});

  $(".blink").each(function(){
console.log($(this).css('border-width') );
if (parseInt($(this).css('border-width')) <=0){
 var ff=  $(this).css('background-color');
console.log(ff);
$(this).css('border-color',ff) ;
}

});




/*
 var ff= window.screen.width;
console.log(ff);
var gg= window.screen.height;
console.log(gg);
*/



if (typeof slot_ID != 'undefined'){
slot_ID=slot_ID + 1 ;
} else{
  slot_ID=1;
}
if (typeof other != 'undefined'){
other=other + 1 ;
} else{
  other=1;
}

var selected;
var deleted=[];

function Car(){

  if (deleted.length >0){

      deleted.sort(function(a,b){return a - b});
      console.log(deleted);


   ID= deleted[0];
   deleted.shift();
   console.log(deleted);
  }else{
      ID=slot_ID;
      slot_ID=ID + 1;
  }
   var obj='<div id="c' + ID + '" onclick="select(this)" onmousedown="drg(this)" class="draggable slot car"> <span style="position: absolute;margin: auto;align-self: center;color: #F44336;font-size: 27px;" class="text-center"><b> ' + ID + '</b></span></div>';
 $("#map").append(obj);

}

function Bike(){

  if (deleted.length >0){

      deleted.sort(function(a,b){return a - b});
      console.log(deleted);


   ID= deleted[0];
   deleted.shift();
   console.log(deleted);
  }else{
      ID=slot_ID;
      slot_ID=ID + 1;
  }
   var obj='<div id="b' + ID + '"onclick="select(this)" onmousedown="drg(this)" class="draggable slot bike"> <span style="position: absolute;margin: auto;align-self: center;color: #F44336;font-size: 20px;" class="text-center"><b> ' + ID + '</b></span></div>';
 $("#map").append(obj);

}

function Direction(){

      ID=other;
      other=other + 1;

   var obj='<div id="d' + ID + '" onclick="select(this)" onmousedown="drg(this)" class="draggable slot direction"> </div>';
 $("#map").append(obj);

}

function Entrance(){

      ID=other;
      other=other + 1;

   var obj='<div id="i' + ID + '" onclick="select(this)" onmousedown="drg(this)" class="draggable slot in"> </div>';
 $("#map").append(obj);

}

 function Out(){

      ID=other;
      other=other + 1;

   var obj='<div id="o' + ID + '"onclick="select(this)" onmousedown="drg(this)" class="draggable slot out"> </div>';
 $("#map").append(obj);

}


 function Margin(){

      ID=other;
      other=other + 1;

   var obj='<div id="m' + ID + '"  onclick="select(this)" onmousedown="drg(this)" class="draggable slot margin"> </div>';
 $("#map").append(obj);

}







function del(){
$("#" + selected).remove();
var slotnum = selected.match(/\d/g);
slotnum = slotnum.join("");
deleted.push(slotnum);
selected =null;
 console.log(deleted);

}


 function save(){
     var dta = [];

     $('.slot').each(function(index,item){
 id =  $(item).attr("id");
  var slotnum = id.match(/\d/g);
slotnum = slotnum.join("");


     var degree= rotate_degree($(item));

var px =  $("#" + id).css("left").slice(0,-2);

   var pcLeft = 100 * px/ $("#map").width();

console.log(px);
px =  $("#" + id).css("top").slice(0,-2);

var pcTop = 100 * px/ $("#map").height();
console.log(px);



    var arry= {};
  arry['slotid'] = slotnum;
  arry['type'] = id.charAt(0);
  arry['top'] = pcTop.toFixed(2) + "%";
  arry['left'] =pcLeft.toFixed(2) + "%";
  arry['deg'] = degree;

   dta.push(arry);
    arry=null;

 });
    larry={};

 larry['width']= document.getElementById("map").style.width;

larry['height'] = document.getElementById("map").style.height;
dta.push(larry);

 var jdata = JSON.stringify(dta);

 console.log(jdata);


   $.ajax({

   dataType: 'json',
    cache: false,
  type:'POST',
  beforeSend: function(){
    loading(true);
  },

  url:'Add_Slot.php',
  data: {data : jdata },

   success:function(data){
   console.log(data);
if(data.errno==0){
      alert("Update Successfully!");
      window.location.href = "Manage Slot.php";
   exit();
  }else{
      alert("Update Fail!.");
  }


  } , error: function(xhr,stat , error){
       alert("An error occured: " + xhr.status + " " + error);


    }



  ,

  complete: function(){

    loading(false);
  }

});



 function rotate_degree(obj) {
    var matrix = obj.css("-webkit-transform") ||
    obj.css("-moz-transform")    ||
    obj.css("-ms-transform")     ||
    obj.css("-o-transform")      ||
    obj.css("transform");
    if(matrix !== 'none') {
        var values = matrix.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
    } else { var angle = 0; }
    return (angle < 0) ? angle +=360 : angle;
}


 function loading(b){

   if (b==true){
    $(".btn").prop('disabled', true);
    $('#map').prop('disabled', true);
 $("#save").html("<i class='fas fa-spinner fa-spin'></i>");

/* setTimeout(function() {
    $("#reg").prop('disabled', false);
    $('.form-control').prop('disabled', false);
 $("#reg").html("Register");
    }, 15000);*/


   }else{
    $(".btn").prop('disabled', false);
    $('#map').prop('disabled', false);
    $("#save").html("Save");
   }
 }



 }



function setangle(){

    document.getElementById(selected).style.transform = "rotate(" + document.getElementById("deg").value +"deg)";
}

function drg(ob){
 dragElement(document.getElementById(ob.id));
}

function select(obb){



   if (typeof selected == 'undefined' || selected==null) {

 selected=obb.id;

 obb.style.boxShadow = '0 0 29px 4px #00A300';

 }else if (obb.id != selected) {

     document.getElementById(selected).style.boxShadow=null;

      selected=obb.id;


obb.style.boxShadow = '0 0 29px 4px #00A300';



}

}





function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;


  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
      var obj=document.getElementById("map");
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    if (elmnt.offsetTop - pos2 >=0){
     elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    }
      if (elmnt.offsetLeft - pos1 >=0){

      elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
      }

  }

function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>
</html>