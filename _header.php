<?php 
 
require_once(dirname(__FILE__).'/libs/config.php');
 
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title> Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL;?>bootstrap/css/bootstrap.min.css" />

    <link href="<?php echo ASSETS_URL;?>css/main.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL;?>css/font-style.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL;?>css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo ASSETS_URL;?>js/jquery.js"></script>    
    <script type="text/javascript" src="<?php echo ASSETS_URL;?>bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/lineandbars.js"></script>
    
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/dash-charts.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="<?php echo ASSETS_URL;?>js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	
	<script src="<?php echo ASSETS_URL;?>js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo ASSETS_URL;?>js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    
  </head>
  <body>

 <?php include_once('_menu.php'); ?>   