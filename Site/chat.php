<?php
  include('php/db.php');
  $conn = OpenCon();
  //
  $sql="SELECT * FROM USERS";
  $result = mysqli_query($conn, $sql);
  //
  $sql2="SELECT * FROM messages";
  $result2= mysqli_query($conn,$sql2); 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="images/fav.png" rel="shortcut icon" type="image/x-icon"/>
        
        <title>WITH YOU</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/custom.min.css">
        <link rel="stylesheet" href="css/liveON.css">
        <link rel="stylesheet" href="css/chatPanel.css">

        <link rel="stylesheet" href="../jquery.emojiarea.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="../jquery.emojiarea.js"></script>
        <script src="../packs/basic/emojis.js"></script>
        <script>
		window.onload = function()
		{
			var name=localStorage.getItem("name");
			var age=localStorage.getItem("age");
			var country=localStorage.getItem("country");
			
			document.getElementById("nameHead").innerHTML = name;
			//document.getElementById("spanName").innerHTML = name;
			//document.getElementById("spanAge").innerHTML = age;
			//document.getElementById("spanCountry").innerHTML = country;
			
		}
        
	</script>
    
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <div >
                        <a href="../index.php" class="site_title"><i class="fa fa-paw"></i> <span>Chat Area</span></a>
                    </div>
                </div>
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/imgindia.png" alt="../index.php" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2 id="nameHead">Test</h2>
                    </div>
                </div>
               
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h2>Live On</h2>
                        <ul class="nav side-menu" id="list">
                            <div class="classSub scrollbar" id="style-13">
                                <div class="nameCard" >
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                      ?>
                                      <li >
                                        <p class="user-click">
                                          <img src="images/imgindia.png">&nbsp;&nbsp; 
                                            <label><?php echo $row["NAME"] ?></label> &nbsp;&nbsp; 
                                            <label><?php echo $row["AGE"] ?></label>
                                            <label style="display:none;"><?php echo $row["ID"] ?></label>
                                        </p>
                                      </li>
                                    <?php
                                    }
                                  }
                                ?>
                                
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <div class="navbar navbar-default ">
                 <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        <nav class="navbar-right">
                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span> 
                             </button>
                             
                             <div class="collapse navbar-collapse" id="myNavbar">
                                 <ul class="nav navbar-nav navbar-right">
                                  <li><a href="#"><span class="glyphicon glyphicon-repeat"></span> History</a></li>
                                  <li><a href="inbox.php"><span class="glyphicon glyphicon-inbox"></span> Inbox</a></li>
                                  <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                 </ul>
                              </div>
                            
                          </nav>
                        <!-- Menu Items -->
						
					</div>
                </div>
                <div >
                    <div >
                      <!-- // <img src="images/imgindia.png" alt="../index.php" style=""> -->
                    </div>
                    <div class="profile_info">
                        <lable class="name"></lable><br/>
                        <lable class="age"></lable>
                        <lable class="country"></lable>
                        <lable class="gender"></lable>
                    </div>
                </div>
                
		<div class="detail">
		<div class="detail-images"><img src="https://dl.dropboxusercontent.com/s/pil7jdc7d7m8u0h/pic.png" alt="Picture"></div>
		<h3>MohamadReza Deylami</h3>
		<h4>UI Designer</h4>
		<p>Design is not just what it looks like<br> and feels like. Design is how it works.</p>
		<div class="content-shield"></div>
		<ul>
			<li><a href="https://twitter.com/mr_deylami"><i class="fa fa-twitter fa-lg"></i></a></li>
			<li><a href="https://www.facebook.com/Mohamad.Partizan"><i class="fa fa-facebook fa-lg"></i></a></li>
			<li><a href="https://plus.google.com/102975478086616751177"><i class="fa fa-google-plus fa-lg"></i></a></li>
			<li><a href="http://instagram.com/imohamaad"><i class="fa fa-instagram fa-lg"></i></a></li>
			<li><a href="https://github.com/deylami"><i class="fa fa-github fa-lg"></i></a></li>
		</ul>
		<a class="mail" href="mailto:hello@imohamad.me">Mail     <i class="fa fa-envelope fa-lg message"></i></a>
		</div>
	
             <div class="line"></div>
             
				 <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body scrollbar" id="style-13" style=" height: 55vh;">
                                         <ul class="chat">
                                            <li class="left clearfix">
                                                <span class="chat-img pull-left">
                                                    <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                                 </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                            <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="right clearfix">
                                                <span class="chat-img pull-right">
                                                <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                                </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="right clearfix">
                                                <span class="chat-img pull-right">
                                                <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                                </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="left clearfix">
                                                <span class="chat-img pull-left">
                                                    <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                                 </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                            <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="right clearfix">
                                                <span class="chat-img pull-right">
                                                <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                                </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul> 
                                    </div>
                                    <div class="panel-footer">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                
                                            </span> <input id="btn-input" type="text" class=" emojis-wysiwyg form-control input-sm "placeholder="Type your message here..." />
                                            <span class="input-group-btn">
                                                <button class="btn btn-warning btn-sm" id="btn-chat">
                                                    Send</button>
                                            </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
               </div>
                
                
               
            <script>
                $('.emojis-plain').emojiarea({wysiwyg: false});
                
                var $wysiwyg = $('.emojis-wysiwyg').emojiarea({wysiwyg: true});
                var $wysiwyg_value = $('#emojis-wysiwyg-value');
                
                $wysiwyg.on('change', function() {
                    $wysiwyg_value.text($(this).val());
                });
                $wysiwyg.trigger('change');
                </script>
        </div>

        <script>
             $('.user-click').click(function () {
                 var idLR = $(this).closest("li").find('p:eq(0)').find('label:eq(2)').text();
                    $.post("php/controllers/userSearchID.php", {id_val: idLR}, function(result){
                        // console.log("MSG : ",result);
                        var fields=result.split(',');
                        var name = fields[0];
                        var age = fields[1];
                        var country = fields[2];
                        var gender = fields[3];
                        $('.name').html(name ).fadeIn('slow');
                            $('.age').html(age ).fadeIn('slow');
                            $('.county').html(country ).fadeIn('slow');
                            $('.gender').html(gender ).fadeIn('slow');
                    });
            });
        </script>



        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
         
    </body>
</html>
