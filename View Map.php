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
  <link rel="stylesheet" type="text/css" href="Table.css">
   <script src="jq.js" ></script>
    <script src="pop.js">  </script>
   <script src="b.js">  </script>
<style type="text/css">




</style>
<style type="text/css">
.btn-success{

background-image: linear-gradient(to bottom,#00A300 0,#339266 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFE85B54', endColorstr='#FFB22520', GradientType=0);
    border-color: #00A300;
    box-shadow: inset 0 1px 0 rgba(242,164,162,.6), 0 1px 2px rgba(0,0,0,.05);


}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 16px;
    background-color: transparent;
}

.table thead tr th {
    font-size: 17px ;
    font-weight: 300;
}

.table>thead>tr>th{
    padding: 12px 8px;
    vertical-align: middle;
    border-color: #ddd;
    font-weight: 300;
}

.table>tbody>tr>td{
    padding: 12px 8px;
    vertical-align: middle;
    border-color: #ddd;
    font-weight: 300;
    font-size:14px;
    color: #3c4858;
}

.table .td-actions .btn {
    margin: 0;
    padding: 5px;
}

.btn.btn-round{
    border-radius: 30px !important;
   width :30px;
   height: 30px;
}





.btn.btn-just-icon.btn-round {
    border-radius: 50% !important;
}

.blinkhover{

position: relative;
}

.blinkhover:hover:after{
    content: '';
    position: absolute;
    border: solid 4px;
    border-color: inherit;
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

@media(max-width:409px){
 #sidebar{
  margin-top:83px;
}

}
 @media(min-width:409px){
#sidebar{
margin-top: 52px;
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
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";
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




</style>

</style>
</head>
<body>

 <nav style="background-color: #343a40;"  class="navbar navbar-expand-sm navbar-dark justify-content-end pl-1 fixed-top">
    <i style="padding: .25rem .5rem;color: white;display:block;
    font-size: .875rem;
    line-height: 1.5;" id="toggle-sidebar" class="fas fa-bars pl-0 bar"></i><i class="fas fa-car-alt fa-2x " style="color: white;"></i>
       <a class="navbar-brand mr-auto  ml-2"
        style="font-size: large;" href="#">Parking Reservation System</a>
       <button onclick="window.location.href = 'Log_Out.php';" class="btn btn-sm btn-success mr-2 ml-auto">Log Out &nbsp;<i class="fas fa-sign-out-alt" style="color: white;"></i></button><!-- <button  class="btn btn-sm btn-success mr-4 ml-auto">Log Out &nbsp;<i class="fas fa-sign-out-alt" style="color: white;"></i></button>
     <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
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




<div id="" style="" class="page-wrapper chiller-theme mt-5">
        <nav id="sidebar" class="sidebar-wrapper" style="left:-300px;">
            <div class="sidebar-content">

                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/bootstrap4/assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo $_SESSION['NameF'] ?></strong>
                        </span>
                        <span id="person" class="user-role"><?php echo $_SESSION['Type'] ?></span>
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
                         <?php
                           if ($_SESSION['Type']=="Admin"){
                           echo '<li >
                           <a href="Add Supervisor.php">
                                <i class="fas fa-user-plus"></i>
                                <span>Add Supervisor</span>

                            </a>

                        </li>
                         <li >
                            <a href="Manage Slot.php" >
                                <i class="far fa-edit"></i>
                                <span>Manage Parking Slots</span>

                            </a>

                        </li>
                         <li >
                            <a href="Manage Supervisor.php">
                                <i class="fas fa-user-tie"></i>
                                <span>Manage Supervisor</span>

                            </a>

                        </li>';

                           }?>

                              <li >
                        <a href="Manage Customer.php">
                                <i class="fas fa-user-edit"></i>
                                <span>Manage Customer</span>

                            </a>

                        </li>
                             <li >
                            <a href="Parking Details.php">
                                <i class="fas fa-parking"></i>
                                <span  >Parking Details</span>

                            </a>

                        </li>
                       <li >
                            <a href="#">
                                <i class="fas fa-eye"></i>
                                <span  style="font-size: 17px;color: white;">View Map</span>

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
        <main style="padding-left: 0;" id="tog" class="page-content pb-5" style="overflow: visible;">




   <h4 class="text-center mt-3 mb-3 ">Parking Map</h4>







<div style="width: 100%;height:100%;border: solid 2px #0066CC;border-radius: 2px;overflow: auto;position: relative" class="boxshadow">



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




    <select id='zooming' onchange="zoomings(this);" class="rounded form-control-sm float-right m-2 shadow" style="width:75px;">
<option  value="25%">25%</option>
<option value="50%">50%</option>
<option value="75%">75%</option>
<option value="100%" >100%</option>
<option value="150%" selected="selected">150%</option>
<option value="200%">160%</option>
<option value="250%">180%</option>
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





    </main>
    <!-- page-content" -->
    </div>


</body>

<script>


if(typeof(EventSource) !== "undefined") {

    var source = new EventSource("SSE.php");


    source.onmessage = function(event) {


    var jd= JSON.parse(event.data);



    $('.slot').each(function(index,item){

               ob = jd.find(ob=>ob.sid==item.id);


       if (ob != undefined){

         console.log(ob);


       if (ob.sstatus=="Reserved"){
            console.log(ob.sstatus);
            item.style.borderColor = "#14FF14";



         }else if (ob.sstatus=="Using"){
               console.log(ob.sstatus);
               item.style.borderColor ="#F02222";






         }

      }else{

          item.style.borderColor = "#FFFFFF";
          }

          });







    /*jd.forEach(function(item,index){



      console.log(item.id);
    });*/




    };
} else {

}




 zoomings(document.getElementById("zooming"));

    $("#toggle-sidebar").click(function () {

    if (document.getElementById("sidebar").style.left=="0px"){
          document.getElementById("sidebar").style.left="-300px";
          document.getElementById("tog").style.paddingLeft="0px";
    }else{
          document.getElementById("sidebar").style.left="0px";

          if (window.matchMedia("(min-width: 700px)").matches){
                 document.getElementById("tog").style.paddingLeft="260px";
          }

    }



    });



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

</script>
</html>