<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap/bootstrap-theme.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap/templates/sticky-footer-navbar.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/core.css"); ?>" />

	<!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/css/bootstrap/templates/cover.css"); ?>" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<title><?php echo $title ?></title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">


<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url()?>">Dexter's Website</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Galleries<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url('index.php/photos')?>">Photos</a></li>
                        <li><a href="<?php echo base_url('index.php/videos')?>">Videos</a></li>
                        <!--<li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>-->
                    </ul>
                </li>
                <li><a href="<?php echo base_url('index.php/game')?>">Interactive Game!</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">