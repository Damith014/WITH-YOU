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
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <div >
                        <a href="../index.php" class="site_title"><i class="fa fa-paw"></i> <span>Inbox</span></a>
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
                        <h2>Inbox</h2>
                        <ul class="nav side-menu">
                            <div class="classSub scrollbar" id="style-13">
                                <div class="nameCard" >
                                    <li>
                                        <p>
                                            <img src="images/imgindia.png">&nbsp;&nbsp;
                                            <label>Gunasena</label> &nbsp;&nbsp; 
                                            <label>67</label>
                                        </p>
                                    </li><li>
                                        <p>
                                            <img src="images/imgindia.png">&nbsp;&nbsp;
                                            <label>Gunasena</label> &nbsp;&nbsp; 
                                            <label>67</label>
                                        </p>
                                    </li>
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
                        <br>
                         <nav class="navbar-right">
                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span> 
                             </button>
                             
                             <div class="collapse navbar-collapse" id="myNavbar">
                                 <ul class="nav navbar-nav navbar-right">
                                  <li><a href="#"><span class="glyphicon glyphicon-repeat"></span> History</a></li>
                                  <li><a href="chat.php"><span class="glyphicon glyphicon-envelope"></span> Chat</a></li>
                                  <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                  
                                </ul>
                              </div>
                            
                          </nav>
                        <!-- Menu Items -->
						
					</div>
                </div>
                <div class="line"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel panel-primary">
                                <div class="panel-body">
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
                                        
                                    </ul>
                                </div>
                                <div class="panel-footer">
                                    <div class="input-group">
                                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
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
         </div>





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
