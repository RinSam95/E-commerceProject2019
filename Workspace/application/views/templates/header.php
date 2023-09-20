<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="A-holes: Janne, Jetro, Markus, Samu, Mikael">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo+2">
        <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/tablogo.ico" type="image/x-icon"/>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    </head>
    <body>
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-md-10">
        			<nav class="navbar navbar-expand-lg bg-dark fixed-top">
        			    <a href="<?php print site_url("printshop/index/"); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" height="40" /></a>
        				<ul class="navbar-nav ml-md-auto font-exo bigger-font">
        					<li class="nav-item active">
        					    <?php
        					     $isLogin= $this->session->userdata('user_id');
                                    if(!isset($isLogin)||$isLogin!=true){
                                     print '<a class="nav-link" href="' . site_url("user/login_view/") . '"><font color="white">LOG IN</font><span class="sr-only">(current)</span></a>';
                                    }
                                    else {
                                    print '<span class="navbar-text"><font color="white"> Welcome back ' . $this->session->userdata("user_id") . '</font></span>';
                                    }
        					    ?>
        					</li>
        					
        					<li class="nav-item active">
        					    <?php
        					    $isLogin= $this->session->userdata('user_id');
                                    if(!isset($isLogin)||$isLogin!=true){
                                    print '<a class="nav-link" href="' . site_url("user/index/") . '"><font color="white">SIGN UP</font><span class="sr-only">(current)</span></a>';
                                    }
                                    else {
                                    print '<a class="nav-link" href="' . site_url("user/user_profile") . '"><font color="white">MY ACCOUNT</font><span class="sr-only">(current)</span></a>';
                                    }
        					    ?>
        					</li>
        					
        					<li class="nav-item active">
        						<a class="nav-link" href="<?php echo site_url("printshop/cart/"); ?>"><font color="white">CART(0)<i class="fas fa-shopping-cart"></i></font><span class="sr-only">(current)</span></a>
        					</li>
        					
        					<li class="nav-item active">
        					    <?php
        					    $isLogin= $this->session->userdata('user_id');
                                    if(!isset($isLogin)||$isLogin!=true){
                                    }
                                    else {
                                     print '<a class="nav-link" href="' . site_url("user/user_logout") . '"><font color="white">LOGOUT</font><span class="sr-only">(current)</span></a>';
                                    }
        					    ?>
        					</li>
        				</ul>
        			</nav>
        		</div>
        	</div>
        </div>