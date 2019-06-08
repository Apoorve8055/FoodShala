<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>FOODSHALA</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery-2.0.0.min.js'); ?> " type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>" type="text/javascript"></script>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?> " rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="<?php echo base_url('assets/fonts/fontawesome/css/fontawesome-all.min.css'); ?> " type="text/css"
          rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="<?php echo base_url('plugins/fancybox/fancybox.min.js'); ?> " type="text/javascript"></script>
    <link href="<?php echo base_url('assets/plugins/fancybox/fancybox.min.css'); ?> " type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="<?php echo base_url('assets/css/ui.css'); ?> " rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/css/responsive.css'); ?> " rel="stylesheet"
          media="only screen and (max-width: 1200px)"/>

    <!-- custom javascript -->
    <script src="<?php echo base_url('assets/js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/angular.min.js'); ?>" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script
        // jquery ready start
        $(document).ready(function () {
// jQuery code
        });
        // jquery end
    </script>
    <style>

        .ResPonsiveimg {
            background: url(<?php echo base_url('assets/images/banners/wal.jpg');?>) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>


<body class="ResPonsiveimg">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> <img class="logo" src="<?php echo base_url('assets/images/logos/logo.png'); ?> ">
        <i class="fa fa-cutlery"></i>
        <b>FOODSHALA</b> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto">
            <?php if ($this->session->type != "restaurant") { ?>

                <li class="nav-item active">


                    <a href="<?php echo base_url('/Home'); ?>">
                        <div class="icontext">
                            <div class="icon-wrap"> &nbsp; <i class="text-warning icon-sm fa fa-home"></i></div>
                            <div class="text-wrap text-dark">
                                <b style="color:white;text-decoration:none"> Home</b> <i
                                        class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </a>

                </li>
            <?php } ?>
            <?php if ($this->session->type == "Customer") { ?>
                <li class="nav-item">
                <a href="<?php echo base_url('/Home/Food'); ?>">
                    <div class="icontext">
                        <div class="icon-wrap"> &nbsp; <i class="text-warning icon-sm fa fa-building"></i></div>
                        <div class="text-wrap text-dark">
                            <b style="color:white;text-decoration:none">Your Preferences</b> <i
                                    class="fa fa-caret-down"></i>
                        </div>
                    </div>
                </a></li><?php } ?>

            <?php if ($this->session->type == "restaurant") { ?>

                <li class="nav-item">
                    <a href="<?php echo base_url('/Restaurant/addFood'); ?>">
                        <div class="icontext">
                            <div class="icon-wrap"> &nbsp; <i class="text-warning icon-sm fa fa-building"></i></div>
                            <div class="text-wrap text-dark">
                                <b style="color:white;text-decoration:none">Add Iteams</b> <i
                                        class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </a></li>
            <?php } ?>
            <?php if ($this->session->type == "restaurant") { ?>

                <li class="nav-item">
                    <a href="<?php echo base_url('/Restaurant/Order'); ?>">
                        <div class="icontext">
                            <div class="icon-wrap"> &nbsp; <i class="text-warning icon-sm fa fa-building"></i></div>
                            <div class="text-wrap text-dark">
                                <b style="color:white;text-decoration:none">View Order</b> <i
                                        class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </a></li>
            <?php } ?>
            <?php if ($this->session->type == "Customer") { ?>

                <li class="nav-item">
                    <a href="<?php echo base_url('/home/Order'); ?>">
                        <div class="icontext">
                            <div class="icon-wrap"> &nbsp; <i class="text-warning icon-sm fa fa-building"></i></div>
                            <div class="text-wrap text-dark">
                                <b style="color:white;text-decoration:none">View Order</b> <i
                                        class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </a></li>
            <?php } ?>
            <li class="nav-item">
                <div class="widget-header dropdown">

                    <a href="#" data-toggle="dropdown" data-offset="20,10" aria-expanded="false">
                        <div class="icontext">
                            <div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i></div>
                            <div class="text-wrap text-dark">
                                <?php if ($this->session->id) { ?>
                                    <b style="color:white;text-decoration:none">&nbsp;<?php echo $this->session->name; ?>
                                        <sub>(<?php echo $this->session->type; ?>)</sub>
                                        &nbsp;</b>
                                <?php } else { ?>
                                    <b style="color:white;text-decoration:none"> Login / Registration
                                        &nbsp;</b>
                                <?php } ?>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu" x-placement="bottom-start "
                         style="position: absolute; transform: translate3d(0px, 59px, 0px); top: 0px; left: 0px; will-change: transform;width:250px">
                        <hr>
                        <?php if ($this->session->type) { ?>
                            <div id="Logout">

                                <center><a class="dropdown-item" href="#" id="logoutbtn"> Hit LogOut</a>

                                </center>
                            </div>

                        <?php } else { ?>
                            <div id="LoginPanel">
                                <center>
                                    <button class="btn btn-primary" id="custbtn">
                                        Login as Customer &nbsp;
                                    </button>
                                    <br><br>
                                    <button class="btn btn-primary" id="Restbtn">
                                        Login as Restaurant
                                    </button>
                                </center>
                            </div>

                        <?php } ?>


                        <div id="CustomerLogIn" style="display:none">
                            <div class="px-4 py-3">
                                <div class="form-group">
                                    <label>Customer Email address</label>
                                    <input type="email" class="form-control" placeholder="email@example.com"
                                           id="CustomerLogInUser">
                                </div>
                                <div class="form-group">
                                    <label>Customer Password</label>
                                    <input type="password" class="form-control" placeholder="Password"
                                           id="CustomerLogInPass">
                                </div>
                                <p id="errLogin" align="center" style="color:red;display:none"> Username password
                                    incorrect</p>
                                <button class="btn btn-primary" style="width:40%" id="CustomerLogInBtn">Sign in</button>
                                <button class="btn btn-primary" style="width:40%; float:right;" onclick="back(1);">
                                    Back
                                </button>
                            </div>

                        </div>
                        <div id="RestaurantLogIn" style="display:none">
                            <div class="px-4 py-3">
                                <div class="form-group">
                                    <label>Restaurant Email address</label>
                                    <input type="email" class="form-control" placeholder="email@example.com"
                                           id="restaurantLogInUser">
                                </div>
                                <div class="form-group">
                                    <label>Restaurant Password</label>
                                    <input type="password" class="form-control" placeholder="Password"
                                           id="restaurantLogInPass">
                                </div>
                                <p id="RerrLogin" align="center" style="color:red;display:none"> Username password
                                    incorrect</p>

                                <button class="btn btn-primary" style="width:40%" id="restaurantLogInBtn"> Sign in
                                </button>
                                <button class="btn btn-primary" style="width:40%; float:right;" onclick="back(2);">
                                    Back
                                </button>
                            </div>
                        </div>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="#" style="text-align:center" id="sig" data-toggle="modal"
                           data-target="#modalRegisterForm">Have account? Sign up</a>
                        <a class="dropdown-item" href="#" style="display:none;text-align:center" id="forget">Forgot
                            password?</a>
                    </div> <!--  dropdown-menu .// -->
                </div>
            </li>
            <?php if ($this->session->type != "restaurant") { ?>

                <li class="nav-item">
                    <a href="#">
                        <div class="icontext" data-toggle="modal" data-target="#exampleModal">
                            <div class="icon-wrap"> &nbsp; <i class="text-warning icon-sm fa fa-shopping-cart"></i>
                            </div>
                            <div class="text-wrap text-dark">
                                <b style="color:white;text-decoration:none"> Cart
                                    <sub style="color:red">( <i id="cartCount"></i> )</span>
                                    </sub>
                                </b>

                            </div>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>

    </div>
</nav>
<input type="hidden" id="baseUrl" value="<?php echo base_url(); ?>">