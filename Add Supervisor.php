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
  <link rel="stylesheet" type="text/css" href="my-login.css">
    <script src="jq.js" ></script>
    <script src="pop.js">  </script>
   <script src="b.js">  </script>
<style type="text/css">

.btn-success{

background-image: linear-gradient(to bottom,#00A300 0,#339266 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFE85B54', endColorstr='#FFB22520', GradientType=0);
    border-color: #00A300;
    box-shadow: inset 0 1px 0 rgba(242,164,162,.6), 0 1px 2px rgba(0,0,0,.05);


}
 .btn-outline-success{


    box-shadow:0 0 0 2px #00CC00;


}
 .btn-success{

background-image: linear-gradient(to bottom,#00A300 0,#339266 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFE85B54', endColorstr='#FFB22520', GradientType=0);
    border-color: #00A300;
    box-shadow: inset 0 1px 0 rgba(242,164,162,.6), 0 1px 2px rgba(0,0,0,.05);


}
</style>
</head>
<body>

 <nav style="height: 54px;" class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end pl-1 fixed-top">
    <i style="padding: .25rem .5rem;color: white;
    font-size: .875rem;
    line-height: 1.5;" id="toggle-sidebar" class="fas fa-bars pl-0 bar"></i><i class="fas fa-car-alt fa-2x " style="color: white;"></i>
       <a class="navbar-brand mr-auto  ml-2"
        style="font-size: large;" href="#">Parking Reservation System</a>
      <button onclick="window.location.href = 'Log_Out.php';" class="btn btn-sm btn-success mr-2 ml-auto">Log Out &nbsp;<i class="fas fa-sign-out-alt" style="color: white;"></i></button> <!-- <button  class="btn btn-sm btn-success mr-4 ml-auto">Log Out &nbsp;<i class="fas fa-sign-out-alt" style="color: white;"></i></button>
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
                       <?php
                           if ($_SESSION['Type']=="Admin"){

                              echo '<li >
                             <a href="Add Supervisor.php">
                                <i class="fas fa-user-plus"></i>
                                <span style="font-size: 17px;color: white;">Add Supervisor</span>

                            </a>

                        </li> <li >
                           <a href="Manage Slot.php" >
                                <i class="far fa-edit"></i>
                                <span>Manage Parking Slots</span>

                            </a>

                        </li><li >
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
                            <a href="Parking Details.php">
                                <i class="fas fa-parking"></i>
                                <span>Parking Details</span>

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
                                <span>Pending Bills</span>

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

 <body class="my-login-page">
	<section class="h-100">
		<div class="container h-100" style="display: flex;justify-content: space-around; ">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">

					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Supervisor Registration Form</h4>
							<form name="myform">

								<div class="form-group row" >
								    <div class="col-xs-12 col-sm-6 col-md-6" >
									<label for="First">First Name</label>
									<input id="First" type="text" class="form-control input-lg" name="First" maxlength="20" required autofocus></div>

                                        <div class="col-xs-12 col-sm-6 col-md-6" ><label for="Last">Last Name</label>
									<input id="Last" type="text" class="form-control input-lg" maxlength="20" name="Last" required></div>
								</div>
                                <div class="form-group">
									<label for="NIC">NIC</label>
									<input id="NIC" type="text" class="form-control" maxlength="10" name="NIC" required>
								</div>
                                 <div class=" row" >
								<div class="form-group col-xs-12 col-sm-6 col-md-6">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" maxlength="10" name="Password" required data-eye>
								</div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
									<label for="Confirm Password">Confirm Password</label>
									<input id="confirm_password" type="password" class="form-control" name="CPassword" required data-eye >
								</div>

                                 </div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" maxlength="40" name="Email" required>
								</div>
                                   <div class="form-group">
									<label for="Cont_No">Contact No</label>
									<input id="Cont_No" type="number" class="form-control" maxlength="10" name="Cont_No" required>
								</div>
                                 <div class="form-group">
									<label for="Address">Address</label>
									<textarea id="Address"  type="text" class="form-control" rows="2" name="Address" ></textarea>
								</div>
                                <div  class="form-group">


                                <?php       include("PHP.php");
      $getcustomer = new Database();
    $query= "SELECT MAX(Super_ID) AS maxid FROM user;";

   $result = $getcustomer->Query($query) ;

    if ($result) {
         $row=mysqli_fetch_array($result);
        echo '<label for="">Supervisor ID</label>
                                   <div id="">
                                 	<input id="" readonly="readonly" type="number" class="form-control" name="superid" required="required" value="'. ($row['maxid'] + 1) .'" > </div>';

}
  ?>

											</div>
								<div class="form-group">
									<label>
										<input type="checkbox" name="agree" value="1" required="required"> I agree to the Terms and Conditions
									</label>
								</div>

								<div class="form-group no-margin">

									<button type="submit" name="regsubmit" class="btn btn-primary btn-block" id="reg"
                                     >
										Register
									</button>



								</div>

							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


</body>

    </main>
    <!-- page-content" -->
    </div>



</body>
	<script src="my-login.js"></script>
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


 $(function() {

    /*  "return validation()" */


  $('form').on('submit', function (e) {

     console.log($('form').serialize());
          e.preventDefault();
     $b= validation();
    if ($b){

   $.ajax({

   dataType: 'json',
    cache: false,
  type:'POST',
  beforeSend: function(){
    loading(true);
  },

  url:'Add_Registration.php',

  data:  $('form').serialize(),

   success:function(data){



 if(data.errno==1062){


      alert("Sorry ! Your Email or NIC were already used.");


  }else if(data.success=="Registration successfully"){
      alert("Registration successfully!");
      window.location.href = "Add Supervisor.php";
   exit();
  }else{
      alert("Sorry ! Something Wrong ! .");
  }


  } , error: function(xhr,stat , error){
       alert("An error occured: " + xhr.status + " " + error);


    }



  ,

  complete: function(){

    loading(false);
  }
});

}
});

});


 function loading(b){

   if (b==true){
    $("#reg").prop('disabled', true);
    $('.form-control').prop('disabled', true);
 $("#reg").html("<i class='fa fa-circle-o-notch fa-spin'></i>Sending Data..");

/* setTimeout(function() {
    $("#reg").prop('disabled', false);
    $('.form-control').prop('disabled', false);
 $("#reg").html("Register");
    }, 15000);*/


   }else{
    $("#reg").prop('disabled', false);
    $('.form-control').prop('disabled', false);
    $("#reg").html("Register");
   }
 }




function validation(){

   var x=  document.forms["myform"]["Password"].value  ;
    var y =  document.forms["myform"]["CPassword"].value ;

   if(x != y) {
       alert("Your Passsword is not matched");
       return false;
   } else{
       return true;
   }
}

</script>
</html>