<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Search Result</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <!-- //for-mobile-apps -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="../css/font-awesome.min.css" />
        <!-- //font-awesome icons -->
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/Font%20page.css" type="text/css">
        <link rel="stylesheet" href="../css/Person%20Information.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container" style="width: 100%; ">
            <div class="row">
                <div class="col-md-12" style="background-color: black; opacity: .4;height: 150px; " ></div>
                <div class="col-md-3 " style="padding:15px 0px 0px 50px; position: absolute;">
                    <h1 id="logo"><a class="navbar-brand " href="Front%20page.html" style="color: white"><span>unitas </span> <span style="color: white"><i class="fas fa-building"></i></span><br>real estate ltd.</a></h1>
                </div>
                <div class="col-md-8" style="position:absolute;margin-left: 20%;"  >
                    <nav class="navbar navbar-default " id="nav">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" >
                            <nav class="cl-effect-13" id="cl-effect-13">
                                <ul class="nav navbar-nav nav-font" >
                                    <li ><a  href="Front page.html">Home</a></li>
                                    <li><a href="Front%20page.html#aboutUs" >about us</a></li>							
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >properties <b class="caret"></b></a>
                                        <ul class="dropdown-menu agile_short_dropdown">
                                            <li><a href="#properties">Land</a></li>
                                            <li><a  data-toggle="tab"href="#residential">Residential</a></li>
                                            <li><a data-toggle="tab"href="#commercial">Commercial</a></li>									
                                        </ul>
                                    </li>
                                    <li><a href="Front%20page.html#team"  >team</a></li>
                                    <li><a href="Front%20page.html#gallery" >gallery</a></li>
                                    <li><a href="Front%20page.html#contactUs" >Contact</a></li>	
                                    <li><button class="btn btn-primary" id="login" data-toggle="modal" data-target="#myModal">Logout</button></li>
                                </ul>
                            </nav>
                        </div>
                    </nav>          
                </div>            
            </div>         
        </div>
        <form method="post" action = "search%20result.php">
            <div class="panel-body" >
                <div class="row">
                    <br />
                    <div class="container">
                        <div class="row">           
                            <div class="col-md-12 profile-head">
                                <h1>Search</h1>                
                            </div>
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-6"  >
                                        <h3 style="font-weight: bold; text-transform: uppercase; margin: 30px 0px;">Result </h3>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Property</th>
                                                    <th scope="col">Property Name</th>
                                                    <th scope="col">Property Type</th>
                                                    <th scope="col">Status</th>>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="container over-hide card-change">
                                                            <div class="col-md-3">
                                                                <div class="card">
                                                                    <img src="http://nakshihomes.com/wp-content/uploads/2017/05/slide1.gif" alt="" class="img-fluid">
                                                                    <div class="card-img-overlay  gallary"></div>
                                                                    <div class="gallary-info">
                                                                        <h3>Simcity</h3>
                                                                        <div class = "row" style="float:left;">
                                                                            <button class="btn btn-primary">view</button>
                                                                        </div>
                                                                    </div>                      
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Simcity</td>
                                                    <td>Residential</td>
                                                    <td>Unsold</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="container ">
                                            <div class="row">
                                                <div class="col-md-12 social-link">
                                                    <ul>
                                                        <li ><a href="#"  ><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"  ><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"  ><i class="fab fa-google-plus-g"></i></a></li>
                                                        <li><a href="#"  ><i class="fab fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <ul class="subscribe text-center">
                                                        <li><a href="#" class="btn btn-primary" >Email</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
                                        </script> 
                                        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>