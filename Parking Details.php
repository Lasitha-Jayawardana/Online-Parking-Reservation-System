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



</style>
</head>
<body>

 <nav style="background-color: #343a40;height: 54px;"  class="navbar navbar-expand-sm navbar-dark justify-content-end pl-1 fixed-top">
    <i style="padding: .25rem .5rem;color: white;
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




<div class="page-wrapper chiller-theme mt-5">
        <nav id="sidebar" class="sidebar-wrapper" style="margin-top: 54px;">
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

                           }
                           ?>

                              <li >
                        <a href="Manage Customer.php">
                                <i class="fas fa-user-edit"></i>
                                <span>Manage Customer</span>

                            </a>

                        </li>
                             <li >
                            <a href="#">
                                <i class="fas fa-parking"></i>
                                <span  style="font-size: 17px;color: white;">Parking Details</span>

                            </a>

                        </li>
                          <li >
                            <a href="View Map.php">
                                <i class="fas fa-eye"></i>
                                <span>View Map</span>

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

   <h4 class="text-center mt-3 mb-3 ">Parking Details</h4>


                  <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Slot ID</th>
                             <th hidden="hidden" ></th>

                             <th>Type</th>
                             <th>NIC</th>


                            <th>Reserved Time</th>
                            <th>Expire Time</th>
                            <th >Using Started Time</th>
                             <th>Status</th>


                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                             <?php


        include("PHP.php");
      $getcustomer = new Database();
    $query= "SELECT * FROM reservation ORDER BY Slot_ID ASC ;";

   $result = $getcustomer->Query($query) ;

    if ($result) {


        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['Slot_ID'][0] == 'c'){
                $type = 'Car';
                $icon ='<i class="fas fa-car-alt fa-2x" style="color: black;"></i>';
            } else if ($row['Slot_ID'][0] == 'b'){
                 $type = 'Bike';
                 $icon ='<i class="fas fa-motorcycle fa-2x" style="color: black;"></i>';
            }
            
              $sid=$row['Slot_ID'];
                $sid= substr($sid, 1);
            echo '<tr>

                   <td class="text-center">'.$sid.'</td>
                   <td hidden="hidden" >'.$type.'</td>

                   <td>'.$icon.'</td>
                            <td>'.$row['NIC'].'</td>
                            <td>'.$row['R_Time'].'</td>
                            <td>'.$row['E_Time'].'</td>
                             <td>'.$row['U_Time'].'</td>
                            <td>'.$row['Status'].'</td>';


                          echo ' <td class="td-actions text-right">
                              <button type="button" onclick="showmodel(this)" style="overflow: visible;" class="btn btn-danger btn-round blinkhover pt-1"
                           data-toggle="tooltip" data-placement="top" title="Cancel Reservation">
                                    <i class="fas fa-trash-alt"></i>
                                </button>

                            </td>
                        </tr> ';





        }
}
  ?>

                    </tbody>
                </table>
                </div>


    </main>
    <!-- page-content" -->
    </div>


    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header"><h4 class="modal-title custom_align" id="Heading">Cancel this Reservation</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fas fa-times" aria-hidden="true"></span></button>

      </div>
          <div class="modal-body">

       <div class="alert alert-danger"><span class="fas fa-exclamation-triangle"></span> Are you sure you want to cancel this Reservation?</div>

      </div>
        <div class="modal-footer ">
        <button onclick="remove()" type="button" class="btn btn-success" ><span class="fas fa-check"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fas fa-times"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>

</body>

<script>

var nic;
var slot;
var w;
function showmodel(obb){



   var ex = obb.parentNode;



   w = ex.parentNode;

 console.log(w);

   var xx= w.cells;
   nic= xx[3].innerHTML;
if (xx[1].innerHTML == 'Car'){
             slot='c' + xx[0].innerHTML;

} else if (xx[1].innerHTML == 'Bike'){
              slot='b' + xx[0].innerHTML;

            }



console.log(slot);
 $("#delete").modal();

}




function remove(){


 var jdata = "DELETE FROM reservation WHERE Slot_ID = '" + slot + "';";
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
      alert("Canceled Successfully!");
       sendmail(); 
          $(w).remove();
      w=null;

  }else{
      alert("Canceled Fail!.");

  }
   $("#delete").modal('hide');

  } , error: function(xhr,stat , error){
       alert("An error occured: " + xhr.status + " " + error);


    }
  ,

  complete: function(){
  }

});
}





  function sendmail(){

   var arry= {};

  arry['subject'] = "Parking Reservation System";
  arry['to'] =nic;
  arry['msg'] = "Sorry ! ,Your Reservation is aborted by " + document.getElementById("person").innerHTML + ".";

   var jdata = JSON.stringify(arry);

  console.log(jdata);

  $.post("Email.php",{data:jdata},function(result){

   alert();
  console.log(result);
  },"json");



  }







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

  $(".blink,.blinkhover").each(function(){
console.log($(this).css('border-width') );
if (parseInt($(this).css('border-width')) <=0){
 var ff=  $(this).css('background-color');
console.log(ff);
$(this).css('border-color',ff) ;
}

});


 $(document).ready(function() {

   $('[data-toggle="tooltip"]').tooltip();
});
</script>
</html>