<?php include('connection.php'); ?>
<?php include('login.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Account Information</title>
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
                    <h1 id="logo"><a class="navbar-brand " href="LoggedIn.php" style="color: white"><span>unitas </span> <span style="color: white"><i class="fas fa-building"></i></span><br>real estate ltd.</a></h1>
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
                                    <li ><a  href="LoggedIn.php">Home</a></li>
                                    <li><a href="LoggedIn.php#aboutUs" >about us</a></li>							
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >properties <b class="caret"></b></a>
                                        <ul class="dropdown-menu agile_short_dropdown">
                                            <li><a href="#properties">Land</a></li>
                                            <li><a  data-toggle="tab"href="#residential">Residential</a></li>
                                            <li><a data-toggle="tab"href="#commercial">Commercial</a></li>									
                                        </ul>
                                    </li>
                                    <li><a href="LoggedIn.php#team"  >team</a></li>
                                    <li><a href="LoggedIn.php#gallery" >gallery</a></li>
                                    <li><a href="LoggedIn.php#contactUs" >Contact</a></li>	
                                    <li><form action="Frontpage.php">
                                        <button class="btn btn-primary" id="login">Logout</button></li>
                                </form>
                                </ul>
                            </nav>
                        </div>
                    </nav>          
                </div>            
            </div>         
        </div>

        <div class="panel-body" >
            <div class="row">
                <br />
                <div class="container">
                    <div class="row">           
                        <div class="col-md-12 profile-head">
                            <h1>Profile</h1>                
                        </div>
                        <form method="post" action = "Person%20Information.php">
                            <div class="col-md-6">
                                <div class=" col-md-12 info-group">
                                    <h3>name:</h3>
                                    <h5 class="panel-title">
                                        <?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['name'];
                                        }
                                        ?>
                                    </h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>User Id:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['id'];
                                        }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Mail Address:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['email'];
                                        }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Phone Number:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['phone_number'];
                                        }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Date of birth:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['date_of_birth'];
                                        }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Blood Group:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['blood_group'];
                                        }
                                        ?></h5>
                                </div>



                                <div class=" col-md-12 info-group">
                                    <h3>Address:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['address'];
                                        }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>religion:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['religion'];
                                        }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>National Id:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['nid'];
                                        }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Passport no:</h3>
                                    <h5><?php
                                        $s = $db->query("SELECT * FROM user_account ");
                                        $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                        $count1 = mysqli_num_rows($s);
                                        if ($count1 == 1) {
                                            echo "&nbsp&nbsp" . $row1['passport_id'];
                                        }
                                        ?></h5>
                                </div>
                            </div>
</form>
                            <div class="col-md-6"  >
                                

                                <div style="margin-top: 30px; margin-left: 60%">
                                    <img src="https://s3.amazonaws.com/kairos-media/team/Ben_Virdee-Chapman.jpeg" alt="" height="200px" width="200px">
                                </div>
                                <h3 style="font-weight: bold; text-transform: uppercase; margin: 30px 0px;">property list:</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Property Id</th>
                                            <th scope="col">Property Name</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Nominee</th>
                                            <th scope="col">Paid</th>
                                            <th scope="col">Due</th>
                                        </tr>
                                    </thead>
                                     <form method="post" action = "Person%20Information.php">
                                    <tbody>
                                        <tr>
                                          
                                            <td><?php
                                                $s = $db->query("SELECT * FROM product");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['entry_date'];
                                                }
                                                ?></td>
                                            <td><?php
                                                $s = $db->query("SELECT * FROM buy ");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['product_ID'];
                                                }
                                                ?></td>
                                            <td><?php
                                                $s = $db->query("SELECT * FROM product ");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['name'];
                                                }
                                                ?></td>
                                            <td><?php
                                                $s = $db->query("SELECT * FROM product ");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['type'];
                                                }
                                                ?></td>
                                            <td><?php
                                                $s = $db->query("SELECT * FROM product ");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['status'];
                                                }
                                                ?></td>
                                            <td><?php
                                                $s = $db->query("SELECT * FROM buy ");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['nominee'];
                                                }
                                                ?></td>
                                            <td><?php
                                                $s = $db->query("SELECT * FROM buy ");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['paid'];
                                                }
                                                ?></td>
                                            <td><?php
                                                $s = $db->query("SELECT * FROM buy ");
                                                $row1 = mysqli_fetch_array($s, MYSQLI_ASSOC);
                                                $count1 = mysqli_num_rows($s);
                                                if ($count1 == 1) {
                                                    echo "&nbsp&nbsp" . $row1['due'];
                                                }
                                                ?></td>
                                            
                                        </tr>

                                    </tbody>
                                    </form>
                                </table>

                        

                        

                    

                    
                        <div class="col-md-12">
                            <form method="post" action="report.php" >
                                <button class="btn btn-primary" name="view">See Full Transaction Report</button>
                               
                            </form>
                        </div>
                        </div>
                </div>
            </div>
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
                            <li ><a href="#" class="btn btn-success" >Subscribe</a></li>
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
</body>
</html>