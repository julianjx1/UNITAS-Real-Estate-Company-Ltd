<?php
    echo '
     <div class="container" id="top-menubar" style="position:fixed;width: 100%; z-index: 10">
            <div class="row">
            <div class="col-md-12 header-background">
                <div class="col-md-3 " style="padding:15px 0px 0px 50px; position: absolute;">
                    <h1 id="logo"><a class="navbar-brand " href="Front%20page.html" style="color: white"><span>unitas </span> <span style="color: white"><i class="fas fa-building"></i></span><br>real estate ltd.</a></h1>
                </div>

                <div class="col-md-9" style="position:absolute;margin-left: 20%;"  >
                    <nav class="navbar navbar-default " id="nav">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed offset-7 col-2" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
                                    <li class="active"><a  href="Front%20page.html">Home</a></li>
                                    <li><a href="#aboutUs" >about us</a></li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >properties <b class="caret"></b></a>
                                        <ul class="dropdown-menu agile_short_dropdown">
                                            <li><a href="#properties">Land</a></li>
                                            <li><a  data-toggle="tab"href="#residential">Residential</a></li>
                                            <li><a data-toggle="tab"href="#commercial">Commercial</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#team"  >team</a></li>
                                    <li><a href="#gallery" >gallery</a></li>
                                    <li><a href="#contactUs" >Contact</a></li>
                                    <li><button class="btn btn-primary" id="login" data-toggle="modal" data-target="#myModal">Login</button></li>
                                </ul>
                            </nav>
                        </div>
                    </nav>

                </div>


            </div>
            </div>

        </div>'
?>