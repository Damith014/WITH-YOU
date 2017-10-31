
<?php?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
		<!-- Main CSS -->
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href="css/styleSheet.css" rel="stylesheet" type="text/css"/>
        <!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link href="images/fav.png" rel="shortcut icon" type="image/x-icon"/>
        
        <title>WITH YOU</title>

       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
  <script language="JavaScript">
	var delayseconds =2 ;
		function myfunction() {
			myTimer = setTimeout('whatToDo()', delayseconds * 000)
		}
		function whatToDo() {
			document.getElementById('mydiv').click();
		}
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
	<script type="text/javascript">
		$.getJSON("http://freegeoip.net/json/", function (data) {
		var country = data.country_name;
		var ip = data.ip;
		$("#country").val(country);
		}
		);
		
		
		
		if(localStorage){
	$(document).ready(function(){
		$("#login").click(function(){
			// Get input name
			var name = $("#name").val();
			var country = $("#country").val();
			var age = $("#age").val();
			localStorage.setItem("name", name);
			localStorage.setItem("country", country);
			localStorage.setItem("age", age);
			
		});
	});
} else{
    alert("Sorry, your browser do not support local storage.");
}
	</script>
  
    </head>
    <body onload="myfunction()">
       
		 <!-- Main Navigation + LOGO Area -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Responsive Menu -->
                    <button type="button" class="navbar-toggle collapsed btn-primary btn-circle btn-xl" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <i class="glyphicon glyphicon-list"></i>
                    </button>
                    
                    <!-- Logo -->
                   <a class="navbar-brand" href="index_2.php">
                        <img class="logo-change" style="width:96px;height:53px;" src="images/logo.png" alt="logo">
                    </a> 
					<!--<a href="https://www.livechatinc.com"> <img src="https://cdn.livechatinc.com/website/media/img/resources/logos/livechat_96x53.png" alt="Live Chat Software"></a>
                --></div>
                
                <!-- Menu Items -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                       <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
						<li>
                            <a href="#">Contact</a>
                        </li>
					</ul>
                </div>
            </div>
        </nav>
        <br/><br/>
		
		
		
		
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="centerBar"  style="background: url('images/bg.jpg')">
                
                <div class="row" style="height:50px;"></div>
                <div class="row">
                <center> 
                    
  <!-- Model -->
  <a class="mydiv" id="mydiv" data-toggle="modal" data-target="#myModal"></a>
  <div class="modal fade" id="myModal" role="dialog">

      <div class="modal-content" style="opacity:0.6;">
        <div class="modal-header">
          <h4 class="modal-title">WITH YOU</h4>
        </div>
        <div class="modal-body" style="opacity:1;">
            <form id="userLoginFrom"  method ="post"action="php/controllers/login.php">
                	<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="user[name]" id="name"  placeholder="Enter User Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="user[country]" id="country" placeholder="Country" style="cursor:not-allowed;pointer-events: none;"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="user[age]" id="age"  placeholder="Enter your Age"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="radio" name="user[gender]" value="male" checked> Male
									<input type="radio" name="user[gender]" value="female"> Female
								</div>
							</div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
            
        </div>
        <div class="modal-footer">
			<input type="submit" id="login" class="btn btn-primary" value="Start Chat" />
        </div>
		</form>
      </div>
    </div>
    </center>
   </div>
  </div>
 <div class="col-md-2"></div>
</div>

       <footer>
            <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-6 text-left">
                  <p > &copy; Copyright 2017  echonlabs plugins </p>
                </div>
              </div>
            </div>
        </footer>
       
        <!-- Theme JavaScript --> 
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
		<!-- <script type="text/javascript">
            
            jQuery(document).ready(function ($) {
                $("#userLoginFrom").submit(function (e) {
                    e.preventDefault();
                    var $form = $(this);
                    var formDataSerialized = $(this).serialize();
                    console.log(formDataSerialized);
                    $.post("php/controllers/login.php", formDataSerialized, function (data) {
                        if (data === '200') {
                            alert("OK");
                            include(production/index.php);
                            header('Location: ../../production/index.php');
                           // $('#registor_success').show();
                        } else {
                            $('#registor_error').show();
                        }
                    });
                });
            });
        </script> -->
    </body>
</html>
