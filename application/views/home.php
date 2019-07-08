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

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body  >
<nav class="navbar navbar-default" style="background-color:#0db5ba; ">
  <div class="container-fluid">
    <div style="color:black" class="navbar-header">
      <a style="color:white" class="navbar-brand" href="#">RiceStressNet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a style="color:black"  href="#">Home</a></li>
      <li class="dropdown"><a style="color:black"  href="javascript:void(0)">Search</a>
      <div class="dropdown-content">
      <a style="color:black" href="<?php echo site_url('search');?>">Network Search</a>     
      <a target="_blank" style="color:black" href="<?php echo site_url('pathway_form');?>">Search Pathway Information</a>
      </div>
      </li>
      <li><a style="color:black" href="<?php echo site_url('download');?>">Downloads</a></li>
      <li><a style="color:black" href="<?php echo site_url('home/tutorial');?>">Tutorial</a></li>
      <!-- <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div> -->
    </li>

  </div>
</nav>

<!-- <div>
    <div style="text-align:center;background: #0dba30">
       
        <span style="text-align:center;font-size:32px;font-weight:800; color:white">RiceStressNet: A Network-based Rice Resource for Various Stress Conditions</span>
       

    </div>
</div> -->





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



<style>

.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    margin: auto;
  }

</style>


<div class="container">
    
    <!-- <nav>

        <ul>

            <a href="#" data-step="1" data-intro="All About RiceStressNet"><li class="menu-button selected">ABOUT</li></a>
            
            <a href="<?php echo site_url('search');?>" data-step="2" data-intro="Enables you to input a list of Genes of Interest and also select desired stress condition and plant tissue. Click to Explore!"><li class="menu-button">Search</li></a>
            <a href="<?php echo site_url('download');?>" data-step="3" data-intro="Provides you a variety of download options like DEGs, Networks, Module Related Information, etc. Click to explore!"><li class="menu-button">Downloads</li></a>
            <a href="<?php echo site_url('home/tutorial');?>" data-step="4" data-intro="Tutorial to give you a proper understanding of overal functionality of the web server and "><li class="menu-button">TUTORIALS</li></a>
            
        </ul>
    </nav> -->

  
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>


    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="" width="460" height="345" alt="Image Coming Soon.">
        <div class="carousel-caption">
          <h3>Image Coming Soon.</h3>
          <p>Image Coming Soon.</p>
        </div>
      </div>

      <div class="item">
        <img src="" width="460" height="345" alt="Image Coming Soon.">
        <div class="carousel-caption">
          <h3>Image Coming Soon.</h3>
          <p>Image Coming Soon.</p>
        </div>
      </div>


      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
<style>

.left2 {
  float: right;
  width: 25%;
  padding: 10px;
  padding-top: 35px;
   /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.right2 {
  float: left;
  width: 75%;
  padding: 10px;
  height:1000px;
   /* Should be removed. Only for demonstration */
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

</style>




<div class="container">


    
        <h2 style="color:#000000;">About RiceStressNet</h2>
        <div class="twelve columns" style="text-align:justify;">
            Recent focus on transcriptomic studies in food crops like rice, wheat and maize provide new opportunities to address issues related to agriculture and climate change. Re-analysis of such data available in public domain supplemented with annotations across molecular hierarchy can be of immense help to the plant research community, particularly co-expression networks representing transcriptionally coordinated genes that are often part of the same biological process. Gene expression networks have been shown to be helpful in functional annotation of uncharacterized genes, prioritization of candidate genes, inferring biological processes, etc.
<br>
With this objective we have developed RiceStressNet that hosts ranked co-expression networks of Oryza sativa for root and shoot tissues using publicly available mRNA-seq data across various stress conditions (drought, cold, osmotic and flood) and hormone treatments (Abscisic and Jasmonic acid). The resource is built on gene expression data from TENOR database. Major advantage of taking datasets from this resource it that being generated under uniform laboratory conditions (cultivar, sequencing platform, growth stage, etc.), it allows comparison of gene expression profiles across different stress conditions without any external biases.
        </div>

    <hr>

        <h2>Interface and Visualization: </h2>
        <p>Currently, RiceStressNet provides three visualization layers for selected tissue/stress/treatment.</p>
        <p align="justify"><b><span style="color:#214065;font-style:italic;font-weight:700;">Expression Viewer:</span></b> Displays heat maps based on fold-change or p-values for various time-points. </p>
        <p align="justify"><b><span style="color:#214065;font-style:italic;font-weight:700;">Network Viewer:</span></b> Displays graph-based view of query genes colour-coded based on up- or down-regulation. Node attributes allow users to view the connectivity between genes, while edge attributes assign weights to the edges based on correlations (global/stress-specific Pearson correlation coefficients (PCCs)). Additional information is provided for the query genes by integrating RAPDB, IC4R and KEGG databases:</p>
        <!-- <ol type=1>
            <li style="text-indent:-1em;margin-left:1em;">Gene ids hyper-linked to RAPDB.</li>
            <li style="text-indent:-1em;margin-left:1em;">gene-centric information, viz., gene-names, GO terms, etc. extracted from IC4R.</li>
            <li style="text-indent:-1em;margin-left:1em;">fold-change and p-values across time-points can be viewed in the node attributes as heat maps and tables.</li>
            <li style="text-indent:-1em;margin-left:1em;">module-membership of the co-expressed query genes, hyper-linked to the respective module page.</li>
            <li style="text-indent:-1em;margin-left:1em;">edge attribute options allow users to view global HRR ranks (default), global PCCs as well as stress-specific PCCs.</li>
            <li style="text-indent:-1em;margin-left:1em;">RNA-seq expression data across 24 projects hosted in Rice Expression Database (RED) are also displayed for comparison.</li>
            <li style="text-indent:-1em;margin-left:1em;">Homologs of the selected genes across 17 plant species is provided using Plant Homolog Database (PHD).</li>
            <li style="text-indent:-1em;margin-left:1em;">Pathway-centric information extracted from KEGG .</li>
        </ol> -->
        <p align="justify"><b><span style="color:#214065;font-style:italic;font-weight:700;">Module Viewer:</span></b> Displays query genes colour-coded based on their WGCNA-module membership and hyper-linked to the respective module page wherein over-represented GO terms for the module are provided. Network view of<span style="color:red;"> top 100 highly connected genes of each module</span> and their functional annotations in the node attribute table are also provided. </p>
        <h5 style="color:#214065;font-style:italic;font-weight:700;">How to cite RiceStressNet</h5>
        Citations coming up!
        <hr>

   <table width=1000px>
  <tr><td>
    <font size="2" color="#0D5185"><B>Contact: Sanchari Sircar, Sanket Shah and Dr. Nita Parekh,</B>
    <br>Centre for Computational Natural Sciences and Bioinformatics, International Institute of Information Technology-Hyderabad, India
    <br><I>email: nita@iiit.ac.in, sanchari.sircar@research.iiit.ac.in</I></font>
  
  </td>
  <td>
    <a href="http://www.iiit.ac.in"><img src="images/IIIT_logo.png" alt="" height="80" width="90"></a>
  </td></tr>
</table>

</div>


<script>

site=document.getElementById('site_map');
site.innerHTML='<a href="<?php echo site_url('');?>">home</a>'

</script>
