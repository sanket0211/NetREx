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

</style>
</head>


<nav class="navbar navbar-default" style="background-color:#0db5ba;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white">RiceStressNet</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color:white" href="<?php echo site_url('home');?>">Home</a></li>
      <li class="dropdown"><a href="javascript:void(0)" style="color:white">Search</a>
      <div class="dropdown-content">
      <a href="<?php echo site_url('search');?>">Network Search</a>     
      <a target="_blank" href="<?php echo site_url('pathway_form');?>">Search Pathway Information</a>
      </div>
      </li>
      <li><a style="color:white" href="<?php echo site_url('download');?>">Download and Documentation</a></li>
      
<!-- <li>
    <a style="color:white" href="javascript:void(0)" class="dropbtn">Viewers</a>
    <div class="dropdown-content">
      <a onclick="expression_viewer_pressed()" style="color:white"  href="#">Gene Expression Viewer</a>
      <a onclick="network_viewer_pressed()" style="color:white" href="#">Gene Network Viewer</a>
      <a onclick="neighbour_network_viewer_pressed()" style="color:white" href="#">Network Neighbour Viewer</a>
      <a onclick="module_viewer_pressed()" style="color:white" href="#">Module Viewer</a>
    </div>
  </li> -->
  <li class="active dropdown"><a style="color:white" href="<?php echo site_url('pathway_form');?>">Pathway Information</a></li>
  <li><a style="color:white" href="<?php echo site_url('home/tutorial');?>">Tutorial</a></li>
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


<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>



<script type="text/javascript" src="<?php echo base_url().'assets/DataTables-1.10.18/js/jquery.dataTables.min.js';?>"></script>
<script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/Buttons-1.5.4/js/buttons.flash.min.js';?>"></script> 
<script type="text/javascript" src="<?php echo base_url().'assets/js/cytoscape-euler.js';?>"></script> 



<script type="text/javascript" src="<?php echo base_url().'assets/JSZip-2.5.0/jszip.min.js';?>"></script>


<script type="text/javascript" src="<?php echo base_url().'assets/pdfmake-0.1.36/pdfmake.min.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/pdfmake-0.1.36/vfs_fonts.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Buttons-1.5.4/js/buttons.html5.min.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Buttons-1.5.4/js/buttons.print.min.js';?>"></script>




<link rel="stylesheet" href="<?php echo base_url().'assets/DataTables-1.10.18/css/jquery.dataTables.min.css' ;?>">
<link src="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
                                                                                                                                                                                                 

<!-- Load d3.js -->
<script src="http://d3js.org/d3.v4.js"></script>


<!-- Load color palettes -->
<script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>



<script type="text/javascript">



$(document).ready(function() {
    $('#tblCustomers').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );



$(document).ready(function() {
    $('#tblCustomers1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );




function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<style>


#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("https://www.creditmutuel.fr/cmne/fr/banques/webservices/nswr/images/loading.gif") no-repeat center center rgba(0,0,0,0.25)
}

.container1 {
  display: block;
  position: relative;
  cursor: pointer;
  padding:10px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}


/* The container */
.container2 {
  display: block;
  position: relative;
  padding-left: 35px;
  
  cursor: pointer;
  
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark2 {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark2 {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container2 input:checked ~ .checkmark2 {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark2:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container2 input:checked ~ .checkmark2:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container2 .checkmark2:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}



.selected{
  background-color: #0db5ba;
}




#cy1 {
  height: 1000px;
  width: 100%;
}

#cy2 {
  height: 1000px;
  width: 100%;
}

#cy3 {
  height: 1000px;
  width: 100%;
}

#cy4 {
  height: 1000px;
  width: 100%;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  
  border-top: none;
}

  table {
    margin-left:auto; 
    margin-right:auto;
  }


/* disable text selection */
      svg *::selection {
         background : transparent;
      }
     
      svg *::-moz-selection {
         background:transparent;
      } 
     
      svg *::-webkit-selection {
         background:transparent;
      }
      rect.selection {
        stroke          : #333;
        stroke-dasharray: 4px;
        stroke-opacity  : 0.5;
        fill            : transparent;
      }

      rect.cell-border {
        stroke: #eee;
        stroke-width:0.3px;   
      }

      rect.cell-selected {
        stroke: rgb(51,102,153);
        stroke-width:0.5px;   
      }

      rect.cell-hover {
        stroke: #F00;
        stroke-width:0.3px;   
      }

      text.mono {
        font-size: 9pt;
        font-family: Consolas, courier;
        fill: #aaa;
      }

      text.text-selected {
        fill: #000;
      }

      text.text-highlight {
        fill: #c00;
      }
      text.text-hover {
        fill: #00C;
      }
      #tooltip {
        position: absolute;
        width: 200px;
        height: auto;
        padding: 10px;
        background-color: white;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
        -moz-box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
        pointer-events: none;
      }

      #tooltip.hidden {
        display: none;
      }

      #tooltip p {
        margin: 0;
        font-family: sans-serif;
        font-size: 12px;
        line-height: 20px;
      }

      #tooltip2 {
        position: absolute;
        width: 200px;
        height: auto;
        padding: 10px;
        background-color: white;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
        -moz-box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
        pointer-events: none;
      }

      #tooltip2.hidden {
        display: none;
      }

      #tooltip2 p {
        margin: 0;
        font-family: sans-serif;
        font-size: 12px;
        line-height: 20px;
      }



/*table {

  border-spacing: 0;
  width: 80%;
  margin-left:15px;
  border: 1px solid #ddd;

        overflow-x: auto;
        white-space: nowrap;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding-left: 8px;
  padding-right: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
*/

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
  background-color: #0db5ba;
}
</style>
<body>

<div class="container">



<table>

  
  <tbody>
  <?php    
    echo '<tr>';
    
    echo '<td>Download the following link for the Pathway Information</td>';
    
    echo '<td><a href="'.$pathway_link.'">'.$pathway_link.'</td>';
    echo '</tr>';

  
  ?>
  </tbody>

  </table>


<div id="fp">
  


<table class="container" id ='tblCustomers'>
<caption>Gene - Pathway Information Table</caption>
<thead>
<td>sr.no</td>
<td>os id</td>
<td>Fold-Change</td>
<td>pathway name</td>

</thead>
<tbody>
<?php
$cnt=0;
foreach($gene_path_info as $gene){
  if($gene->pathway==$orig_pathway){
  $cnt=$cnt+1;
  echo '<tr>';
  echo '<td>'.$cnt.'</td>';
  
  echo '<td>'.$gene->os_id.'</td>';
  echo '<td>'.$gene_fc[$gene->os_id].'</td>';
  echo '<td>'.$gene->pathway.'</td>';

  echo '</tr>';
  }

}
?>
</tbody>

</table>
</div>
<div id="pm">
  
  </div>
</div>


<script>

function fetched_pathways_pressed(){
  na = document.getElementById("na");
  ea = document.getElementById("ea");

  

  na.classList.add("selected");
  ea.classList.remove("selected");


  node_attr = document.getElementById("fp");
  edge_attr = document.getElementById("pm");
  node_attr.style.display="";
  edge_attr.style.display="none";
}

function pathway_mapping_pressed(){
  na = document.getElementById("na");
  ea = document.getElementById("ea");

  

  na.classList.remove("selected");
  ea.classList.add("selected");


  node_attr = document.getElementById("fp");
  edge_attr = document.getElementById("pm");
  
  node_attr.style.display="none";
  edge_attr.style.display="";
}
</script>