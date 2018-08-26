<?php include('header.php')?>
<?php 
  
    if(isset($_GET['id']))
            {
                    if(! empty($_SESSION['id']))
                        {
                            if($_SESSION['id']==$_GET['id'] )
                            {
                                
                            }
                        else
                            header('location : badtry.html');
                    }
        else
            header('location : badtry.html');
}
else
    header('location : badtry.html');
?>
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
    
        <div class="panel-body" >
            <div class="row">
                <br />
                <div class="container">
                    <div class="row">           
                        <div class="col-md-12 profile-head">
                            <h1>Profile</h1>                
                        </div>
                      
                            <div class="col-md-6">
                                <form action="edit profile.php" method="get">
                           <button class="btn btn-success text-uppercase" name="id" value="<?php echo $_SESSION['id'];?>">edit profile</button>
                        </form>
                                <div class=" col-md-12 info-group">
                                    <h3>name:</h3>
                                    <h5 class="panel-title">
                                        <?php
                                        
                                            if(! empty($_SESSION['name']))
                                               {
                                                echo $_SESSION['name'];
                                            }
                                        ?>
                                    </h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>User Id:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['id']))
                                               {
                                                echo $_SESSION['id'];
                                            }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Mail Address:</h3>
                                    <h5><?php
                                        if(! empty($_SESSION['email']))
                                               {
                                                echo $_SESSION['email'];
                                            }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Phone Number:</h3>
                                    <h5><?php
                                        if(! empty($_SESSION['phone_number']))
                                               {
                                                echo $_SESSION['phone_number'];
                                            }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Date of birth:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['date_of_birth']))
                                               {
                                             
                                                echo "".date('d/m/Y', strtotime($_SESSION['date_of_birth']));
                                                 
                                            }
                                        ?></h5>
                                </div>
                                
                                <div class=" col-md-12 info-group">
                                    <h3>Blood Group:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['blood_group']))
                                               {
                                                echo $_SESSION['blood_group'];
                                            }
                                        ?></h5>
                                </div>



                                <div class=" col-md-12 info-group">
                                    <h3>Address:</h3>
                                    <h5><?php
                                         if(! empty ($_SESSION['address']))
                                               {
                                                echo  $_SESSION['address'];
                                            }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>religion:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['religion']))
                                               {
                                                echo $_SESSION['religion'];
                                            }
                                        ?></h5>
                                </div>
                               
                            </div>

                            <div class="col-md-6"  >
                               
                            <form action="passwordChange.php?id=" method="get">
                           <button class="btn btn-danger text-uppercase">change password</button>
                       </form>

                                <div style="margin-top: 30px; margin-left: 60%">
                                   <?php 
                                      if(! empty($_SESSION['picture']))
                                               {
                                                echo '<img src="../images/user/'. $_SESSION['picture'].'" alt="" height="200px" width="200px">';
                                            }
                                    ?>
                                    
                                </div>
                                
                                 <div class=" col-md-12 info-group">
                                    <h3>National Id:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['national_id']))
                                               {
                                                echo $_SESSION['national_id'];
                                            }
                                        ?></h5>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Passport no:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['passport_id']))
                                               {
                                                echo $_SESSION['passport_id'];
                                            }
                                        ?></h5>
                                </div>
                                
                                <div class=" col-md-12 info-group">
                                    <h3>Gender:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['gender']))
                                               {
                                                echo $_SESSION['gender'];
                                            }
                                        ?></h5>
                                </div>
                                
                                <div class=" col-md-12 info-group">
                                    <h3>Status:</h3>
                                    <h5><?php
                                         if(! empty($_SESSION['status']))
                                               {
                                                echo $_SESSION['status'];
                                            }
                                        ?></h5>
                                </div>
                        </div>
                        <div class="container" >
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-weight: bold; text-transform: uppercase; margin: 30px 0px;">property list:</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">Property Id</th>
                                            <th scope="col">Property Name</th>
                                            <th scope="col">Property type</th>  
                                            <th scope="col">Property Address</th> 
                                            <th scope="col">Property Price</th> 
                                            <th scope="col">Property Details</th>                     
                                            <th scope="col">Nominee</th>
                                            <th scope="col">Relationship with Nominee</th>
                                            <th scope="col">Nominee's Picture</th>
                                            <th scope="col">Bond Signature</th>
                                            <th scope="col">Documentation</th> 
                                        </tr>
                                    </thead>
                                      <tbody>
                                     <?php
                                    include('connection.php');
                                    $sql = "SELECT * FROM buy_property WHERE user_id='".$_SESSION['id']."'";
                                    $result = mysqli_query($db, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo '<tr>
                                          
                                            <td>'.$row['property_id'].'</td>';
                                            
                                            
                                            //property name & type
                                            $type = "";
                                            $sql1 = "SELECT * FROM property WHERE id='".$row['property_id']."'";
                                    $result1 = mysqli_query($db, $sql1);
                                            if (mysqli_num_rows($result1) > 0) {
                                        // output data of each row
                                        while($row1 = mysqli_fetch_assoc($result1)) {
                                            echo '<td>'.$row1['name'].'</td>
                                                <td>'.$row1['type'].'</td>';
                                               $type.=$row1['type'];
                                            
                                        }
                                    } 
                                            //property address
                                            $sql1 = "SELECT * FROM property_address WHERE id='".$row['property_id']."'";
                                    $result1 = mysqli_query($db, $sql1);
                                            if (mysqli_num_rows($result1) > 0) {
                                        // output data of each row
                                        while($row1 = mysqli_fetch_assoc($result1)) {
                                            echo '<td>Road no.:'.$row1['road_no.'].'
                                                <br> Section:'.$row1['section'].'<br>
                                                Area:'.$row1['area'].'<br> District:'.$row1['district'].'</td>';
                                            
                                        }
                                    } 
                                            
                                            //property price & details
                                             $sql1 = "SELECT * FROM ".$type." WHERE id='".$row['property_id']."'";
                                    $result1 = mysqli_query($db, $sql1);
                                            if (mysqli_num_rows($result1) > 0) {
                                        
                                        while($row1 = mysqli_fetch_assoc($result1)) {
                                            
                                            if($type == "residential")
                                            {
                                                echo '<td>'.$row1['price'].'</td>
                                                <td> Size:'.$row1['width'].'&times;'
                                                .$row1['width'].'<br>
                                                No of Rooms:'.$row1['no_of_rooms'].'<br>
                                                No of Baths:'.$row1['no_of_bath'].'<br>
                                                No of Yeirds:'.$row1['no_of_yeird'].'<br>';
                                            $date = new DateTime($row1['complete_date']);
                                            $now = new DateTime();
                                            if($date > $now)
                                                echo "Complete Date: ".date('d/m/Y', strtotime($row1['complete_date'])). "<br>Remaining:".$now->diff($date)->format("%d days");
                                            else
                                                echo "Handovered <br> Handovered Date:".date('d/m/Y', strtotime($row1['complete_date']));
                                            echo '</td>';
                                            }
                                            
                                            else if($type == "commercial")
                                            {
                                                echo '<td>'.$row1['price_per_unit']*$row['quantity_of_units'].'</td>
                                                <td> 
                                                No of Floors:'.$row1['no_of_floor'].'<br>
                                                No of Units Per Floor:'.$row1['no_of_units_per_floor'].'<br>';
                                                
                                            $date = new DateTime($row1['complete_date']);
                                            $now = new DateTime();
                                            if($date > $now)
                                                echo "Complete Date: ".date('d/m/Y', strtotime($row1['complete_date'])). "<br>Remaining:".$now->diff($date)->format("%y year %m month %d days");
                                            else
                                                echo "Handovered <br> Handovered Date:".date('d/m/Y', strtotime($row1['complete_date']));
                                            echo '</td>';
                                            }
                                            else
                                                 echo '<td>'.$row1['amount_per_shatangsho']*$row['quantity_of_units'].'</td>
                                                <td> 
                                                Shantangsho:'.$row1['shatangsho'].'<br>
                                                Mouza no.:'.$row['mouza_no.'].'<br>
                                                Spot no.:'.$row['spots_no.'].'</td>';
                                               
                                            
                                        }
                                    }
                                            //nominee
                                            echo '<td>'.$row['nominee'].'</td>
                                                 <td>'.$row['relationship_with_nominee'].'</td>
                                                 <td><img src="../images/nominee/'.$row['picture_of_nominee'].'" alt="" width="100px" height="100px"> </td>
                                                 <td>'.date('d/m/Y', strtotime($row['bond_signature_date'])).'</td>
                                                 <td><img src="../images/documentation/'.$row['documentation_picture_of_property'].'" alt="" width="100px" height="100px"> </td>
                                                 </tr>
                                                 ';
                                        }
                                    }
                                          
                                          
                                    ?>
                                     
                                   
                                   
                                      

                                    </tbody>
                                   
                                </table>

                                </div>
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
           
            
        </div>
        </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>
</html>