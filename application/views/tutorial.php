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




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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




 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>



<script type="text/javascript" src="<?php echo base_url().'assets/DataTables-1.10.18/js/jquery.dataTables.min.js';?>"></script>
<script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/Buttons-1.5.4/js/buttons.flash.min.js';?>"></script> 



<script type="text/javascript" src="<?php echo base_url().'assets/JSZip-2.5.0/jszip.min.js';?>"></script>


<script type="text/javascript" src="<?php echo base_url().'assets/pdfmake-0.1.36/pdfmake.min.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/pdfmake-0.1.36/vfs_fonts.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Buttons-1.5.4/js/buttons.html5.min.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Buttons-1.5.4/js/buttons.print.min.js';?>"></script>





<link rel="stylesheet" href="<?php echo base_url().'assets/DataTables-1.10.18/css/jquery.dataTables.min.css' ;?>">
<link src="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
                                                                                                                                                                                                 


<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
 -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 -->
 <!-- 
<script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
 -->









<link rel="stylesheet" href="<?php echo base_url().'assets/DataTables-1.10.18/css/jquery.dataTables.min.css' ;?>">
<link src="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
<!-- 
<link rel="stylesheet" href="<?php echo base_url().'assets/Buttons-1.5.4/css/buttons.dataTables.min.css' ;?>">
 -->                                                                                                                                                                                                   




<link rel="stylesheet" href="<?php echo base_url().'assets/css/tutorial.css' ;?>">

</head>
<body  >
<nav class="navbar navbar-default" style="background-color:#0db5ba;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url('home/');?>" style="color:white">RiceStressNet</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color:black" href="<?php echo site_url('home/');?>">Home</a></li>
      <li class="dropdown"><a href="javascript:void(0)" style="color:black">Search</a>
      <div class="dropdown-content">
      <a style="color:black" href="<?php echo site_url('search');?>">Network Search</a>     
      <a style="color:black" href="<?php echo site_url('pathway_form');?>">Search Pathway Information</a>
      </div>
      </li>
      <li><a style="color:black" href="<?php echo site_url('download');?>">Downloads</a></li>
      <li class="active"><a style="color:black" href="<?php echo site_url('home/tutorial');?>">Tutorial</a></li>
    </ul>
  </div>
</nav>
<!-- 
<div class="container">
    <nav>
        <ul>
            <a href="<?php echo site_url('home/');?>"><li class="menu-button">ABOUT</li></a>
            
            <a href="<?php echo site_url('search');?>"><li class="menu-button">Search</li></a>
            <a href="<?php echo site_url('download');?>"><li class="menu-button">Downloads</li></a>
            <a href="#"><li class="menu-button selected">TUTORIALS</li></a>
            
            
        </ul>
    </nav>
</div> -->


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container" style="position:relative;">
    
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:280px;">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" onclick="sys_req()" class="w3-bar-item w3-button">System Requirements</a>
  <a href="#" onclick="searching_clicked()" class="w3-bar-item w3-button">Searching RiceStressNet</a>
  <a href="#" onclick="gene_expression_viewer_clicked()"class="w3-bar-item w3-button">Gene Expression Viewer</a>
  <a href="#" onclick="gene_network_viewer_clicked()" class="w3-bar-item w3-button">Gene Network Viewer</a>
  <a href="#" onclick="module_viewer_clicked()" class="w3-bar-item w3-button">Module Viewer</a>
  <a href="#" onclick="data_download_clicked()" class="w3-bar-item w3-button">Data Download</a>
</div>

<!-- Page Content -->
<div id="system_requirements" style="margin-left:30%">

      <div class="w3-container w3-teal">
        <h1>System Requirements</h1>
      </div>
      <div class="w3-container">
      
      <p>The portal is browser independent of the OS. The browser requirements are given below.</p>
      <img src="<?php echo base_url().'assets/tutorial/browser_compatibility.png';?>" alt="Car" style="width:100%">
      </div>

</div>

<div id="searching_ricestressnet" style="margin-left:30%">

      <div class="w3-container w3-teal">
        <h1>Searching Ricestressnet</h1>
      </div>

      

      <div class="w3-container">
      <ul>
      <li>User input: Enter RAPDB IDs (<a href = "https://rapdb.dna.affrc.go.jp/">https://rapdb.dna.affrc.go.jp/</a>) separated by space/comma/semicolon (<300 genes) (Figure1)</li>
      <li>Select ‘Example’ for demo</li>
      <li>Select Stress and Tissue</li>
      </ul>
      <figure>
      <img src="<?php echo base_url().'assets/tutorial/serach_page.png';?>" alt="Car" style="width:100%">
      <figcaption>Figure 1: Search Page</figcaption>
      </figure>
      </div>

</div>

<div id="gene_expression_viewer" style="margin-left:30%">

      <div class="w3-container w3-teal">
        <h1>Gene Expression Viewer</h1>
      </div>

      <div class="w3-container">
      <ul>
      <li><u>Heat map</u>: fold-change values in log2 scale and p-values across time-points</li>
      <li><u>Tabular format</u>: fold-change values in log2 scale and p-values across time-points. Specific genes can be search in the search-box</li>
      
      </ul>
      <figure>
      <img src="<?php echo base_url().'assets/tutorial/serach_page.png';?>" alt="Car" style="width:100%">
      <figcaption>Figure 1: Search Page</figcaption>
      </figure>
      </div>

</div>

<div id="gene_network_viewer" style="margin-left:30%">

      <div class="w3-container w3-teal">
        <h1>Gene Network Viewer</h1>
      </div>

     
      <div class="w3-container">
      <ul>
      <li>Node color: Node colours are viewed as red (up-regulated) and blue (down-regulated) based on the time-point selected in the dropdpwn menu or according to the module-memberships of the gene</li>
      <li>Edge-weights: Edge attributes can be displayed as HRR (heighest reciprocal ranks), Global Perarson Correlations (PCCs) or stress-specific PCCs (Figure 2 & 3)</li>
      <li>Tabular format: Gene IDs, fold-change and p-values, module-memberships. Cross-link to RAPDB and IC4R provided. KEGG annotations provided. IC4R provides additional information from 24 additional RNA-seq data from RED Rice Expression Database (RED) and homolog information from PHD (Plant Homolog Database)</li>
      </ul>
      <figure>
      <img src="<?php echo base_url().'assets/tutorial/gene_network_viewer.png';?>" alt="Car" style="width:100%">
      <figcaption>Figure 2: Network View according to time-point (3 hrs) and edge attribute according to HRR .(default)</figcaption>
      </figure>
      <figure>
      <img src="<?php echo base_url().'assets/tutorial/module_wise_colour.png';?>" alt="Car" style="width:100%">
      <figcaption>Figure 3: Network View module-wise. Here all the genes belong to ‘red’ module</figcaption>
      </figure>
      </div>

</div>

<div id="module_viewer" style="margin-left:30%">

      <div class="w3-container w3-teal">
        <h1>Module Viewer</h1>
      </div>

      <div class="w3-container">
      <ul>
      <li>Node Color: According to the co-expressed module (green in case of Figure 4). Top 100 highly connected genes (by degree) are shown</li>
      <li>Edge Attribute: The HRR ranks can be selected from the drop-down menu</li>
      <li>Tabular Format: Over-represented GO terms for Biological Process from Panther database, Intra-modular degree of the top 100 genes and the edge information are shown</li>
      </ul>
      <figure>
      <img src="<?php echo base_url().'assets/tutorial/module_view.png';?>" alt="Car" style="width:100%">
      <figcaption>Figure 5: Module VIewer- nodes colored according to the module</figcaption>
      </figure>
      
      </div>

</div>


<div id="data_download" style="margin-left:30%">

      <div class="w3-container w3-teal">
        <h1>Data Download</h1>
      </div>

      <div class="w3-container">
      <p>Heatmap and network views can be downloaded as image files (.jpeg) while fold-change and p-values for various tissue/stress/time-points are downloadable as text files. The HRR networks (global and stress-specific) along with rank and PCC values can be downloaded as tab-separated files from the ‘Download’ page. For a given list of query genes, all node attributes (gene names, GO terms, fold-changes and p-values) and edge attribute tables (ranks and correlations) can be downloaded as tab-separated files from the ‘Network Viewer” and “Module Viewer” page. Expression profiles and homolog information incorporated from IC4R can also be downloaded for further in-depth analysis.</p>

      
      </div>

</div>


</div>
<!-- The above form looks like this -->
<!-- <div class="container">
  <div class="row">
     <iframe src="files/tutorial.pdf" style="width: 100%;height: 800px;border: none;"></iframe>
  </div>
</div>
 -->

 <script>
function sys_req(){
  sr=document.getElementById('system_requirements');
  srsn=document.getElementById('searching_ricestressnet');
  gev=document.getElementById('gene_expression_viewer');
  gnv=document.getElementById('gene_network_viewer');
  mv=document.getElementById('module_viewer');
  dd=document.getElementById('data_download');
  sr.style.display="";
  srsn.style.display="none";
  gev.style.display="none";
  gnv.style.display="none";
  mv.style.display="none";
  dd.style.display="none";
}

function searching_clicked(){
  sr=document.getElementById('system_requirements');
  srsn=document.getElementById('searching_ricestressnet');
  gev=document.getElementById('gene_expression_viewer');
  gnv=document.getElementById('gene_network_viewer');
  mv=document.getElementById('module_viewer');
  dd=document.getElementById('data_download');
  sr.style.display="none";
  srsn.style.display="";
  gev.style.display="none";
  gnv.style.display="none";
  mv.style.display="none";
  dd.style.display="none";
}

function gene_expression_viewer_clicked(){
  sr=document.getElementById('system_requirements');
  srsn=document.getElementById('searching_ricestressnet');
  gev=document.getElementById('gene_expression_viewer');
  gnv=document.getElementById('gene_network_viewer');
  mv=document.getElementById('module_viewer');
  dd=document.getElementById('data_download');
  sr.style.display="none";
  srsn.style.display="none";
  gev.style.display="";
  gnv.style.display="none";
  mv.style.display="none";
  dd.style.display="none";
}

function gene_network_viewer_clicked(){
  sr=document.getElementById('system_requirements');
  srsn=document.getElementById('searching_ricestressnet');
  gev=document.getElementById('gene_expression_viewer');
  gnv=document.getElementById('gene_network_viewer');
  mv=document.getElementById('module_viewer');
  dd=document.getElementById('data_download');
  sr.style.display="none";
  srsn.style.display="none";
  gev.style.display="none";
  gnv.style.display="";
  mv.style.display="none";
  dd.style.display="none";
}

function module_viewer_clicked(){
  sr=document.getElementById('system_requirements');
  srsn=document.getElementById('searching_ricestressnet');
  gev=document.getElementById('gene_expression_viewer');
  gnv=document.getElementById('gene_network_viewer');
  mv=document.getElementById('module_viewer');
  dd=document.getElementById('data_download');
  sr.style.display="none";
  srsn.style.display="none";
  gev.style.display="none";
  gnv.style.display="none";
  mv.style.display="";
  dd.style.display="none";
}

function data_download_clicked(){
  sr=document.getElementById('system_requirements');
  srsn=document.getElementById('searching_ricestressnet');
  gev=document.getElementById('gene_expression_viewer');
  gnv=document.getElementById('gene_network_viewer');
  mv=document.getElementById('module_viewer');
  dd=document.getElementById('data_download');
  sr.style.display="none";
  srsn.style.display="none";
  gev.style.display="none";
  gnv.style.display="none";
  mv.style.display="none";
  dd.style.display="";
}

site=document.getElementById('site_map');
site.innerHTML='<a href="<?php echo site_url('tutorial');?>">tutorial</a>'




 </script>