

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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>






    <!-- Add IntroJs styles -->
    <link href="<?php echo base_url().'assets_intro/introjs.css' ;?>" rel="stylesheet">

    
<script type="text/javascript" src="<?php echo base_url().'assets_intro/intro.js' ;?>"></script>



	<script type="text/javascript" src="<?php echo base_url().'assets/js/show_ex.js' ;?>"></script>
	<!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/normalize.css' ;?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/skeleton.css' ;?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css' ;?>">

	 <!-- styles -->
    
<script type="text/javascript" src="<?php echo base_url().'assets_intro/intro.js' ;?>"></script>

	<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquey-ui.css' ;?>">
	<script src="<?php echo base_url().'assets/js/jquery-1.10.2.js' ;?>"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	<script src="<?php echo base_url().'assets/js/ga_tracking.js' ;?>"></script>
	<style>

#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("https://www.creditmutuel.fr/cmne/fr/banques/webservices/nswr/images/loading.gif") no-repeat center center rgba(0,0,0,0.25)
}

#count{
	visibility: hidden;
	width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("https://www.creditmutuel.fr/cmne/fr/banques/webservices/nswr/images/loading.gif") no-repeat center center rgba(0,0,0,0.25)
}

.ui-tooltip-content {
	color: #grey;
	background-color: #fff;
	font-family: Raleway;
    font-size: 1.2rem;

}
body {
 font-family: Arial, Helvetica, sans-serif;
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

<script>

$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});


function select_refgeneset(obj) {
	form = document.getElementById("gwas_form");
	if( obj.id != "btn_file_up" ){
		form.action="home/validate_file_uploadas";
	}
	else{
		form.action="home/validation_fc_values";
	}
	var btn_ids = ["btn_file_up", "btn_man_in"]
	var box_ids = ["box_file_up", "box_man_in"]
	var input_ids = ["disease_gene_set", "disease_gene_set_text"]
	
	obj.className = "button-primary"
	for (i in btn_ids) {
		document.getElementById("disease_option").value = i
		if ( obj.id != btn_ids[i] ) {
			document.getElementById(btn_ids[i]).className = ""
			document.getElementById(box_ids[i]).hidden = true
			document.getElementById(input_ids[i]).value = ""
		} else {
			document.getElementById(box_ids[i]).hidden = false
		}
	}
}
function pop_diseases()
{
	window.open("geneset.php","popup","width=800,height=600,scrollbars=yes");
}	


</script>


</head>
<body>
<div id="load"></div>
<span id="count"></span> 

<nav class="navbar navbar-default" style="background-color:#0db5ba;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white">RiceStressNet</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color:white" href="<?php echo site_url('home/');?>">Home</a></li>
      <li class="dropdown"><a href="javascript:void(0)" style="color:white">Search</a>
      <div class="dropdown-content">
      <a href="<?php echo site_url('search');?>">Network Search</a>     
      <a target="_blank" href="<?php echo site_url('pathway_form');?>">Search Pathway Information</a>
      </div>
      </li>
      <li><a style="color:white" href="<?php echo site_url('download');?>">Download and Documentation</a></li>
      <li><a style="color:white" href="<?php echo site_url('home/tutorial');?>">Tutorial</a></li>
      <li style="float:right"><a style="color:white" href="javascript:void(0);" onclick="javascript:introJs().start();">Page Tour</a></li>
    </ul>
  </div>
</nav>

<!-- <div class="contain">
    <div class="row" style="text-align:center;background: #0dba30">
        
        <span style="text-align:center;font-size:32px;font-weight:800;color:white">RiceStressNet: A Network-based Rice Resource for Various Stress Conditions</span>
        

    </div>
</div> -->

<!-- <div class="contain">
    <div class="row" style="text-align:center;background:white;">
        
        <div class="container">
         <span style="font-size:20px;float:left;" id="site_map"></span>
        <a style="float:right;font-size:20px;font-color:white;" class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().start();">Page Tour</a>
        </div>

    </div>
</div> -->


<!-- <div class="container">
    <nav>
        
        <ul>
            <a href="<?php echo site_url('home/');?>"><li class="menu-button">ABOUT</li></a>
            
            <a href="#"><li class="menu-button selected">Search</li></a>
            <a href="<?php echo site_url('download');?>"><li class="menu-button">Downloads</li></a>
            <a href="<?php echo site_url('home/tutorial');?>"><li class="menu-button">TUTORIALS</li></a>
            
        </ul>
        
    </nav>
</div> -->



<div class="container">
	<!--<a class="button" id="ex_show" onclick="ex_show()">Fill test example</a>-->
	
	<form action="validation_fc_values" name="submit" method="post" enctype="multipart/form-data" id="gwas_form">
	

	

	<div class="row" id="disease_row">
		<fieldset>
			<div data-step="1" data-intro="Here you need to input a set of Gene Ids comma(,) separated. User can give these set of gene ids manually or via a file upload. Toggle between manual and file upload."  class="twelve columns">
				<input type="hidden" name="disease_option" id="disease_option" value="0" />
				
				
				<!-- <div class="row">
					<div class="twelve columns">
						<label >Input Gene List
						<img src="<?php echo base_url().'assets/images/question_mark.svg';?>" style="width:1em;vertical-align:middle" title="A text file with ',' separated genes (RAPDB ids), Maximum 300 genes allowed."/>
						</label>
						<button type=button id="btn_file_up" onclick="select_refgeneset(this)" class="button-primary" style="border-right:0;border-top-right-radius:0;border-bottom-right-radius:0;margin-right:0;padding:0 1rem">file uploading</button><button type=button id="btn_man_in" onclick="select_refgeneset(this)" style="border-left:0;border-top-left-radius:0;border-bottom-left-radius:0;margin-left:0;padding:0 1rem">manual input</button>
						

					</div>
				</div> -->
				<!-- <div class="row">
					<div id="box_file_up">
						<label for="disease_gene_set">Gene set file
							
						</label>

						<input class="u-full-width" name="disease_set" type="file" id="disease_gene_set">
					</div>
				
					<div id="box_man_in" hidden="true">
						<label for="disease_gene_set_text">Gene set
							
						</label>
						
						
						<textarea name="disease_set_text" id="disease_gene_set_text" class="u-full-width" style="height:10em" maxlength = "3599"></textarea>
					</div>
				</div> -->
			</div>
		</fieldset>
	</div>
			

 
    <div class="row">
    <div class="twelve columns">
     <div data-step="2" data-intro="The user has to specify a particular stress condition. The program shall process the input gene list for the selected stress condition. The options available are Drought, Cold, ABA, JA, Osmotic, Flood."  class="six columns">
        <div class="row">
        <label for="build_ver">Input FC values corresponding to every gene.
        <img src="<?php echo base_url().'assets/images/question_mark.svg';?>" style="width:1em;vertical-align:middle" title="Input FC values corresponding to each gene."/></label>
        <table>
          <?php 
          $cnt=1;
          $cnt2=1;
          $gene_string = "";
			foreach($genes as $gene){
			$gene_string = $gene_string . $gene.',';
				if($cnt==1){
					echo '<tr>';
					echo '<td>'.$gene.'</td>';
					echo '<td><input name='.$cnt2.' type="number" step="0.01" value="0"></td>';
					$cnt+=1;
				}
				else if($cnt==2){
					echo '<td>'.$gene.'</td>';
					echo '<td><input name='.$cnt2.' type="number" step="0.01" value="0"></td>';
					$cnt+=1;
				}
				else{
					echo '<td>'.$gene.'</td>';
					echo '<td><input name='.$cnt2.' type="number" step="0.01" value="0"></td>';
					
					echo '</tr>';
					$cnt=1;
				}
				$cnt2+=1;
				
			}
			$gene_string = rtrim($gene_string, ',');
			
			echo '<input name="gene_string" value='.$gene_string.' hidden>';
			?>
        </table>
        </div>
      </div>
     
      </div>

      <div class="row">
    <div class="twelve columns">
     <div data-step="2" data-intro="The user has to specify a particular stress condition. The program shall process the input gene list for the selected stress condition. The options available are Drought, Cold, ABA, JA, Osmotic, Flood."  class="four columns">
        <div class="row">
        <label for="build_ver">Limits
        <img src="<?php echo base_url().'assets/images/question_mark.svg';?>" style="width:1em;vertical-align:middle" title="Specify the stress condition"/></label>
        <input name="limits" type="number" step="1" value="1">
        </div>
      </div>
      <div data-step="3" data-intro="The user has to specify a plant tissue. The program shall process the input gene list for the selected plant tissue. As of now the options available are Root and Shoot." class="four columns">
        <div class="row">
        <label for="build_ver">Bin Size
        <img src="<?php echo base_url().'assets/images/question_mark.svg';?>" style="width:1em;vertical-align:middle" title="Specify the tissue"/></label>
        <input name="bin-size" type="number" step="1" value="1">
    
      </div>
      </div>

      <div data-step="3" data-intro="The user has to specify a plant tissue. The program shall process the input gene list for the selected plant tissue. As of now the options available are Root and Shoot." class="four columns">
        <div class="row">
        <label for="build_ver">Data has both Positive and Negative Values
        <img src="<?php echo base_url().'assets/images/question_mark.svg';?>" style="width:1em;vertical-align:middle" title="Specify the tissue"/></label>
        <select class="u-full-width" name="tissue" id="tissue" required>
        	<option value="true">True</option>
        	<option value="false">False</option>
        </select>
      </div>
      </div>
      </div>
      
    </div>
      <!-- <div class="row">
      <a data-step="4" data-intro="The developer provides an example containing 75 genes analysed for drought stress condition and root plant tissue." href="javascript:ex_show();"><b>Example</b></a> 
    </div> -->
    </div>
    <div data-step="5" data-intro="User has the option to enter his email id in the text box provided where he shall get the updates about his search!" class="row">
    
	</div>
    <br>   
    <input class="button-primary" type="submit" onclick="startTimer()" value="Submit">
    <input class="button-primary" onclick="true_show()" type="reset" value="Reset">
  </form>
</div>



<!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

<!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


<script>

function load_message(){
	
	alert('It takes 45 seconds to load the next page.\nPlease be Patient.\nThank you.');
}

function startTimer(){
	document.getElementById('count').style.visibility="visible";
  
}




document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
      },1000);
  }
}

site=document.getElementById('site_map');
site.innerHTML='<a href="<?php echo site_url('search');?>">search</a>'


</script>




</body>
</html>


