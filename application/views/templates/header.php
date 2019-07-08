<!DOCTYPE html>
<html lang="en">

<head>

<!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta charset="utf-8">
<title>RiceStressNet</title>
<meta name="description" content="">
<meta name="author" content=""> 

<!-- Mobile Specific Metas
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

<!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/normalize.css' ;?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/skeleton.css' ;?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css' ;?>">

 <!-- styles -->
    <!-- <link href="<?php echo base_url().'assets_intro/css/bootstrap.min.css' ;?>" rel="stylesheet"> -->
    <!-- <link href="<?php echo base_url().'assets_intro/css/demo.css' ;?>" rel="stylesheet"> -->

    <!-- Add IntroJs styles -->
    <link href="<?php echo base_url().'assets_intro/introjs.css' ;?>" rel="stylesheet">

    <!-- <link href="<?php echo base_url().'assets_intro/css/bootstrap-responsive.min.css' ;?>" rel="stylesheet"> -->
<script type="text/javascript" src="<?php echo base_url().'assets_intro/intro.js' ;?>"></script>

<!-- <script src="<?php echo base_url().'assets/js/ga_tracking.js' ;?>"></script> -->
<style>
body {
 font-family: Arial, Helvetica, sans-serif;
 background-repeat: url('https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwiatfuenZ_hAhXYbSsKHZqPC7sQjRx6BAgBEAU&url=https%3A%2F%2Fwww.freepik.com%2Ffree-psd%2Fabstract-background-design_1055784.htm&psig=AOvVaw2VQqUXWVPVj_aOvPKUKD3q&ust=1553669652234042')
}

.down {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>
</head>


<nav class="navbar navbar-default" style="background-color:#0db5ba;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white">RiceStressNet</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color:black" href="<?php echo site_url('home');?>">Home</a></li>
      <li  class="dropdown"><a style="color:black" href="javascript:void(0)" >Search</a>
      <div class="dropdown-content">
      <a style="color:black" href="<?php echo site_url('search');?>">Network Search</a>     
      <a style="color:black" href="<?php echo site_url('pathway_form');?>">Search Pathway Information</a>
      </div>
      </li>
      <li class="active dropdown">
    <a style="color:black" href="javascript:void(0)" class="dropbtn">Viewers <i class="down"></i></a>
    <div class="dropdown-content">
      <a style="color:black" onclick="expression_viewer_pressed()" href="#">Gene Expression Viewer</a>
      <a style="color:black" onclick="network_viewer_pressed()" href="#">Gene Network Viewer</a>
      <a style="color:black" onclick="neighbour_network_viewer_pressed()" href="#">Network Neighbour Viewer</a>
      <a style="color:black" onclick="module_viewer_pressed()" href="#">Module Viewer</a>
    </div>
  </li>
      <li><a style="color:black" href="<?php echo site_url('download');?>">Downloads</a></li>
      

  <li><a style="color:black" href="<?php echo site_url('home/tutorial');?>">Tutorial</a></li>
    </ul>
  </div>
</nav>
<!-- <body  >
<div class="contain">
    <div class="row" style="text-align:center;background: #0dba30">
       

        <span style="text-align:center;font-size:32px;font-weight:800;">RiceStressNet: A Network-based Rice Resource for Various Stress Conditions</span>
       

    </div>
</div> -->
<div class="contain" style="visibility: hidden;display: none">
    <div class="row" style="text-align:center;display:none">
        
        
        <div class="container">
        <span style="font-size:20px;float:left;" id="site_map"></span>
        <span style="font-size:20px;text-align:center;" id="tissue"></span>
        <span style="font-size:20px;text-align:center;" id="condition"></span>
        <a style="float:right;font-size:20px;font-color:white;" class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().start();">Page Tour</a>
        </div>

    </div>
</div>
