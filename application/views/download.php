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
      <a target="_blank" style="color:black" href="<?php echo site_url('pathway_form');?>">Search Pathway Information</a>
      </div>
      </li>
      <li class="active"><a style="color:black" href="<?php echo site_url('download');?>">Downloads</a></li>
      <li><a style="color:black" href="<?php echo site_url('home/tutorial');?>">Tutorial</a></li>
    </ul>
  </div>
</nav>


<!-- <div class="contain">
    <div class="row" style="text-align:center;background: #0dba30">
        
        <span style="text-align:center;font-size:32px;font-weight:800;color:white">RiceStressNet: A Network-based Rice Resource for Various Stress Conditions</span>
       
    </div>
</div> -->
<!-- <div class="contain">
    <div class="row" style="text-align:center;">
        
        
        <div class="container">
        <span style="font-size:20px;float:left;" id="site_map"></span>
        <span style="font-size:20px;text-align:center;" id="tissue"></span>
        <span style="font-size:20px;text-align:center;" id="condition"></span>
        <a style="float:right;font-size:20px;font-color:white;" class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().start();">Page Tour</a>
        </div>

    </div>
</div> -->








<script type="text/javascript" src="<?php echo base_url().'assets/js/plotlyjs-bundle.js';?>"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/cyto/cytoscape.min.js';?>"></script>
<!-- 
 <div class="container">
    <nav>
        <ul>
            <a href="<?php echo site_url('home/');?>"><li class="menu-button">ABOUT</li></a>
            
            <a href="<?php echo site_url('search');?>"><li class="menu-button">Search</li></a>
            <a href="#"><li class="menu-button selected">Downloads</li></a>
            <a href="<?php echo site_url('home/tutorial');?>"><li class="menu-button">TUTORIALS</li></a>
            
        </ul>
    </nav>
</div> -->

 <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 0%">
        <h4>RiceStressNet Download Data</h4>
      </div>
    </div>
  </div>
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<table class="tg">
<tr>
<th data-step="1" data-intro="Names of the Files which will be downloaded. " class="tg-73oq">File Name</th>
<th data-step="2" data-intro="Size of the file." class="tg-73oq">File Size</th>
<th data-step="3" data-intro="Format of the file which shall be downloaded. The csv and txt files contain comma(,) separated entries." class="tg-73oq">File Format</th>
<th data-step="4" data-intro="Click on the url to to start file download!" class="tg-73oq">Download URL</th>
<th data-step=5 data-intro="Number of times the files have been downloaded previously." class="tg-73oq">Downloaded Times</th>
</tr>
<tr>
<td data-step="6" data-intro="The below files contain the fold-change and p-values for the entire gene set in the database. These are comma(,) separated csv files." class="tg-yspu" colspan="5">Fold change and <i>p</i>-values</td>
</tr>
<tr>
<td class="tg-73oq">Root_Differentially_Expressed_Genes.csv</td>
<td class="tg-73oq">11 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/Root_DEGs.csv">http://bioinf.iiit.ac.in/ricenet/data/Root_DEGs.csv</a></td>
<td class="tg-73oq">2</td>
</tr>
<tr>
<td class="tg-73oq">Shoot_Differentially_Expressed_Genes.csv</td>
<td class="tg-73oq">11 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/Shoot_DEGs.csv">http://bioinf.iiit.ac.in/ricenet/data/Shoot_DEGs.csv</a></td>
<td class="tg-73oq">4</td>
</tr>
<tr>
<td data-step="7" data-intro="The following files contain the Gene Networks for different stress conditions and tissues." class="tg-yspu" colspan="5">Networks</td>
</tr>
<tr>
<td class="tg-73oq">root_ABA_100.txt</td>
<td class="tg-73oq">21 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/root_ABA_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/root_ABA_100.txt</a></td>
<td class="tg-73oq">3</td>
</tr>
<tr>
<td class="tg-73oq">root_cold_100.txt</td>
<td class="tg-73oq">11 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/root_cold_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/root_cold_100.txt</a></td>
<td class="tg-73oq">5</td>
</tr>
<tr>
<td class="tg-73oq">root_drought_100.txt</td>
<td class="tg-73oq">5.9 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/root_drought_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/root_drought_100.txt</a></td>
<td class="tg-73oq">3</td>
</tr>
<tr>
<td class="tg-73oq">root_flood_100.txt</td>
<td class="tg-73oq">2.9 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/root_flood_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/root_flood_100.txt</a></td>
<td class="tg-73oq">4</td>
</tr>
<tr>
<td class="tg-73oq">root_HRR_100.txt</td>
<td class="tg-73oq">96 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/root_HRR_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/root_HRR_100.txt</a></td>
<td class="tg-73oq">2</td>
</tr>
<tr>
<td class="tg-73oq">root_JA_100.txt</td>
<td class="tg-73oq">21 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/root_JA_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/root_JA_100.txt</a></td>
<td class="tg-73oq">1</td>
</tr>
<tr>
<td class="tg-73oq">root_osmo_100.txt</td>
<td class="tg-73oq">16 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/root_osmo_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/root_osmo_100.txt</a></td>
<td class="tg-73oq">2</td>
</tr>
<tr>
<td class="tg-73oq">shoot_ABA_100.txt</td>
<td class="tg-73oq">21 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/ABA_shoot_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_ABA_100.txt</a></td>
<td class="tg-73oq">3</td>
</tr>
<tr>
<td class="tg-73oq">shoot_cold_100.txt</td>
<td class="tg-73oq">11 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/cold_shoot_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_cold_100.txt</a></td>
<td class="tg-73oq">5</td>
</tr>
<tr>
<td class="tg-73oq">shoot_drought_100.txt</td>
<td class="tg-73oq">5.9 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/drought_shoot_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_drought_100.txt</a></td>
<td class="tg-73oq">3</td>
</tr>
<tr>
<td class="tg-73oq">shoot_flood_100.txt</td>
<td class="tg-73oq">2.9 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/flood_shoot_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_flood_100.txt</a></td>
<td class="tg-73oq">4</td>
</tr>
<tr>
<td class="tg-73oq">shoot_HRR_100.txt</td>
<td class="tg-73oq">96 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_HRR_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_HRR_100.txt</a></td>
<td class="tg-73oq">2</td>
</tr>
<tr>
<td class="tg-73oq">shoot_JA_100.txt</td>
<td class="tg-73oq">21 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_JA_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_JA_100.txt</a></td>
<td class="tg-73oq">1</td>
</tr>
<tr>
<td class="tg-73oq">shoot_osmo_100.txt</td>
<td class="tg-73oq">16 MB</td>
<td class="tg-73oq">CSV</td>
<td class="tg-73oq"><a href="http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_osmo_100.txt">http://bioinf.iiit.ac.in/ricenet/data/networks/shoot_osmo_100.txt</a></td>
<td class="tg-73oq">2</td>
</tr>
</table>
	  <p></p><br/>
      </div>
    </div>
  </div>


<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#bbb;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#bbb;color:#594F4F;background-color:#E0FFEB;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#bbb;color:#493F3F;background-color:#9DE0AD;}
.tg .tg-yspu{background-color:#9de0ad;border-color:#000000;text-align:left;vertical-align:top}
.tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}

  table {
    margin-left:auto; 
    margin-right:auto;
  }
</style>

<script>

$(document).ready(function() {
    $('#download').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );


site=document.getElementById('site_map');
site.innerHTML='<a href="<?php echo site_url('download');?>">downloads</a>'





</script> 













