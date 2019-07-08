


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
    $('#tblCustomers2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );


$(document).ready(function() {
    $('#tblCustomers3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );


$(document).ready(function() {
    $('#tblCustomers4').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

$(document).ready(function() {
    $('#tblCustomers5').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

$(document).ready(function() {
    $('#tblCustomers9').DataTable( {
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
  height: 800px;
  width: 100%;
}

#cy2 {
  height: 800px;
  width: 100%;
}

#cy3 {
  height: 800px;
  width: 100%;
}

#cy4 {
  height: 800px;
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
    margin-left: 15px;
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
<div id="load"></div>


<script type="text/javascript" src="<?php echo base_url().'assets/cyto/cytoscape.min.js';?>"></script>
 <div class="container" style="display:none">
    <nav>
        <ul>
            <a data-step="1" data-intro="Click here to visualize fold change and p-values in the form of heat maps." onclick="expression_viewer_pressed()"  href="#"><li id="mm1" class="menu-button selected">Gene Expression Viewer</li></a>
            <a data-step="2" data-intro="Click here to visualize the interaction between the input gene list." onclick="network_viewer_pressed()"  href="#"><li id="mm2" class="menu-button">Gene Network Viewer</li></a>
            <a data-step="4" data-intro="Click here to visualize the interaction between the input gene list." onclick="neighbour_network_viewer_pressed()"  href="#"><li id="mm3" class="menu-button">Neighbour Network Viewer</li></a>
            <a data-step="3" data-intro="Here the user can visualize the all the modules corresponding to the selected tissue and stress condition." onclick="module_viewer_pressed()" href="#"><li id="mm4" class="menu-button">Module Viewer</li></a>
            
        </ul>
    </nav>
</div>
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!-- <div id="my_dataviz"></div>
 -->


<div id="expression_viewer" style="display:none;" class="container">
    <div data-step="4" data-intro="Tabs to toggle between the heat-maps and the tabulated data." class="row">
        

 <div class="container">
    <nav>
        <ul>
            <a data-step="1" data-intro="Click here to visualize fold change and p-values in the form of heat maps." onclick="fc_heatmap_pressed()"  href="#"><li id="fc1" class="menu-button selected">Fold-change Heat Map</li></a>|
            <a data-step="2" data-intro="Click here to visualize the interaction between the input gene list." onclick="p_value_heatmap_pressed()"  href="#"><li id="pv1" class="menu-button"><i>p</i>-value Heat Map</li></a>
           
            <!-- <a onclick="module_viewer_pressed()" href="#"><li class="menu-button selected">Tutorial</li></a> -->
        </ul>
    </nav>
</div>


<div id = "fold-change-hm">

<div id="tooltip" class="hidden">
        <p><span id="value"></p>
</div>

<script src="http://d3js.org/d3.v3.min.js"></script>

<div id="chart" style='overflow:auto; width:100%px; height:380px;'></div>
</div>


<div id = "p-val-hm" style="display:none;">


<div id="tooltip2" class="hidden">
        <p><span id="value2"></p>
</div>
<script src="http://d3js.org/d3.v3.min.js"></script>

<div id="chart2" style='overflow:auto; width:100%px; height:380px;'></div>
</div>



<div class="twelve columns" style="text-align:justify; text-indent:0rem;">
              
              
                <table class="table" id="tblCustomers9">
              <caption>Tabulated data for the fold-change values of genes</caption>
              <thead>
              <tr>
              <th>Gene Ids</th>
              <th>1 hr</th>
              <th>3 hrs</th>
              <th>6 hrs</th>
              <th>12 hrs</th>
              <th>24 hrs</th>     
              </tr>
              </thead>
              

              <?php
              echo '<tbody>';
              $cnt=0;
              $max = 100;
              $min = -100;
              foreach($genes as $gene){
                if($gene_info[$gene]->one_fc > $min){
                  $min = $gene_info[$gene]->one_fc;
                }
                if($gene_info[$gene]->one_fc < $max){
                  $max = $gene_info[$gene]->one_fc;
                }
                if($gene_info[$gene]->three_fc > $min){
                  $min = $gene_info[$gene]->three_fc;
                }
                if($gene_info[$gene]->three_fc < $max){
                  $max = $gene_info[$gene]->three_fc;
                }
                if($gene_info[$gene]->six_fc > $min){
                  $min = $gene_info[$gene]->six_fc;
                }
                if($gene_info[$gene]->six_fc < $max){
                  $max = $gene_info[$gene]->six_fc;
                }
                if($gene_info[$gene]->twelve_fc > $min){
                  $min = $gene_info[$gene]->twelve_fc;
                }
                if($gene_info[$gene]->twelve_fc < $max){
                  $max = $gene_info[$gene]->twelve_fc;
                }                 
                if($gene_info[$gene]->twentyfour_fc > $min){
                  $min = $gene_info[$gene]->twentyfour_fc;
                }
                if($gene_info[$gene]->twentyfour_fc < $max){
                  $max = $gene_info[$gene]->twentyfour_fc;
                }
              }
              $min = (float)$min;
              $max = (float)$max;
              $ar=0;$ag=0;$ab=255;
              $br=255;$bg=0;$bb=0;
              $t = $max;
              $max = $min;
              $min=$t;
      foreach($genes as $gene){
        $cnt=$cnt+1;  
          echo '<tr>';
          echo '<td >'.$gene.'</td>';

          $val1 = $gene_info[$gene]->one_fc;
          

          $val2 = $gene_info[$gene]->three_fc;
          
          
          $val3 = $gene_info[$gene]->six_fc;
          
          
          $val4 = $gene_info[$gene]->twelve_fc;
          
          
          $val5 = $gene_info[$gene]->twentyfour_fc;
          
          echo '<td>'.round($val1,2).'</td>';

          
          echo '<td>'.round($val2,2).'</td>';

          
          echo '<td>'.round($val3,2).'</td>';

          
          echo '<td>'.round($val4,2).'</td>';

          
          echo '<td>'.round($val5,2).'</td>';
          /*if($gene_info[$gene]->one_fc<0){
            $gene_info[$gene]->one_fc=abs($gene_info[$gene]->one_fc);
            $b = ($gene_info[$gene]->one_fc/abs($min))*255;
            echo '<td bgcolor="rgb(0, 0,'.$b.')">-'.$gene_info[$gene]->one_fc.'</td>';
          } 
          else{

            $r = ($gene_info[$gene]->one_fc/abs($max))*255;
            echo '<td bgcolor="rgb('.$r.', 0,0)">'.$gene_info[$gene]->one_fc.'</td>';
          }

          if($gene_info[$gene]->three_fc<0){
            $gene_info[$gene]->three_fc=abs($gene_info[$gene]->three_fc);
            $b = ($gene_info[$gene]->three_fc/abs($min))*255;
            echo '<td bgcolor="rgb(0, 0,'.$b.')">-'.$gene_info[$gene]->three_fc.'</td>';
          } 
          else{

            $r = ($gene_info[$gene]->three_fc/abs($max))*255;
            echo '<td bgcolor="rgb('.$r.', 0,0)">'.$gene_info[$gene]->three_fc.'</td>';
          }       
          if($gene_info[$gene]->six_fc<0){
            $gene_info[$gene]->six_fc=abs($gene_info[$gene]->six_fc);
            $b = ($gene_info[$gene]->six_fc/abs($min))*255;
            echo '<td bgcolor="rgb(0, 0,'.$b.')">-'.$gene_info[$gene]->six_fc.'</td>';
          } 
          else{

            $r = ($gene_info[$gene]->six_fc/abs($max))*255;
            echo '<td bgcolor="rgb('.$r.', 0,0)">'.$gene_info[$gene]->six_fc.'</td>';
          }       
         if($gene_info[$gene]->twelve_fc<0){
            $gene_info[$gene]->twelve_fc=abs($gene_info[$gene]->twelve_fc);
            $b = ($gene_info[$gene]->twelve_fc/abs($min))*255;
            echo '<td bgcolor="rgb(0, 0,'.$b.')">-'.$gene_info[$gene]->twelve_fc.'</td>';
          } 
          else{

            $r = ($gene_info[$gene]->twelve_fc/abs($max))*255;
            echo '<td bgcolor="rgb('.$r.', 0,0)">'.$gene_info[$gene]->twelve_fc.'</td>';
          }       
            if($gene_info[$gene]->twentyfour_fc<0){
            $gene_info[$gene]->twentyfour_fc=abs($gene_info[$gene]->twentyfour_fc);
            $b = ($gene_info[$gene]->twentyfour_fc/abs($min))*255;
            echo '<td bgcolor="rgb(0, 0,'.$b.')">-'.$gene_info[$gene]->twentyfour_fc.'</td>';
          } 
          else{

            $r = ($gene_info[$gene]->twentyfour_fc/abs($max))*255;
            echo '<td bgcolor="rgb('.$r.', 0,0)">'.$gene_info[$gene]->twentyfour_fc.'</td>';
          }       */
          
          
          
          echo '</tr>';
      }
      ?>

      </tbody>

      </table>


            </div>

    </div>
    
</div>


<div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>

        <div id="gene_content"></div>

        <p>Tissue-specific Gene Expression Profiles from RNA-seq data imported from IC4R-RED</p>
        <iframe id="iframe2" src="http://expression.ic4r.org/expression-api?term=Os04g0671100" width='100%' height='600px' style='oveflow:hidden;border:none' /></iframe>
        <p>Homolog information for chosen gene imported from IC4R-PHD</p>
        <iframe id="iframe1" src="http://homolog.ic4r.org/genes/Os04g0671100/tree_iframe" width='100%' height='600px' style='oveflow:hidden;border:none' /></iframe>

      </div>

    </div>

        









<div id="network_viewer" style="display:none;" >
    <div class="row">

    <form>
    <table class="container">
    <tr>
    <td>
    <label>
      Colour Nodes: 
    </label>
    </td>
    <td data-step="10" data-intro="User can colour the nodes based on the following options provided in the drop-down.">
    <select this.value="Node - Colouring" onchange="full_visualization(this.value)" class="container1">
            <option value="1">No Colour</option>
            <option value="2">FC - 1 Hr</option>
            <option value="3">FC - 3 Hrs</option>
            <option value="4">FC - 6 Hrs</option>
            <option value="5">FC - 12 Hrs</option>
            <option value="6">FC - 24 Hrs</option>
            <option value="7">Module-Wise</option>

            <span class="checkmark"></span>       
        </select>
    </td>

    <td>
    <label class="container1">
      Set Edge Weights:
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="full_visualization(this.value)" class="container1">
             <option value="16">Global HRR</option>
            <option value="8">Global PCC</option>
            <option value="9">PCC (Drought)</option>
            <option value="10">PCC (Cold)</option>
            <option value="11">PCC (ABA)</option>
            <option value="12">PCC (JA)</option>
            <option value="13">PCC (Osmotic)</option>
            <option value="14">PCC (Flood)</option>
           
            
            
        </select>
    </td>

    <td>
    <label class="container1">
      Node Lables
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="node_labels(this.value)" class="container1">
             <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </td>

    <td>
    <label class="container1">
      Change Layout:
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="change_network_layout(this.value)" class="container1">
            <option value="12">breadthfirst</option>
             <option value="1">random</option>
            <option value="2">grid</option>
            <option value="3">cricle</option>
            <option value="4">concentric</option>
            <option value="5">cose</option>
            <!-- <option value="6">cose-bilkent</option>
            <option value="7">cola</option>
            <option value="8">euler</option>
            <option value="9">spread</option>
            <option value="10">degree</option>
            <option value="11">Klay</option> -->
            
           
            
            
        </select>
    </td>

    </tr>
    </table>
   </form>


    <div class="container1">
    <div id="module" >
    
        <div id="cy1"></div>

        <a href="#" onclick="prepHref_cy1(this,'cy1png')" download>download image</a>
   <!--  <a href="#" onclick="json_cy1(this,'cy1png')" download>download graph json</a> -->
    </div>
    </div>
       <div class="container1">
    <nav>
        <ul>
            <li id="na" data-step="12" data-intro="Click here to view the node-attributes table which show fc and p-value information along with kegg-pathway information, ic4r(homology information, rna seq experiments), gene information provided by rap db, gene belonging to module, gene description and GO term of the input genes." onclick="node_attr_viewer_pressed()"  class="menu-button selected">Node Attributes</li>
            <li id="ea" data-step="13" data-intro="Click here to see the tabluted information about the links in the network seen above. " onclick="edge_attr_viewer_pressed()" class="menu-button selected">Edge Attrubutes</li>
            <!-- <li onclick="network_analysis_viewer_pressed()" class="menu-button selected">Network Details</li> -->
            
        </ul>
    </nav>
</div>
  <div id = "node_attr">
    
          

              <table style="margin-left:15px;" class="table" id="tblCustomers2">
              <caption>Query gene attributes</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Gene Ids</th>
              <th>Kegg Pathway</th>
              <th>Description</th>
              <th>GO</th>
              <th>Transcription Factor Family</th>
              <th>IC4R</th>
              <th>1Hr</th>
              <th>1Hr-Pval</th>
              <th>3Hrs</th>
              <th>3Hrs-Pval</th>
              <th>6Hrs</th>
              <th>6Hrs-Pval</th>
              <th>12Hrs</th>
              <th>12Hrs-Pval</th>
              <th>24Hrs</th>
              <th>24Hrs-Pval</th>
              <th>Module</th>
              <th>Connection Information</th>
              
              
              </tr>
              </thead>
              <form action="<?php echo site_url('home/search_results');?>" method="post">
              <input type="text" hidden name="tissue" value=<?php echo $tissue;?> >
              <input type="text" hidden name="stress" value=<?php echo $stress;?> >

              <?php
              echo '<tbody>';
              $cnt=0;
      foreach($genes as $gene){
        if(in_array($gene, $network_genes)){
            $cnt=$cnt+1;
              echo '<tr>';
              echo '<td>'.$cnt.'</td>';
              echo '<td><a href="https://rapdb.dna.affrc.go.jp/viewer/gbrowse_details/irgsp1?name='.$gene.'" target="_blank">'.$gene.'</a></td>';
              echo '<td style="word-wrap:break-word;">'.$gene_info[$gene]->kegg.'</td>';
              echo '<td style="word-wrap:break-word;">'.$gene_info[$gene]->description.'</td>';
              echo '<td>'.$gene_info[$gene]->GO.'</td>';
              echo '<td>'.$gene_info[$gene]->tf.'</td>';
              echo '<td><a onclick="ic4r_link(\''.$gene.'\')" href"">click</a></td>';
              
                  
              echo '<td>'.round($gene_info[$gene]->one_fc,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->one_pv,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->three_fc,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->three_pv,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->six_fc,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->six_pv,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->twelve_fc,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->twelve_pv,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->twentyfour_fc,2).'</td>';

              echo '<td>'.round($gene_info[$gene]->twentyfour_pv,2).'</td>';

              
              echo '<td>'.$gene_info[$gene]->module_name.'</td>';
              echo '<td>'.$gene_info[$gene]->connected.'</td>';
              
              
              echo '</tr>';
            }
      }
      ?>

      </tbody>
      </form>
      </table>
</div>
<div id = "edge_attr">
          
              <table style="margin-left:15px;" class="table" id="tblCustomers3">
              <caption>Edge-scores for global (HRRs & PCCs) & stress-specific (PCCs) networks</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              <th>PCC (Drought)</th>
              <th>PCC (Cold)</th>
              <th>PCC (Osmotic)</th>
              <th>PCC (ABA)</th>
              <th>PCC (JA)</th>
              <th>PCC (Flood)</th>
              <th>HRR</th>
              </tr>
              </thead>
              <form action="<?php echo site_url('home/search_results');?>" method="post">
              <input type="text" hidden name="tissue" value=<?php echo $tissue;?> >
              <input type="text" hidden name="stress" value=<?php echo $stress;?> >

              <?php
              echo '<tbody>';
              $cnt=0;
      foreach($links as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->target.'</td>';
          echo '<td>'.$link->pcc.'</td>';
          echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';
          echo '<td>'.$link->hrr.'</td>';
          
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>
</div>

    </div>

    
</div>




<div id="neighbour_network_viewer" style="display:none;" >
    <div class="row">

    <form>
    <table class="container">
    <tr>
    <td>
    <label>
      Colour Nodes: 
    </label>
    </td>
    <td data-step="10" data-intro="User can colour the nodes based on the following options provided in the drop-down.">
    <select this.value="Node - Colouring" onchange="full_visualization_neighbour(this.value)" class="container1">
            <option value="1">No Colour</option>
            <option value="2">FC - 1 Hr</option>
            <option value="3">FC - 3 Hrs</option>
            <option value="4">FC - 6 Hrs</option>
            <option value="5">FC - 12 Hrs</option>
            <option value="6">FC - 24 Hrs</option>
            <option value="7">Module-Wise</option>

            <span class="checkmark"></span>       
        </select>
    </td>

    <td>
    <label class="container1">
      Set Edge Weights:
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="full_visualization_neighbour(this.value)" class="container1">
             <option value="16">Global HRR</option>
            <option value="8">Global PCC</option>
            <option value="9">PCC (Drought)</option>
            <option value="10">PCC (Cold)</option>
            <option value="11">PCC (ABA)</option>
            <option value="12">PCC (JA)</option>
            <option value="13">PCC (Osmotic)</option>
            <option value="14">PCC (Flood)</option>
           
            
            
        </select>
    </td>
    <td>
    <label class="container1">
      Node Lables
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="neighbour_node_labels(this.value)" class="container1">
             <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </td>
    <td>
    <label class="container1">
      Change Layout:
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="change_neighbour_network_layout(this.value)" class="container1">
             <option value="12">breadthfirst</option>
             <option value="1">random</option>
            <option value="2">grid</option>
            <option value="3">cricle</option>
            <option value="4">concentric</option>
            <option value="5">cose</option>
            <!-- <option value="6">cose-bilkent</option>
            <option value="7">cola</option>
            <option value="8">euler</option>
            <option value="9">spread</option>
            <option value="10">degree</option>
            <option value="11">Klay</option> -->
            
           
            
            
        </select>
    </td>



    </tr>
    </table>
   </form>


    <div class="container1">
    <div id="module" >
    
        <div id="cy3"></div>

        <a href="#" onclick="prepHref_cy1(this,'cy3png')" download>download image</a>
   <!--  <a href="#" onclick="json_cy1(this,'cy1png')" download>download graph json</a> -->
    </div>
    </div>
       <div class="container1">
    <nav>
        <ul>
            <li data-step="12" data-intro="Click here to view the node-attributes table which show fc and p-value information along with kegg-pathway information, ic4r(homology information, rna seq experiments), gene information provided by rap db, gene belonging to module, gene description and GO term of the input genes." onclick="neighbour_node_attr_viewer_pressed()"  class="menu-button selected">Node Attributes</li>
            <li data-step="13" data-intro="Click here to see the tabluted information about the links in the network seen above. " onclick="neighbour_edge_attr_viewer_pressed()" class="menu-button selected">Edge Attrubutes</li>
            <!-- <li onclick="network_analysis_viewer_pressed()" class="menu-button selected">Network Details</li> -->
            
        </ul>
    </nav>
</div>
  <div id = "neighbour_node_attr">
    
          

              <table style="margin-left:15px;" class="table" id="tblCustomers4">
              <caption>Query gene attributes</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Gene Ids</th>
              <th>Kegg Pathway</th>
              <th>Description</th>
              <th>GO</th>
              <th>IC4R</th>
              <th>Show in Graph</th>
              <th>1Hr</th>
              <th>1Hr-Pval</th>
              <th>3Hrs</th>
              <th>3Hrs-Pval</th>
              <th>6Hrs</th>
              <th>6Hrs-Pval</th>
              <th>12Hrs</th>
              <th>12Hrs-Pval</th>
              <th>24Hrs</th>
              <th>24Hrs-Pval</th>
              
              
              
              
              </tr>
              </thead>
              <form action="<?php echo site_url('home/search_results');?>" method="post">
              <input type="text" hidden name="tissue" value=<?php echo $tissue;?> >
              <input type="text" hidden name="stress" value=<?php echo $stress;?> >

              <?php
              echo '<tbody>';
              $cnt=0;
      foreach($final_genes as $gene){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td><a href="https://rapdb.dna.affrc.go.jp/viewer/gbrowse_details/irgsp1?name='.$gene.'" target="_blank">'.$gene.'</a></td>';
          echo '<td style="word-wrap:break-word;">'.$gene_info[$gene]->kegg.'</td>';
          echo '<td style="word-wrap:break-word;">'.$gene_info[$gene]->description.'</td>';
          echo '<td>'.$gene_info[$gene]->GO.'</td>';
          echo '<td><a onclick="ic4r_link(\''.$gene.'\')" href"">click</a></td>';
          if(in_array($gene, $genes)){
          echo '<td><a href="#top"><button id="show_neighbours" onclick=\'show_in_graph("'.$gene.'")\'>click</button></a></td>';
          }
          else{
            echo '<td>Not an Input Gene</td>';
          

          }

          echo '<td>'.round($gene_info[$gene]->one_fc,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->one_pv,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->three_fc,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->three_pv,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->six_fc,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->six_pv,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->twelve_fc,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->twelve_pv,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->twentyfour_fc,2).'</td>';

          echo '<td>'.round($gene_info[$gene]->twentyfour_pv,2).'</td>';
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>
</div>
<div id = "neighbour_edge_attr">
          
              <table style="margin-left:15px;" class="table" id="tblCustomers5">
              <caption>Edge-scores for global (HRRs & PCCs) & stress-specific (PCCs) networks</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              <!-- <th onclick="sortTable3(3)">PCC (Drought)</th>
              <th onclick="sortTable3(4)">PCC (Cold)</th>
              <th onclick="sortTable3(5)">PCC (Osmotic)</th>
              <th onclick="sortTable3(6)">PCC (ABA)</th>
              <th onclick="sortTable3(7)">PCC (JA)</th>
              <th onclick="sortTable3(8)">PCC (Flood)</th> -->
              <th>HRR</th>
              </tr>
              </thead>
             

              <?php
              echo '<tbody>';
              $cnt=0;
      foreach($links2 as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->target.'</td>';
          echo '<td>'.$link->pcc.'</td>';
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          echo '<td>'.$link->hrr.'</td>';

          
          echo '</tr>';
      }
      ?>

      </tbody>

      </table>
</div>

    </div>

    
</div>









<div id="module_viewer" style="display:none;" >
    <div class="row">

    <form>
    <table class="container">
    <tr>
    <td>
    <label class="container1">
      Module:
    </label>
    </td>
    <td data-step="14" data-intro="User can select the module to explore. ">
    <select this.value="Node - Colouring" onchange="full_visualization_module(this.value)" class="container1">
            <?php
            foreach($module_names as $module_name){
              echo '<option value='.$module_name->module_id.'>'.$module_name->module_name.'</option>';
            }
            ?>
        </select>
    </td>
    <td>
    <label class="container1">
      HRR
    </label>
    </td>
    <td data-step="15" data-intro="User can set the threshold for HRR values. All the edges with HRR value less than the threshold will only be seen while others would disappear.">
    <select this.value="Node - Colouring" onchange="control_module_edges(this.value)" class="container1">
        <option selected value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      </td>
    <td>

    <!-- <label class="container1">
      Edge Weights by Global HRR
    </label>
    </td> -->
    <td>
    <label class="container1">
      Node Lables
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="module_node_labels(this.value)" class="container1">
             <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </td>
    <td>
    <label class="container1">
      Change Layout:
    </label>
    </td>
    <td data-step="11" data-intro="User can set edge weights to HRR or PCC (global or stress-specific)">
    <select this.value="Node - Colouring" onchange="change_module_network_layout(this.value)" class="container1">
             <option value="12">breadthfirst</option>
             <option value="1">random</option>
            <option value="2">grid</option>
            <option value="3">cricle</option>
            <option value="4">concentric</option>
            <option value="5">cose</option>
            <!-- <option value="6">cose-bilkent</option>
            <option value="7">cola</option>
            <option value="8">euler</option>
            <option value="9">spread</option>
            <option value="10">degree</option>
            <option value="11">Klay</option> -->
            
           
            
            
        </select>
    </td>
    



    </tr>
    </table>
   </form>


    <div class="container1">
    <div id="module" >
    
        <div id="cy2"></div>
        <a href="#" onclick="prepHref_cy2(this,'cy2png')" download>Click here to download image</a>
   <!--  <a href="#" onclick="json_cy2(this,'cy2png')" download>download graph json</a> -->
          
    </div>
    </div>  

      <div class="container1">
    <nav>
        <ul>
            <li data-step="16" data-intro="Click here to see a tabulated data for the over-represented GO terms for the selected module." onclick="module_over_viewer_pressed()"  class="menu-button selected">Gene Ontology</li>
            <li data-step="17" data-intro="Click here to see the Intra-Modular Gene Degree for all the top 100 genes for the selected Module." onclick="degree_viewer_pressed()" class="menu-button selected">Intra-modular Connectivity</li>
            <li data-step="18" data-intro="Click here to see the edge information of the above network." onclick="edge_info_viewer_pressed()" class="menu-button selected">Edge Information</li>
            
        </ul>
    </nav>
</div>

            
          <div id = "rmg">
              
              
          </div>


          <div id = "gmd">
              
              
          </div>

          <div id = "links">
              
              
          </div>

    
</div>

<script>



////////////////////heatmap//////////////////

// set the dimensions and margins of the graph
/*var margin = {top: 80, right: 25, bottom: 30, left: 40},
  width = 1450 - margin.left - margin.right,
  height = 350 - margin.top - margin.bottom;

// append the svg object to the body of the page
var svg = d3.select("#my_dataviz")
.append("svg")
  .attr("width", width + margin.left + margin.right)
  .attr("height", height + margin.top + margin.bottom)
.append("g")
  .attr("transform",
        "translate(" + margin.left + "," + margin.top + ")");

//Read the data
d3.csv("https://raw.githubusercontent.com/holtzy/D3-graph-gallery/master/DATA/heatmap_data.csv", function(data) {

  data = <?php echo $heat_map_data; ?>;
  console.log(data);
  // Labels of row and columns -> unique identifier of the column called 'group' and 'variable'
  var myGroups = d3.map(data, function(d){return d.group;}).keys()
  var myVars = d3.map(data, function(d){return d.variable;}).keys()

  // Build X scales and axis:
  var x = d3.scaleBand()
    .range([ 0, width ])
    .domain(myGroups)
    .padding(0.05);
  svg.append("g")
    .style("font-size", 6)
    .attr("transform", "translate(0," + height + ") ")
    .call(d3.axisBottom(x).tickSize(0))
    .select(".domain").remove()

  // Build Y scales and axis:
  var y = d3.scaleBand()
    .range([ height, 0 ])
    .domain(myVars)
    .padding(0.05);
  svg.append("g")
    .style("font-size", 6)
    .call(d3.axisLeft(y).tickSize(0))
    .select(".domain").remove()

  // Build color scale
  var myColor = d3.scaleSequential()
    .interpolator(d3.interpolateInferno)
    .domain([<?php echo $min;?>,0,<?php echo $max;?>])

  // create a tooltip
  var tooltip = d3.select("#my_dataviz")
    .append("div")
    .style("opacity", 0)
    .attr("class", "tooltip")
    .style("background-color", "white")
    .style("border", "solid")
    .style("border-width", "2px")
    .style("border-radius", "5px")
    .style("padding", "5px")

  // Three function that change the tooltip when user hover / move / leave a cell
  var mouseover = function(d) {
    tooltip
      .style("opacity", 1)
    d3.select(this)
      .style("stroke", "black")
      .style("opacity", 1)
  }
  var mousemove = function(d) {
    tooltip
      .html("The exact value of<br>this cell is: " + d.value)
      .style("left", (d3.mouse(this)[0]+70) + "px")
      .style("top", (d3.mouse(this)[1]) + "px")
  }
  var mouseleave = function(d) {
    tooltip
      .style("opacity", 0)
    d3.select(this)
      .style("stroke", "none")
      .style("opacity", 0.8)
  }

  // add the squares
  svg.selectAll()
    .data(data, function(d) {return d.group+':'+d.variable;})
    .enter()
    .append("rect")
      .attr("x", function(d) { return x(d.group) })
      .attr("y", function(d) { return y(d.variable) })
      .attr("rx", 4)
      .attr("ry", 4)
      .attr("width", x.bandwidth() )
      .attr("height", y.bandwidth() )
      .style("fill", function(d) { return myColor(d.value)} )
      .style("stroke-width", 4)
      .style("stroke", "none")
      .style("opacity", 0.8)
    .on("mouseover", mouseover)
    .on("mousemove", mousemove)
    .on("mouseleave", mouseleave)
})

// Add title to graph
svg.append("text")
        .attr("x", 0)
        .attr("y", -50)
        .attr("text-anchor", "left")
        .style("font-size", "22px")
        .text("Fold Change");

// Add subtitle to graph
svg.append("text")
        .attr("x", 0)
        .attr("y", -20)
        .attr("text-anchor", "left")
        .style("font-size", "14px")
        .style("fill", "grey")
        .style("max-width", 400)
        .text("Heat Map for the Fold Change Values");



*/


var margin = { top: 150, right: 10, bottom: 50, left: 100 },
  cellSize=16;
  row_number=5;
  col_number=<?php echo json_encode($hcrow);?>.length;
  width = cellSize*col_number, // - margin.left - margin.right,
  height = cellSize*row_number , // - margin.top - margin.bottom,
  //gridSize = Math.floor(width / 24),
  legendElementWidth = cellSize*1.5,
  colorBuckets = 21,
  colors = ['#1A5276','#2471A3','#2980B9','#5499C7','#2980B9','#5499C7','#7FB3D5','#A9CCE3','#D4E6F1','#EAF2F8','#FFFFFF','#F1EEF6','#E6D3E1','#DBB9CD','#D19EB9','#C684A4','#BB6990','#B14F7C','#A63467','#9B1A53','#91003F'];
  hccol=<?php echo json_encode($hcrow);?>
  , // change to gene name or probe id
  hcrow = [1,2,3,4,5], // change to gene name or probe id
  colLabel = <?php echo json_encode($linked_genes_input);?>, // change to gene name or probe id
  rowLabel = ['1 h   ', '2 h  ', '6 h   ', '12 h   ', '24 h   ']; // change to contrast name

d3.tsv("http://bioinf.iiit.ac.in/ricenet/ricenetwork/heatmap_data.csv",
function(d) {
  return {
    row:   +d.row_idx,
    col:   +d.col_idx,
    value: +d.log2ratio
  };
},
function(error, data) {
  var colorScale = d3.scale.quantile()
      .domain([ -10 , 0, 10])
      .range(colors);
  
  var svg = d3.select("#chart").append("svg")
      .attr("width",1000)
      .attr("height", height + margin.top + margin.bottom)
      .append("g")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
      ;
  var rowSortOrder=false;
  var colSortOrder=false;
  var rowLabels = svg.append("g")
      .selectAll(".rowLabelg")
      .data(rowLabel)
      .enter()
      .append("text")
      .text(function (d) { return d; })
      .attr("x", 0)
      .attr("y", function (d, i) { return hcrow.indexOf(i+1) * cellSize; })
      .style("text-anchor", "end")
      .attr("transform", "translate(-6," + cellSize / 1.5 + ")")
      .attr("class", function (d,i) { return "rowLabel r"+i;} ) 
      .on("mouseover", function(d) {d3.select(this).classed("text-hover",true);})
      .on("mouseout" , function(d) {d3.select(this).classed("text-hover",false);})
      .on("click", function(d,i) {rowSortOrder=!rowSortOrder; sortbylabel("r",i,rowSortOrder);d3.select("#order").property("selectedIndex", 4).node().focus();;})
      ;

  var colLabels = svg.append("g")
      .selectAll(".colLabelg")
      .data(colLabel)
      .enter()
      .append("text")
      .text(function (d) { return d; })
      .attr("x", 0)
      .attr("y", function (d, i) { return hccol.indexOf(i+1) * cellSize; })
      .style("text-anchor", "left")
      .attr("transform", "translate("+cellSize/2 + ",-6) rotate (-90)")
      .attr("class",  function (d,i) { return "colLabel c"+i;} )
      .on("mouseover", function(d) {d3.select(this).classed("text-hover",true);})
      .on("mouseout" , function(d) {d3.select(this).classed("text-hover",false);})
      .on("click", function(d,i) {colSortOrder=!colSortOrder;  sortbylabel("c",i,colSortOrder);d3.select("#order").property("selectedIndex", 4).node().focus();;})
      ;

  var heatMap = svg.append("g").attr("class","g3")
        .selectAll(".cellg")
        .data(data,function(d){return d.row+":"+d.col;})
        .enter()
        .append("rect")
        .attr("x", function(d) { return hccol.indexOf(d.col) * cellSize; })
        .attr("y", function(d) { return hcrow.indexOf(d.row) * cellSize; })
        .attr("class", function(d){return "cell cell-border cr"+(d.row-1)+" cc"+(d.col-1);})
        .attr("width", cellSize)
        .attr("height", cellSize)
        .style("fill", function(d) { return colorScale(d.value); })
        /* .on("click", function(d) {
               var rowtext=d3.select(".r"+(d.row-1));
               if(rowtext.classed("text-selected")==false){
                   rowtext.classed("text-selected",true);
               }else{
                   rowtext.classed("text-selected",false);
               }
        })*/
        .on("mouseover", function(d){
               //highlight text
               d3.select(this).classed("cell-hover",true);
               d3.selectAll(".rowLabel").classed("text-highlight",function(r,ri){ return ri==(d.row-1);});
               d3.selectAll(".colLabel").classed("text-highlight",function(c,ci){ return ci==(d.col-1);});
        
               //Update the tooltip position and value
               d3.select("#tooltip")
                 .style("left", (d3.event.pageX+10) + "px")
                 .style("top", (d3.event.pageY-10) + "px")
                 .select("#value")
                 .text("lables:"+rowLabel[d.row-1]+","+colLabel[d.col-1]+"\ndata:"+d.value+"\nrow-col-idx:"+d.col+","+d.row+"\ncell-xy "+this.x.baseVal.value+", "+this.y.baseVal.value);  
               //Show the tooltip
               d3.select("#tooltip").classed("hidden", false);
        })
        .on("mouseout", function(){
               d3.select(this).classed("cell-hover",false);
               d3.selectAll(".rowLabel").classed("text-highlight",false);
               d3.selectAll(".colLabel").classed("text-highlight",false);
               d3.select("#tooltip").classed("hidden", true);
        })
        ;
    var range_legend = new Array();
    for(j = -10;j<=10;j=j+1){
      
      range_legend.push(j);
      

    }
  var legend = svg.selectAll(".legend")
      .data(range_legend)
      .enter().append("g");
 
  legend.append("rect")
    .attr("x", function(d, i) { return legendElementWidth * i; })
    .attr("y", height+(12*2))
    .attr("width", legendElementWidth)
    .attr("height", 12)
    .style("fill", function(d, i) { return colors[i]; });
 
  legend.append("text")
    .text(function(d) { return d; })
    .attr("width", legendElementWidth)
    .attr("x", function(d, i) { return legendElementWidth * i; })
    .attr("y", height + (48));

// Change ordering of cells

  function sortbylabel(rORc,i,sortOrder){
       var t = svg.transition().duration(3000);
       var log2r=[];
       var sorted; // sorted is zero-based index
       d3.selectAll(".c"+rORc+i) 
         .filter(function(ce){
            log2r.push(ce.value);
          })
       ;
       if(rORc=="r"){ // sort log2ratio of a gene
         sorted=d3.range(col_number).sort(function(a,b){ if(sortOrder){ return log2r[b]-log2r[a];}else{ return log2r[a]-log2r[b];}});
         t.selectAll(".cell")
           .attr("x", function(d) { return sorted.indexOf(d.col-1) * cellSize; })
           ;
         t.selectAll(".colLabel")
          .attr("y", function (d, i) { return sorted.indexOf(i) * cellSize; })
         ;
       }else{ // sort log2ratio of a contrast
         sorted=d3.range(row_number).sort(function(a,b){if(sortOrder){ return log2r[b]-log2r[a];}else{ return log2r[a]-log2r[b];}});
         t.selectAll(".cell")
           .attr("y", function(d) { return sorted.indexOf(d.row-1) * cellSize; })
           ;
         t.selectAll(".rowLabel")
          .attr("y", function (d, i) { return sorted.indexOf(i) * cellSize; })
         ;
       }
  }

  d3.select("#order").on("change",function(){
    order(this.value);
  });
  
  function order(value){
   if(value=="hclust"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("x", function(d) { return hccol.indexOf(d.col) * cellSize; })
      .attr("y", function(d) { return hcrow.indexOf(d.row) * cellSize; })
      ;

    t.selectAll(".rowLabel")
      .attr("y", function (d, i) { return hcrow.indexOf(i+1) * cellSize; })
      ;

    t.selectAll(".colLabel")
      .attr("y", function (d, i) { return hccol.indexOf(i+1) * cellSize; })
      ;

   }else if (value=="probecontrast"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("x", function(d) { return (d.col - 1) * cellSize; })
      .attr("y", function(d) { return (d.row - 1) * cellSize; })
      ;

    t.selectAll(".rowLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;

    t.selectAll(".colLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;

   }else if (value=="probe"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("y", function(d) { return (d.row - 1) * cellSize; })
      ;

    t.selectAll(".rowLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;
   }else if (value=="contrast"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("x", function(d) { return (d.col - 1) * cellSize; })
      ;
    t.selectAll(".colLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;
   }
  }
  // 
  var sa=d3.select(".g3")
      .on("mousedown", function() {
          if( !d3.event.altKey) {
             d3.selectAll(".cell-selected").classed("cell-selected",false);
             d3.selectAll(".rowLabel").classed("text-selected",false);
             d3.selectAll(".colLabel").classed("text-selected",false);
          }
         var p = d3.mouse(this);
         sa.append("rect")
         .attr({
             rx      : 0,
             ry      : 0,
             class   : "selection",
             x       : p[0],
             y       : p[1],
             width   : 1,
             height  : 1
         })
      })
      .on("mousemove", function() {
         var s = sa.select("rect.selection");
      
         if(!s.empty()) {
             var p = d3.mouse(this),
                 d = {
                     x       : parseInt(s.attr("x"), 10),
                     y       : parseInt(s.attr("y"), 10),
                     width   : parseInt(s.attr("width"), 10),
                     height  : parseInt(s.attr("height"), 10)
                 },
                 move = {
                     x : p[0] - d.x,
                     y : p[1] - d.y
                 }
             ;
      
             if(move.x < 1 || (move.x*2<d.width)) {
                 d.x = p[0];
                 d.width -= move.x;
             } else {
                 d.width = move.x;       
             }
      
             if(move.y < 1 || (move.y*2<d.height)) {
                 d.y = p[1];
                 d.height -= move.y;
             } else {
                 d.height = move.y;       
             }
             s.attr(d);
      
                 // deselect all temporary selected state objects
             d3.selectAll('.cell-selection.cell-selected').classed("cell-selected", false);
             d3.selectAll(".text-selection.text-selected").classed("text-selected",false);

             d3.selectAll('.cell').filter(function(cell_d, i) {
                 if(
                     !d3.select(this).classed("cell-selected") && 
                         // inner circle inside selection frame
                     (this.x.baseVal.value)+cellSize >= d.x && (this.x.baseVal.value)<=d.x+d.width && 
                     (this.y.baseVal.value)+cellSize >= d.y && (this.y.baseVal.value)<=d.y+d.height
                 ) {
      
                     d3.select(this)
                     .classed("cell-selection", true)
                     .classed("cell-selected", true);

                     d3.select(".r"+(cell_d.row-1))
                     .classed("text-selection",true)
                     .classed("text-selected",true);

                     d3.select(".c"+(cell_d.col-1))
                     .classed("text-selection",true)
                     .classed("text-selected",true);
                 }
             });
         }
      })
      .on("mouseup", function() {
            // remove selection frame
         sa.selectAll("rect.selection").remove();
      
             // remove temporary selection marker class
         d3.selectAll('.cell-selection').classed("cell-selection", false);
         d3.selectAll(".text-selection").classed("text-selection",false);
      })
      .on("mouseout", function() {
         if(d3.event.relatedTarget.tagName=='html') {
                 // remove selection frame
             sa.selectAll("rect.selection").remove();
                 // remove temporary selection marker class
             d3.selectAll('.cell-selection').classed("cell-selection", false);
             d3.selectAll(".rowLabel").classed("text-selected",false);
             d3.selectAll(".colLabel").classed("text-selected",false);
         }
      })
      ;
});



var margin = { top: 150, right: 10, bottom: 50, left: 100 },
  cellSize=16;
  row_number=5;
  col_number=<?php echo json_encode($hcrow);?>.length;
  width = cellSize*col_number, // - margin.left - margin.right,
  height = cellSize*row_number , // - margin.top - margin.bottom,
  //gridSize = Math.floor(width / 24),
  legendElementWidth = cellSize*1.5,
  colorBuckets = 21,
  colors1 = ['#FFFFFF','#F1EEF6','#E6D3E1','#DBB9CD','#D19EB9','#C684A4','#BB6990','#B14F7C','#A63467','#9B1A53','#91003F'];
  colors1.reverse();
  hccol=<?php echo json_encode($hcrow);?>
  , // change to gene name or probe id
  hcrow = [1,2,3,4,5], // change to gene name or probe id
  colLabel = <?php echo json_encode($linked_genes_input);?>, // change to gene name or probe id
  rowLabel = ['1 h', '3 h', '6 h', '12 h', '24 h']; // change to contrast name

d3.tsv("http://bioinf.iiit.ac.in/ricenet/ricenetwork/heatmap_pval_data.csv",
function(d) {
  return {
    row:   +d.row_idx,
    col:   +d.col_idx,
    value: +d.log2ratio
  };
},
function(error, data) {
  var colorScale = d3.scale.quantile()
      .domain([ 0 , 0, 1])
      .range(colors1);
  
  var svg = d3.select("#chart2").append("svg")
      .attr("width", 1000)
      .attr("height", height + margin.top + margin.bottom)
      .append("g")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
      ;
  var rowSortOrder=false;
  var colSortOrder=false;
  var rowLabels = svg.append("g")
      .selectAll(".rowLabelg")
      .data(rowLabel)
      .enter()
      .append("text")
      .text(function (d) { return d; })
      .attr("x", 0)
      .attr("y", function (d, i) { return hcrow.indexOf(i+1) * cellSize; })
      .style("text-anchor", "end")
      .attr("transform", "translate(-6," + cellSize / 1.5 + ")")
      .attr("class", function (d,i) { return "rowLabel r"+i;} ) 
      .on("mouseover", function(d) {d3.select(this).classed("text-hover",true);})
      .on("mouseout" , function(d) {d3.select(this).classed("text-hover",false);})
      .on("click", function(d,i) {rowSortOrder=!rowSortOrder; sortbylabel("r",i,rowSortOrder);d3.select("#order").property("selectedIndex", 4).node().focus();;})
      ;

  var colLabels = svg.append("g")
      .selectAll(".colLabelg")
      .data(colLabel)
      .enter()
      .append("text")
      .text(function (d) { return d; })
      .attr("x", 0)
      .attr("y", function (d, i) { return hccol.indexOf(i+1) * cellSize; })
      .style("text-anchor", "left")
      .attr("transform", "translate("+cellSize/2 + ",-6) rotate (-90)")
      .attr("class",  function (d,i) { return "colLabel c"+i;} )
      .on("mouseover", function(d) {d3.select(this).classed("text-hover",true);})
      .on("mouseout" , function(d) {d3.select(this).classed("text-hover",false);})
      .on("click", function(d,i) {colSortOrder=!colSortOrder;  sortbylabel("c",i,colSortOrder);d3.select("#order").property("selectedIndex", 4).node().focus();;})
      ;

  var heatMap = svg.append("g").attr("class","g3")
        .selectAll(".cellg")
        .data(data,function(d){return d.row+":"+d.col;})
        .enter()
        .append("rect")
        .attr("x", function(d) { return hccol.indexOf(d.col) * cellSize; })
        .attr("y", function(d) { return hcrow.indexOf(d.row) * cellSize; })
        .attr("class", function(d){return "cell cell-border cr"+(d.row-1)+" cc"+(d.col-1);})
        .attr("width", cellSize)
        .attr("height", cellSize)
        .style("fill", function(d) { return colorScale(d.value); })
        /* .on("click", function(d) {
               var rowtext=d3.select(".r"+(d.row-1));
               if(rowtext.classed("text-selected")==false){
                   rowtext.classed("text-selected",true);
               }else{
                   rowtext.classed("text-selected",false);
               }
        })*/
        .on("mouseover", function(d){
               //highlight text
               d3.select(this).classed("cell-hover",true);
               d3.selectAll(".rowLabel").classed("text-highlight",function(r,ri){ return ri==(d.row-1);});
               d3.selectAll(".colLabel").classed("text-highlight",function(c,ci){ return ci==(d.col-1);});
        
               //Update the tooltip position and value
               d3.select("#tooltip2")
                 .style("left", (d3.event.pageX+10) + "px")
                 .style("top", (d3.event.pageY-10) + "px")
                 .select("#value2")
                 .text("lables:"+rowLabel[d.row-1]+","+colLabel[d.col-1]+"\ndata:"+d.value+"\nrow-col-idx:"+d.col+","+d.row+"\ncell-xy "+this.x.baseVal.value+", "+this.y.baseVal.value);  
               //Show the tooltip
               d3.select("#tooltip2").classed("hidden", false);
        })
        .on("mouseout", function(){
               d3.select(this).classed("cell-hover",false);
               d3.selectAll(".rowLabel").classed("text-highlight",false);
               d3.selectAll(".colLabel").classed("text-highlight",false);
               d3.select("#tooltip2").classed("hidden", true);
        })
        ;
    //var range_legend = new Array();
    var range_legend= [0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1]
  var legend = svg.selectAll(".legend")
      .data(range_legend)
      .enter().append("g")
      .attr("class", "legend");
 
  legend.append("rect")
    .attr("x", function(d, i) { return legendElementWidth * i; })
    .attr("y", height+(12*2))
    .attr("width", legendElementWidth+2)
    .attr("height", 12)
    .style("fill", function(d, i) { return colors1[i]; });
 
  legend.append("text")
    .text(function(d) { return d; })
    .attr("width", legendElementWidth+2)
    .attr("x", function(d, i) { return legendElementWidth * i; })
    .attr("y", height + (48));

// Change ordering of cells

  function sortbylabel(rORc,i,sortOrder){
       var t = svg.transition().duration(3000);
       var log2r=[];
       var sorted; // sorted is zero-based index
       d3.selectAll(".c"+rORc+i) 
         .filter(function(ce){
            log2r.push(ce.value);
          })
       ;
       if(rORc=="r"){ // sort log2ratio of a gene
         sorted=d3.range(col_number).sort(function(a,b){ if(sortOrder){ return log2r[b]-log2r[a];}else{ return log2r[a]-log2r[b];}});
         t.selectAll(".cell")
           .attr("x", function(d) { return sorted.indexOf(d.col-1) * cellSize; })
           ;
         t.selectAll(".colLabel")
          .attr("y", function (d, i) { return sorted.indexOf(i) * cellSize; })
         ;
       }else{ // sort log2ratio of a contrast
         sorted=d3.range(row_number).sort(function(a,b){if(sortOrder){ return log2r[b]-log2r[a];}else{ return log2r[a]-log2r[b];}});
         t.selectAll(".cell")
           .attr("y", function(d) { return sorted.indexOf(d.row-1) * cellSize; })
           ;
         t.selectAll(".rowLabel")
          .attr("y", function (d, i) { return sorted.indexOf(i) * cellSize; })
         ;
       }
  }

  d3.select("#order2").on("change",function(){
    order(this.value);
  });
  
  function order(value){
   if(value=="hclust"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("x", function(d) { return hccol.indexOf(d.col) * cellSize; })
      .attr("y", function(d) { return hcrow.indexOf(d.row) * cellSize; })
      ;

    t.selectAll(".rowLabel")
      .attr("y", function (d, i) { return hcrow.indexOf(i+1) * cellSize; })
      ;

    t.selectAll(".colLabel")
      .attr("y", function (d, i) { return hccol.indexOf(i+1) * cellSize; })
      ;

   }else if (value=="probecontrast"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("x", function(d) { return (d.col - 1) * cellSize; })
      .attr("y", function(d) { return (d.row - 1) * cellSize; })
      ;

    t.selectAll(".rowLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;

    t.selectAll(".colLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;

   }else if (value=="probe"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("y", function(d) { return (d.row - 1) * cellSize; })
      ;

    t.selectAll(".rowLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;
   }else if (value=="contrast"){
    var t = svg.transition().duration(3000);
    t.selectAll(".cell")
      .attr("x", function(d) { return (d.col - 1) * cellSize; })
      ;
    t.selectAll(".colLabel")
      .attr("y", function (d, i) { return i * cellSize; })
      ;
   }
  }
  // 
  var sa=d3.select(".g3")
      .on("mousedown", function() {
          if( !d3.event.altKey) {
             d3.selectAll(".cell-selected").classed("cell-selected",false);
             d3.selectAll(".rowLabel").classed("text-selected",false);
             d3.selectAll(".colLabel").classed("text-selected",false);
          }
         var p = d3.mouse(this);
         sa.append("rect")
         .attr({
             rx      : 0,
             ry      : 0,
             class   : "selection",
             x       : p[0],
             y       : p[1],
             width   : 1,
             height  : 1
         })
      })
      .on("mousemove", function() {
         var s = sa.select("rect.selection");
      
         if(!s.empty()) {
             var p = d3.mouse(this),
                 d = {
                     x       : parseInt(s.attr("x"), 10),
                     y       : parseInt(s.attr("y"), 10),
                     width   : parseInt(s.attr("width"), 10),
                     height  : parseInt(s.attr("height"), 10)
                 },
                 move = {
                     x : p[0] - d.x,
                     y : p[1] - d.y
                 }
             ;
      
             if(move.x < 1 || (move.x*2<d.width)) {
                 d.x = p[0];
                 d.width -= move.x;
             } else {
                 d.width = move.x;       
             }
      
             if(move.y < 1 || (move.y*2<d.height)) {
                 d.y = p[1];
                 d.height -= move.y;
             } else {
                 d.height = move.y;       
             }
             s.attr(d);
      
                 // deselect all temporary selected state objects
             d3.selectAll('.cell-selection.cell-selected').classed("cell-selected", false);
             d3.selectAll(".text-selection.text-selected").classed("text-selected",false);

             d3.selectAll('.cell').filter(function(cell_d, i) {
                 if(
                     !d3.select(this).classed("cell-selected") && 
                         // inner circle inside selection frame
                     (this.x.baseVal.value)+cellSize >= d.x && (this.x.baseVal.value)<=d.x+d.width && 
                     (this.y.baseVal.value)+cellSize >= d.y && (this.y.baseVal.value)<=d.y+d.height
                 ) {
      
                     d3.select(this)
                     .classed("cell-selection", true)
                     .classed("cell-selected", true);

                     d3.select(".r"+(cell_d.row-1))
                     .classed("text-selection",true)
                     .classed("text-selected",true);

                     d3.select(".c"+(cell_d.col-1))
                     .classed("text-selection",true)
                     .classed("text-selected",true);
                 }
             });
         }
      })
      .on("mouseup", function() {
            // remove selection frame
         sa.selectAll("rect.selection").remove();
      
             // remove temporary selection marker class
         d3.selectAll('.cell-selection').classed("cell-selection", false);
         d3.selectAll(".text-selection").classed("text-selection",false);
      })
      .on("mouseout", function() {
         if(d3.event.relatedTarget.tagName=='html') {
                 // remove selection frame
             sa.selectAll("rect.selection").remove();
                 // remove temporary selection marker class
             d3.selectAll('.cell-selection').classed("cell-selection", false);
             d3.selectAll(".rowLabel").classed("text-selected",false);
             d3.selectAll(".colLabel").classed("text-selected",false);
         }
      })
      ;
});













document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
      },1000);
  }
}



var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#myDiv').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});



window.onload=expression_viewer_pressed();





function expression_viewer_pressed(){
  mm1 = document.getElementById("mm1");
  mm2 = document.getElementById("mm2");
  mm3 = document.getElementById("mm3");
  mm4 = document.getElementById("mm4");

  mm1.classList.add("selected");
  mm2.classList.remove("selected");
  mm3.classList.remove("selected");
  mm4.classList.remove("selected");


  network_viewer = document.getElementById("network_viewer");
  neighbour_network_viewer = document.getElementById("neighbour_network_viewer");
  expression_viewer = document.getElementById("expression_viewer");
  module_viewer = document.getElementById("module_viewer");
  network_viewer.style.display="none";
  neighbour_network_viewer.style.display="none";
  expression_viewer.style.display="";
  module_viewer.style.display="none";

  site=document.getElementById('site_map');
  site.innerHTML='<a href="<?php echo site_url('search');?>">search</a>/<a href="#">Expression_Viewer</a>'
  tis = document.getElementById('tissue');
  var t = <?php echo $tissue; ?>;
  if(t==1){
    tis.innerHTML='Tissue: Root | ';
  }
  if(t==2){
    tis.innerHTML='Tissue: Shoot | ';
  }

  condition = document.getElementById('condition');
  var c = <?php echo $stress; ?>; 
  if(c==1){
    condition.innerHTML='Stress Condition: Heat';
  }
  if(c==2){
    condition.innerHTML='Stress Condition: Drought';
  }
  if(c==3){
    condition.innerHTML='Stress Condition: Cold';
  }
  if(c==4){
    condition.innerHTML='Stress Condition: ABA';
  }
  if(c==5){
    condition.innerHTML='Stress Condition: JA';
  }
  if(c==6){
    condition.innerHTML='Stress Condition: Osmotic';
  }
  if(c==7){
    condition.innerHTML='Stress Condition: Flood';
  }
}


function network_viewer_pressed(){
  mm1 = document.getElementById("mm1");
  mm2 = document.getElementById("mm2");
  mm3 = document.getElementById("mm3");
  mm4 = document.getElementById("mm4");

  mm1.classList.remove("selected");
  mm2.classList.add("selected");
  mm3.classList.remove("selected");
  mm4.classList.remove("selected");


  network_viewer = document.getElementById("network_viewer");
  neighbour_network_viewer = document.getElementById("neighbour_network_viewer");
  expression_viewer = document.getElementById("expression_viewer");
  module_viewer = document.getElementById("module_viewer");
  network_viewer.style.display="";
  neighbour_network_viewer.style.display="none";
  module_viewer.style.display="none";
  expression_viewer.style.display="none";
  full_visualization(1);
  site=document.getElementById('site_map');
site.innerHTML='<a href="<?php echo site_url('search');?>">search</a>/<a href="#">Gene_Network_Viewer</a>';
}

function neighbour_network_viewer_pressed(){
  mm1 = document.getElementById("mm1");
  mm2 = document.getElementById("mm2");
  mm3 = document.getElementById("mm3");
  mm4 = document.getElementById("mm4");

  mm1.classList.remove("selected");
  mm2.classList.remove("selected");
  mm3.classList.add("selected");
  mm4.classList.remove("selected");


  neighbour_network_viewer = document.getElementById("neighbour_network_viewer");
  expression_viewer = document.getElementById("expression_viewer");
  network_viewer = document.getElementById("network_viewer");
  module_viewer = document.getElementById("module_viewer");
  network_viewer.style.display="none";
  neighbour_network_viewer.style.display="";
  module_viewer.style.display="none";
  expression_viewer.style.display="none";
  full_visualization_neighbour(1);
  site=document.getElementById('site_map');
site.innerHTML='<a href="<?php echo site_url('search');?>">search</a>/<a href="#">Gene_Network_Viewer</a>';

}

function module_viewer_pressed(){
  mm1 = document.getElementById("mm1");
  mm2 = document.getElementById("mm2");
  mm3 = document.getElementById("mm3");
  mm4 = document.getElementById("mm4");

  mm1.classList.remove("selected");
  mm2.classList.remove("selected");
  mm3.classList.remove("selected");
  mm4.classList.add("selected");


  network_viewer = document.getElementById("network_viewer");
  neighbour_network_viewer = document.getElementById("neighbour_network_viewer");
  expression_viewer = document.getElementById("expression_viewer");
  module_viewer = document.getElementById("module_viewer");
  network_viewer.style.display="none";
  neighbour_network_viewer.style.display="none";
  expression_viewer.style.display="none";
  module_viewer.style.display="";
  full_visualization_module(3);
  site=document.getElementById('site_map');
site.innerHTML='<a href="<?php echo site_url('search');?>">search</a>/<a href="#">Module_Viewer</a>'
}


function fc_heatmap_pressed(){
  fc1 = document.getElementById("fc1");
  pv1 = document.getElementById("pv1");

  fc1.classList.add("selected");
  pv1.classList.remove("selected");

  mm1 = document.getElementById("fold-change-hm");
  mm2 = document.getElementById("p-val-hm");
  mm1.style.display="";
  mm2.style.display="none"
  
}


function p_value_heatmap_pressed(){
  fc1 = document.getElementById("fc1");
  pv1 = document.getElementById("pv1");

  fc1.classList.remove("selected");
  pv1.classList.add("selected");

  mm1 = document.getElementById("fold-change-hm");
  mm2 = document.getElementById("p-val-hm");
  mm1.style.display="none";
  mm2.style.display=""
  
}




function node_attr_viewer_pressed(){
  na = document.getElementById("na");
  ea = document.getElementById("ea");
  

  na.classList.add("selected");
  ea.classList.remove("selected");


  node_attr = document.getElementById("node_attr");
  edge_attr = document.getElementById("edge_attr");
  edge_attr.style.display="none";
  node_attr.style.display="";
}


function neighbour_edge_attr_viewer_pressed(){
  node_attr = document.getElementById("neighbour_node_attr");
  edge_attr = document.getElementById("neighbour_edge_attr");
  edge_attr.style.display="";
  node_attr.style.display="none";
}

function neighbour_node_attr_viewer_pressed(){
  node_attr = document.getElementById("neighbour_node_attr");
  edge_attr = document.getElementById("neighbour_edge_attr");
  edge_attr.style.display="none";
  node_attr.style.display="";
}


function edge_attr_viewer_pressed(){
  na = document.getElementById("na");
  ea = document.getElementById("ea");
  

  na.classList.remove("selected");
  ea.classList.add("selected");

  node_attr = document.getElementById("node_attr");
  edge_attr = document.getElementById("edge_attr");
  edge_attr.style.display="";
  node_attr.style.display="none";
}

function module_over_viewer_pressed(){
  gmd1 = document.getElementById("gmd");
  links = document.getElementById("links");
  rmg1 = document.getElementById("rmg");
  gmd1.style.display="none";
  links.style.display="none";
  rmg1.style.display="";

}

function degree_viewer_pressed(){
  gmd1 = document.getElementById("gmd");
  links = document.getElementById("links");
  rmg1 = document.getElementById("rmg");
  gmd1.style.display="";
  links.style.display="none";
  rmg1.style.display="none";
}

function edge_info_viewer_pressed(){
  gmd1 = document.getElementById("gmd");
  links = document.getElementById("links");
  rmg1 = document.getElementById("rmg");
  gmd1.style.display="none";
  links.style.display="";
  rmg1.style.display="none";
}
  


// Get the button that opens the modal


// Get the <span> element that closes the modal




// When the user clicks on <span> (x), close the modal

// When the user clicks anywhere outside of the modal, close it




function show_in_graph(gene){
  //rerun_graph4(neighbour_modules);
  
  var edges=[];  
  temp= neighbour_modules;
  neighbour_modules['edges']=neighbour_temp_modules['edges'];
  //neighbour_modules['edges']=temp;
  
  for(var key in neighbour_modules['edges']){
    for (var key1 in neighbour_modules['edges'][key]){
      if(neighbour_modules['edges'][key][key1]['source'] == gene || neighbour_modules['edges'][key][key1]['target'] == gene  ){
        var data = new Object();
        data.source = neighbour_modules['edges'][key][key1]['source'];
        data.target = neighbour_modules['edges'][key][key1]['target'];
        data.name = neighbour_modules['edges'][key][key1]['name'];
        var data2 = new Object();
        data2.data = data;
        edges.push(data2);
      }

    }
  }
    neighbour_modules['edges']=edges;
  rerun_graph3(neighbour_modules);
  //neighbour_modules=temp;
  /*for(var key in neighbour_modules['nodes']){
    console.log(neighbour_modules['nodes'][key]['data']['name']);
    console.log(gene);
        if (neighbour_modules['nodes'][key]['data']['name']==gene){
          console.log(gene);
          neighbour_modules['nodes'][key]['temp_classes']=neighbour_modules['nodes'][key]['classes'];           
          neighbour_modules['nodes'][key]['classes']="black";
          }
        else{
          neighbour_modules['nodes'][key]['classes']=neighbour_modules['nodes'][key]['temp_classes'];
          
        }   
        
    }*/
    

}




var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
/*window.onclick = function(event) {
    modal.style.display = "none";

}*/
span.onclick = function() {
  modal.style.display = "none";

}

function ic4r_link(gene){
  console.log("sdfasdfa");
  modal.style.display = "block";
  
  if1=document.getElementById('iframe1');
  if1.src = "http://homolog.ic4r.org/genes/"+gene+"/tree_iframe";

  if1=document.getElementById('iframe2');
  if1.src = "http://expression.ic4r.org/expression-api?term="+gene;

  
}


var general = <?php echo $general;?>;
var modules = <?php echo $modules;?>;
var modules1 = <?php echo $modules;?>;
var neighbour_general = <?php echo $neighbour_general;?>;
var neighbour_modules = <?php echo $neighbour_modules;?>;
var one_hr = <?php echo $one_hr;?>;
var neighbour_one_hr = <?php echo $neighbour_one_hr;?>;
var three_hr = <?php echo $three_hr;?>;
var neighbour_three_hr = <?php echo $neighbour_three_hr;?>;
var six_hr = <?php echo $six_hr;?>;
var neighbour_six_hr = <?php echo $neighbour_six_hr;?>;
var twelve_hr = <?php echo $twelve_hr;?>;
var neighbour_twelve_hr = <?php echo $neighbour_twelve_hr;?>;
var twentyfour_hr = <?php echo $twentyfour_hr;?>;
var neighbour_twentyfour_hr = <?php echo $neighbour_twentyfour_hr;?>;
var hrr_network = <?php echo $hrr_network;?>;
var neighbour_hrr_network = <?php echo $neighbour_hrr_network;?>;
var temp_modules = <?php echo $modules;?>;
var neighbour_temp_modules = <?php echo $neighbour_modules;?>;
var drought = <?php echo $drought;?>;
var cold = <?php echo $cold;?>;
var aba = <?php echo $aba;?>;
var ja = <?php echo $ja;?>;
var osmotic = <?php echo $osmotic;?>;
var flood = <?php echo $flood;?>;

var neighbour_drought = <?php echo $neighbour_drought;?>;
var neighbour_cold = <?php echo $neighbour_cold;?>;
var neighbour_aba = <?php echo $neighbour_aba;?>;
var neighbour_ja = <?php echo $neighbour_ja;?>;
var neighbour_osmotic = <?php echo $neighbour_osmotic;?>;
var neighbour_flood = <?php echo $neighbour_flood;?>;



var module_gene_array=["sdf"];
module_gene_array[0]="t"; 
module_gene_array[1]="t"; 
module_gene_array[2]="t"; 
module_gene_array[3]=<?php echo $Brown;?>; 
module_gene_array[4]=<?php echo $Green;?>; 
module_gene_array[5]=<?php echo $Yellow;?>; 
module_gene_array[6]=<?php echo $Blue;?>; 
module_gene_array[7]=<?php echo $Salmon;?>; 
module_gene_array[8]=<?php echo $Turquoise;?>; 
module_gene_array[9]=<?php echo $Grey;?>; 
module_gene_array[10]=<?php echo $Black;?>; 
module_gene_array[11]=<?php echo $MNB;?>; 
module_gene_array[12]=<?php echo $Tan;?>; 
module_gene_array[13]=<?php echo $Pink;?>; 
module_gene_array[14]=<?php echo $Purple;?>; 
module_gene_array[15]=<?php echo $Greenyellow;?>; 
module_gene_array[16]=<?php echo $Red;?>; 
module_gene_array[17]=<?php echo $Lightcyan;?>; 
module_gene_array[18]=<?php echo $Lightyellow;?>; 
module_gene_array[19]=<?php echo $Royalblue;?>; 
module_gene_array[20]=<?php echo $Cyan;?>; 
module_gene_array[21]=<?php echo $Grey60;?>; 
module_gene_array[22]=<?php echo $Magenta;?>; 
module_gene_array[23]=<?php echo $Lightgreen;?>; 
module_gene_array[24]=<?php echo $Midnightblue;?>; 
module_gene_array[25]=<?php echo $Royalblue;?>; 


modules['edges']=hrr_network['edges'];

/*var cytoscape = require('cytoscape/dist/cytoscape.js');

var coseLayout = require('cytoscape-cola/cytoscape-cose-bilkent.js');

var euler = require("<?php echo base_url().'assets/js/cytoscape-euler.js';?>");

cytoscape.use(coseLayout);
cytoscape.use(euler);
*/

var cy1 = cytoscape({
  container: document.getElementById('cy1'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        
        'width': 40,
        'height': 40
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      
    .selector('#cy')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 0,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: modules,

  layout: {
    name: 'breadthfirst'
  },

  zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'



});

var cy3 = cytoscape({
  container: document.getElementById('cy3'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        
        'width': 40,
        'height': 40
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      
    .selector('#cy')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 0,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: modules,

  layout: {
    name: 'breadthfirst'
  },

  zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'



});

var cy4 = cytoscape({
  container: document.getElementById('cy4'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        
        'width': 40,
        'height': 40
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      
    .selector('#cy4')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 0,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: modules,

  layout: {
    name: 'random'
  },

  zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'



});

function full_visualization_neighbour(value){
  
    if(value==1){
      neighbour_modules['nodes']=neighbour_general['nodes'];
      /*alert('Please note that the genes which do not show any interaction in top 100 HRR are not shown here in the network.\nYou can see the last column of the node attributes column below.\nThank you.')*/
    }
    
    if(value==2){
      neighbour_modules['nodes']=neighbour_one_hr['nodes'];
      /*alert('The genes which are up regulated after 1 hour time-point are coloured red while the genes which are down-regulated after 1 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==3){
      neighbour_modules['nodes']=neighbour_three_hr['nodes'];
      /*alert('The genes which are up regulated after 3 hour time-point are coloured red while the genes which are down-regulated after 3 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==4){
      neighbour_modules['nodes']=neighbour_six_hr['nodes'];
      /*alert('The genes which are up regulated after 6 hour time-point are coloured red while the genes which are down-regulated after 6 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==5){
      neighbour_modules['nodes']=neighbour_twelve_hr['nodes'];
      /*alert('The genes which are up regulated after 12 hour time-point are coloured red while the genes which are down-regulated after 12 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==6){
      neighbour_modules['nodes']=neighbour_twentyfour_hr['nodes'];
      /*alert('The genes which are up regulated after 24 hour time-point are coloured red while the genes which are down-regulated after 24 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==7){
      neighbour_modules['nodes']=neighbour_temp_modules['nodes'];
      /*alert('In the network the genes are coloured on the basis of the module they belong to!\nThank you.')*/
    }
    if(value==8){
      neighbour_modules['edges']=neighbour_one_hr['edges'];
      /*alert('The genes which are up regulated after 1 hour time-point are coloured red while the genes which are down-regulated after 1 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==9){
      neighbour_modules['edges']=neighbour_drought['edges'];
      /*alert('The correlation between network edges during drought stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==10){
      neighbour_modules['edges']=neighbour_cold['edges'];
      /*alert('The correlation between network edges during Cold stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==11){
      neighbour_modules['edges']=neighbour_aba['edges'];
      /*alert('The correlation between network edges during ABA stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==12){
      neighbour_modules['edges']=neighbour_ja['edges'];
      /*alert('The correlation between network edges during JA stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==13){
      neighbour_modules['edges']=neighbour_osmotic['edges'];
      /*alert('The correlation between network edges during Osmotic stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==14){
      neighbour_modules['edges']=neighbour_flood['edges'];
      /*alert('The correlation between network edges during Flood stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    
    if(value==16){
      neighbour_modules['edges']=neighbour_hrr_network['edges'];
      /*alert('The edges are marked as their HRR values in the said stress condition.\nThank you.')*/
    } 
    rerun_graph3(neighbour_modules);

}


function full_visualization(value){
  
    if(value==1){
      modules['nodes']=general['nodes'];
      /*alert('Please note that the genes which do not show any interaction in top 100 HRR are not shown here in the network.\nYou can see the last column of the node attributes column below.\nThank you.')*/
    }
    
    if(value==2){
      modules['nodes']=one_hr['nodes'];
      /*alert('The genes which are up regulated after 1 hour time-point are coloured red while the genes which are down-regulated after 1 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==3){
      modules['nodes']=three_hr['nodes'];
      /*alert('The genes which are up regulated after 3 hour time-point are coloured red while the genes which are down-regulated after 3 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==4){
      modules['nodes']=six_hr['nodes'];
      /*alert('The genes which are up regulated after 6 hour time-point are coloured red while the genes which are down-regulated after 6 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==5){
      modules['nodes']=twelve_hr['nodes'];
      /*alert('The genes which are up regulated after 12 hour time-point are coloured red while the genes which are down-regulated after 12 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==6){
      modules['nodes']=twentyfour_hr['nodes'];
      /*alert('The genes which are up regulated after 24 hour time-point are coloured red while the genes which are down-regulated after 24 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==7){
      modules['nodes']=temp_modules['nodes'];
      /*alert('In the network the genes are coloured on the basis of the module they belong to!\nThank you.')*/
    }
    if(value==8){
      modules['edges']=one_hr['edges'];
      /*alert('The genes which are up regulated after 1 hour time-point are coloured red while the genes which are down-regulated after 1 hour time-point are coloured blue.\nThank you.')*/
    }
    if(value==9){
      modules['edges']=drought['edges'];
      /*alert('The correlation between network edges during drought stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==10){
      modules['edges']=cold['edges'];
      /*alert('The correlation between network edges during Cold stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==11){
      modules['edges']=aba['edges'];
      /*alert('The correlation between network edges during ABA stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==12){
      modules['edges']=ja['edges'];
      /*alert('The correlation between network edges during JA stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==13){
      modules['edges']=osmotic['edges'];
      /*alert('The correlation between network edges during Osmotic stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    if(value==14){
      modules['edges']=flood['edges'];
      /*alert('The correlation between network edges during Flood stress condition.\nThe edges which do not show correlation in top 100 HRR are marked as NA.\nThank you.')*/
    }
    
    if(value==16){
      modules['edges']=hrr_network['edges'];
      /*alert('The edges are marked as their HRR values in the said stress condition.\nThank you.')*/
    } 
    rerun_graph(modules);

}



function change_network_layout(layout){
  if(layout==1){
    l = "random";
  }
  if(layout== 2){
    l = "grid";
  }
  if(layout == 3){
    l="circle";
  }
  if(layout == 4){
    l="concentric";
  }
  if(layout == 5){
    l="cose";
  }
  if(layout == 6){
    l="cose-bilkent";
  }
  if(layout == 7){
    l="cola";
  }
  if(layout == 8){
    l="euler";
  }
  if(layout == 9){
    l="spread";
  }
  
  if(layout == 10){
    l="degree";
  }
  if(layout==11){
    l = "Klay";
  }
  if(layout == 12){
    l = "breadthfirst";
  }
  rerun_graph_layout(l);
}

function change_neighbour_network_layout(layout){
  if(layout==1){
    l = "random";
  }
  if(layout== 2){
    l = "grid";
  }
  if(layout == 3){
    l="circle";
  }
  if(layout == 4){
    l="concentric";
  }
  if(layout == 5){
    l="cose";
  }
  if(layout == 6){
    l="cose-bilkent";
  }
  if(layout == 7){
    l="cola";
  }
  if(layout == 8){
    l="euler";
  }
  if(layout == 9){
    l="spread";
  }
  
  if(layout == 10){
    l="degree";
  }
  if(layout==11){
    l = "Klay";
  }
  if(layout == 12){
    l = "breadthfirst";
  }
  rerun_neighbour_graph_layout(l);
}


function change_module_network_layout(layout){
  if(layout==1){
    l = "random";
  }
  if(layout== 2){
    l = "grid";
  }
  if(layout == 3){
    l="circle";
  }
  if(layout == 4){
    l="concentric";
  }
  if(layout == 5){
    l="cose";
  }
  if(layout == 6){
    l="cose-bilkent";
  }
  if(layout == 7){
    l="cola";
  }
  if(layout == 8){
    l="euler";
  }
  if(layout == 9){
    l="spread";
  }
  
  if(layout == 10){
    l="degree";
  }
  if(layout==11){
    l = "Klay";
  }
  if(layout == 12){
    l = "breadthfirst";
  }
  //console.log(l);
  rerun_module_graph_layout(l);
}

var temp;

function full_visualization_module(value){
  modules1['nodes']=module_gene_array[value]['nodes'];
  modules1['edges']=module_gene_array[value]['edges'];
  modules1=module_gene_array[value];
  temp = modules1['edges'];
  rerun_graph2(modules1);

  rmg = <?php echo $rmg;?>;
  console.log(rmg);
  var res="";
  for (var x in rmg[value]){
    res+='<tr>';
    res+='<td>';
    res+=rmg[value][x].module_id;
    res+='</td>';
    res+='<td>';
    res+=rmg[value][x].biological_process;
    res+='</td>';
    res+='<td>';
    res+=rmg[value][x].reflist_44321;
    res+='</td>';
    res+='<td>';
    res+=rmg[value][x].input_511;
    res+='</td>';
    res+='<td>';
    res+=rmg[value][x].input_expected;
    res+='</td>';
    res+='<td>';
    res+=rmg[value][x].input_over_under;
    res+='</td>';
    res+='<td>';
    res+=rmg[value][x].input_fold_enrichment;
    res+='</td>';
    res+='<td>';
    res+=rmg[value][x].input_raw_p_value;
    res+='</td>';
    

    
  }
  console.log(res);

  var go = document.getElementById('rmg');
  go.innerHTML='<table style="margin-left:15px;" class="table" id="tblCustomers7"><caption>Over-represented GO terms for Biological Process based on PANTHER Classifications (v 13.1) for the module genes</caption><thead><tr><th>Module ID</th><th>Biological Process</th><th>Oryza sativa (Ref List)</th><th>Input Genes mapped</th><th>Expected no. of Genes</th><th>Fold Enrichment</th><th>Over-representation (+)/Under-representation (-)</th><th>Raw <i>p</i>-value</th></tr></thead><tbody>'+res +'</tr></tbody></table>';

  res="";
  var cnt=0;
  gmd = <?php echo $gmd;?>;
  for (var x in gmd[value]){
    cnt=cnt+1;
    res+='<tr>';
    res+='<td>';
    res+=cnt;
    res+='</td>';
    res+='<td>';
    res+=gmd[value][x].os_id;
    res+='</td>';
    res+='<td>';
    res+=gmd[value][x].degree;
    res+='</td>';
    

  }

  go = document.getElementById('gmd');
  go.innerHTML='<table style="margin-left:15px;" class="table" id="tblCustomers8"><caption>Within-module degree of the top 100 high-degree genes of the module</caption><thead><tr><th>Sr. No.</th><th>Gene Id</th><th>IntraModular Connectivity</th></tr></thead><tbody>'+res +'</tr></tbody></table>';

  res="";
  var cnt=0;

  for(var key in modules1['edges']){
    for (var key1 in modules1['edges'][key]){
      cnt=cnt+1;
      res+='<tr>';
      res+='<td>';
      res+=cnt;
      res+='</td>';
      res+='<td>';
      res+=modules1['edges'][key][key1]['source'];
      res+='-';
      res+=modules1['edges'][key][key1]['target'];  
      res+='</td>';
      res+='<td>';
      res+=modules1['edges'][key][key1]['name'];
      res+='</td>';
      
    }
  }
go = document.getElementById('links');
  go.innerHTML='<table style="margin-left:15px;" class="table" id="tblCustomers6"><caption>Highest Reciprocal Ranks (HRRs) between the top 100 high-degree genes of the module</caption><thead><tr><th>Sr. No.</th><th>Link</th><th>HRR</th></tr></thead><tbody>'+res +'</tr></tbody></table>';
  control_module_edges(10);



$(document).ready(function() {
    $('#tblCustomers6').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

$(document).ready(function() {
    $('#tblCustomers7').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );


$(document).ready(function() {
    $('#tblCustomers8').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );


}

function control_module_edges(threshold){
  var edges=[];  
  modules1['edges']=temp;

  for(var key in modules1['edges']){
    for (var key1 in modules1['edges'][key]){
      
      if(Number(modules1['edges'][key][key1]['name']) <Number(threshold)  ){
        var data = new Object();
        data.source = modules1['edges'][key][key1]['source'];
        data.target = modules1['edges'][key][key1]['target'];
        data.name = modules1['edges'][key][key1]['name'];
        var data2 = new Object();
        data2.data = data;
        edges.push(data2);
      }

    }
  }
  modules1['edges']=edges;
  rerun_graph2(modules1);
  modules1['edges']=temp;
}


function node_labels(b){ 
  if(b==2){
    for(var key in modules['nodes']){
        modules['nodes'][key]['data']['name']="";   
    }
  }
  else{
    for(var key in modules['nodes']){
        modules['nodes'][key]['data']['name']=modules['nodes'][key]['data']['id'];
    }
  }
  rerun_graph(modules);
}

function neighbour_node_labels(b){ 
  if(b==2){
    for(var key in neighbour_modules['nodes']){
        neighbour_modules['nodes'][key]['data']['name']="";   
    }
  }
  else{
    for(var key in neighbour_modules['nodes']){
        neighbour_modules['nodes'][key]['data']['name']=neighbour_modules['nodes'][key]['data']['id'];
    }
  }
  rerun_graph3(neighbour_modules);
}

function module_node_labels(b){ 
  if(b==2){
    for(var key in modules1['nodes']){
        modules1['nodes'][key]['data']['name']="";   
    }
  }
  else{
    for(var key in modules1['nodes']){
        modules1['nodes'][key]['data']['name']=modules1['nodes'][key]['data']['id'];
    }
  }
  rerun_graph2(modules1);
}

function fc_3hr(){
    modules['nodes']=three_hr['nodes'];
    rerun_graph(modules);

}
function fc_6hr(){
    modules['nodes']=six_hr['nodes'];
    rerun_graph(modules);
}
function fc_12hr(){
    modules['nodes']=twelve_hr['nodes'];
    rerun_graph(modules);
}
function fc_24hr(){
    modules['nodes']=twentyfour_hr['nodes'];
    rerun_graph(modules);
}
function modules_wise(){
    modules['nodes']=temp_modules['nodes'];
    rerun_graph(modules);
}
function no_color(){
    modules['nodes']=general['nodes'];
    rerun_graph(modules);
}
function global_pcc(){
    modules['edges']=one_hr['edges'];
    rerun_graph(modules);
}
function hrr(){
    modules['edges']=hrr_network['edges'];
    rerun_graph(modules);
}



function fc_1hr(){
    modules['nodes']=one_hr['nodes'];
    rerun_graph(modules);

}

function fc_3hr(){
    modules['nodes']=three_hr['nodes'];
    rerun_graph(modules);

}
function fc_6hr(){
    modules['nodes']=six_hr['nodes'];
    rerun_graph(modules);
}
function fc_12hr(){
    modules['nodes']=twelve_hr['nodes'];
    rerun_graph(modules);
}
function fc_24hr(){
    modules['nodes']=twentyfour_hr['nodes'];
    rerun_graph(modules);
}
function modules_wise(){
    modules['nodes']=temp_modules['nodes'];
    rerun_graph(modules);
}
function no_color(){
    modules['nodes']=general['nodes'];
    rerun_graph(modules);
}
function global_pcc(){
    modules['edges']=one_hr['edges'];
    rerun_graph(modules);
}
function hrr(){
    modules['edges']=hrr_network['edges'];
    rerun_graph(modules);
}

function rerun_graph(data){
console.log(data);
cy1 = cytoscape({
  container: document.getElementById('cy1'),

  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'font-size':10,
        'width': 20,
        'height': 20
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
       .css({
         'background-color': 'black',
         'line-color': 'black',
         'target-arrow-color': 'black',
         'source-arrow-color': 'black',
         'text-outline-color': 'black'
       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })

//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#tfs, .tfs')
      .css({
        'shape':'triangle'
      })
      
    .selector('#cy1')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 2,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: data,

  layout: {
    name: 'breadthfirst'
  },

  zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'


});


cy1.on('tap', 'node', function(evt){
  var node = evt.target;
  
  if(cy1.$(node).data('name') =='' ){
    cy1.$(node).data('name', cy1.$(node).data('id'));
  }
  else{
    cy1.$(node).data('name', '');
  }
  

  
  

  /*//modal.style.display = "block";
  node.connectedEdges().animate({
    style: {lineColor: "green"}
  })
  search_btn=document.getElementById('myInput2');
  search_btn.value=node.id();
  table_search2();*/
  /*if1=document.getElementById('iframe1');
  if1.src = "http://homolog.ic4r.org/genes/"+node.id()+"/tree_iframe";

  if1=document.getElementById('iframe2');
  if1.src = "http://expression.ic4r.org/expression-api?term="+node.id();

  var gene_background = <?php echo $gene_background; ?>;
  var gene_id=gene_background[node.id()]['os_id'];
  var chromosome_no=gene_background[node.id()]['chromosome_no'];
  var strand=gene_background[node.id()]['strand'];
  var start_position=gene_background[node.id()]['start_position'];
  var end_position=gene_background[node.id()]['end_position'];
  gene_content=document.getElementById('gene_content');
  gene_content.innerHTML=
  '<table><thead><tr><td>Gene Id</td><td>Chromosome No.</td><td>Strand</td><td>Start Position</td><td>End Position</td></tr></thead><tbody><tr><td>'+gene_id+'</td><td>'+chromosome_no+'</td><td>'+strand+'</td><td>'+start_position+'</td><td>'+end_position+'</td></tr></tbody></table>';*/

});





}


function rerun_graph_layout(layout){

cy1 = cytoscape({
  container: document.getElementById('cy1'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'font-size':10,
        'width': 20,
        'height': 20
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
      .selector('#tfs, .tfs')
      .css({
        'shape':'triangle'
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      
    .selector('#cy1')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 2,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: modules,

  layout: {
    name: layout
  },

  zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'


});


cy1.on('tap', 'node', function(evt){
  var node = evt.target;
  
  if(cy1.$(node).data('name') =='' ){
    cy1.$(node).data('name', cy1.$(node).data('id'));
  }
  else{
    cy1.$(node).data('name', '');
  }

});

}











function prepHref_cy1(linkElement, img_id) {
  var png64 = cy1.png();
    linkElement.href = png64;
}

function json_cy1(linkElement, img_id) {
  var png64 = cy1.json();
    linkElement.href = png64;
}





/////////////////////////
function rerun_graph2(data){

cy2 = cytoscape({
  container: document.getElementById('cy2'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'font-size':10,
        'width': 20,
        'height': 20
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':
        0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#tfs, .tfs')
      .css({
        'shape':'triangle'
      })
      
    .selector('#cy2')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 2,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: data,

  layout: {
    name: 'breadthfirst'
  },
    zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'

});


cy2.on('tap', 'node', function(evt){
  var node = evt.target;
  
  if(cy2.$(node).data('name') =='' ){
    cy2.$(node).data('name', cy2.$(node).data('id'));
  }
  else{
    cy2.$(node).data('name', '');
  }

});





}


function rerun_graph3 (data){

cy3 = cytoscape({
  container: document.getElementById('cy3'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'font-size':10,
        'width': 20,
        'height': 20
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':
        0,
        'font-size': 10
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
      .selector('#tfs, .tfs')
      .css({
        'shape':'triangle'
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#inside, .inside')
      .css({
        'background-color': '#5dfc0a',
        'text-outline-color': '#000000',
        'color': '#FFFFFF',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#outside, .outside')
      .css({
        'background-color': '#000000',
        'color': 'white',
        'text-outline-color': '#000000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      
    .selector('#cy3')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 2,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: data,

  layout: {
    name: 'breadthfirst'
  },
    zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'

});

cy3.on('tap', 'node', function(evt){
  var node = evt.target;
  
  if(cy3.$(node).data('name') =='' ){
    cy3.$(node).data('name', cy3.$(node).data('id'));
  }
  else{
    cy3.$(node).data('name', '');
  }

});

}



function rerun_graph4(data){

cy4 = cytoscape({
  container: document.getElementById('cy4'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'font-size':10,
        'width': 20,
        'height': 20
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
      .selector('#tfs, .tfs')
      .css({
        'shape':'triangle'
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#inside, .inside')
      .css({
        'background-color': '#FFFFFF',
        'text-outline-color': '#000000',
        'color': '#FFFFFF',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#outside, .outside')
      .css({
        'background-color': '#000000',
        'color': 'white',
        'text-outline-color': '#000000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      
    .selector('#cy4')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 2,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: data,

  layout: {
    name: 'random'
  },
    zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'

});


cy4.on('tap', 'node', function(evt){
  var node = evt.target;
  
  if(cy4.$(node).data('name') =='' ){
    cy4.$(node).data('name', cy4.$(node).data('id'));
  }
  else{
    cy4.$(node).data('name', '');
  }

});


}



function rerun_neighbour_graph_layout(layout){

cy3 = cytoscape({
  container: document.getElementById('cy3'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'font-size':10,
        'width': 20,
        'height': 20
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
      .selector('#tfs, .tfs')
      .css({
        'shape':'triangle'
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#inside, .inside')
      .css({
        'background-color': '#5dfc0a',
        'text-outline-color': '#000000',
        'color': '#FFFFFF',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#outside, .outside')
      .css({
        'background-color': '#000000',
        'color': 'white',
        'text-outline-color': '#000000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      
    .selector('#cy3')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 2,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: neighbour_modules,

  layout: {
    name: layout
  },
    zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'

});


cy3.on('tap', 'node', function(evt){
  var node = evt.target;
  
  if(cy3.$(node).data('name') =='' ){
    cy3.$(node).data('name', cy3.$(node).data('id'));
  }
  else{
    cy3.$(node).data('name', '');
  }

});

}




function rerun_module_graph_layout(layout){

cy2 = cytoscape({
  container: document.getElementById('cy2'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'font-size':10,
        'width': 20,
        'height': 20
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 2,
        'line-color': '#888',
        'target-arrow-color': '#888',
        'source-arrow-color': '#888',
        'target-arrow-shape': 'triangle'
      })
    .selector(':selected')
//       .css({
//         'background-color': 'black',
//         'line-color': 'black',
//         'target-arrow-color': 'black',
//         'source-arrow-color': 'black',
//         'text-outline-color': 'black'
//       })
    .selector('$node > node')
      .css({
        'shape': 'roundrectangle',
        'text-valign': 'top',
        'height': 'auto',
        'width': 'auto',
        'background-color': '#ccc',
        'background-opacity': 0.333,
        'color': '#888',
        'text-outline-width':0,
        'font-size': 25
      })
//     .selector('#core')
//       .css({
//         'background-color': '#000',
//         'text-outline-color': '#000'
//       })
    .selector('#core, #app')
      .css({
        'width': 120,
        'height': 120,
        'font-size': 25
      })
      .selector('#tfs, .tfs')
      .css({
        'shape':'triangle'
      })
    .selector('#api')
      .css({
        'padding-top': 20,
        'padding-left': 20,
        'padding-bottom': 20,
        'padding-right': 20
      })
    .selector('#ext, .ext')
      .css({
        'background-color': '#93CDDD',
        'text-outline-color': '#93CDDD',
        'line-color': '#93CDDD',
        'target-arrow-color': '#93CDDD'
      })
    .selector('#app, .app')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#magenta, .magenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 2,
        'color': '#fff'
      })
      .selector('#inside, .inside')
      .css({
        'background-color': '#5dfc0a',
        'text-outline-color': '#000000',
        'color': '#FFFFFF',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      .selector('#outside, .outside')
      .css({
        'background-color': '#000000',
        'color': 'white',
        'text-outline-color': '#000000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        
        'text-outline-width': 2,
        'color': '#fff'
      }) 
      
    .selector('#cy2')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 25,
        'padding-top': 2,
        'padding-left': 4,
        'padding-bottom': 4,
        'padding-right': 4
      }),

  elements: neighbour_modules,

  layout: {
    name: layout
  },
    zoom: 1.2,
  pan: { x: 0, y: 0 },

  // interaction options:
  minZoom: 0.4,
  maxZoom: 2,
  zoomingEnabled: true,
  userZoomingEnabled: true,
  panningEnabled: true,
  userPanningEnabled: true,
  boxSelectionEnabled: true,
  selectionType: 'multiple',
  touchTapThreshold: 8,
  desktopTapThreshold: 4,
  autolock: false,
  autoungrabify: false,
  autounselectify: false,

  // rendering options:
  headless: false,
  styleEnabled: true,
  hideEdgesOnViewport: false,
  hideLabelsOnViewport: false,
  textureOnViewport: false,
  motionBlur: false,
  motionBlurOpacity: 0.2,
  wheelSensitivity: 0.6,
  pixelRatio: 'auto'

});


cy2.on('tap', 'node', function(evt){
  var node = evt.target;
  
  if(cy2.$(node).data('name') =='' ){
    cy2.$(node).data('name', cy2.$(node).data('id'));
  }
  else{
    cy2.$(node).data('name', '');
  }

});

}

/*

function ic4r_link(gene){
  modal.style.display = "block";
  
  if1=document.getElementById('iframe1');
  if1.src = "http://homolog.ic4r.org/genes/"+gene+"/tree_iframe";

  if1=document.getElementById('iframe2');
  if1.src = "http://expression.ic4r.org/expression-api?term="+gene;

  var gene_background = <?php echo $gene_background; ?>;
  var gene_id=gene_background[node.id()]['os_id'];
  var chromosome_no=gene_background[node.id()]['chromosome_no'];
  var strand=gene_background[node.id()]['strand'];
  var start_position=gene_background[node.id()]['start_position'];
  var end_position=gene_background[node.id()]['end_position'];
  gene_content=document.getElementById('gene_content');
  gene_content.innerHTML=
  '<table><thead><tr><td>Gene Id</td><td>Chromosome No.</td><td>Strand</td><td>Start Position</td><td>End Position</td></tr></thead><tbody><tr><td>'+gene_id+'</td><td>'+chromosome_no+'</td><td>'+strand+'</td><td>'+start_position+'</td><td>'+end_position+'</td></tr></tbody></table>';
}*/






function prepHref_cy2(linkElement, img_id) {
  var png64 = cy2.png();
    linkElement.href = png64;
}

function json_cy2(linkElement, img_id) {
  var png64 = cy2.json();
  var new_json = JSON.stringify(png64);
  
  fs.writeText("./sample.txt", new_json, (err) => {
    if (err) {
        console.error(err);
        return;
    };
});
    linkElement.href = "./sample.txt";
}




var fs = {
    read: (filename, cb, err) => {
      navigator.webkitPersistentStorage.requestQuota(0, (bytes) => {
        window.webkitRequestFileSystem(PERSISTENT, bytes, (fs) => {
          fs.root.getFile(filename, {},
            (entry) => {
              entry.file((file) => {
                var reader = new FileReader();
                if(err)
                  reader.onerror = err;
                if(cb) 
                  reader.onloadend = (e) => {
                   cb(e.target.result);
                 }
                 reader.readAsText(file);
               });
            });
        });
      });
    },
    
    write: (filename, blob, cb, err) => {
      navigator.webkitPersistentStorage.requestQuota(blob.size, (bytes) => {
        window.webkitRequestFileSystem(PERSISTENT, bytes, (fs) => {
          fs.root.getFile(filename, {create:true, exclusive:false},
            (entry) => {
              entry.file((file) => {
                if(blob.size < file.size) {
                  entry.createWriter((writer) => {
                    writer.onwriteend = (e) => {
                      writer.onwriteend = null;
                      if(cb) writer.onwriteend = cb;
                      if(err) writer.onerror = err;
                      writer.write(blob);
                    }
                    
                    writer.truncate(blob.size);
                  });
                  
                } else {
                  entry.createWriter((writer) => {
                    if(cb) writer.onwriteend = cb;
                    if(err) writer.onerror = err;
                    writer.write(blob);
                  });
                }
              });
            });
        });
      })
    },

    writeContent: (filename, content, type, cb, err) => {
      var blob = new Blob([content], {type: type});
      fs.write(filename, blob, cb, err);
    },

    writeText: (filename, text, cb, err) => {
      fs.writeContent(filename, text, "text/plain", cb, err);
    }
  }

window.onbeforeunload = function() { return "Your work will be lost."; };

/*var genes = <?php echo json_encode($genes);?>
console.log(genes);*/
var final_fc=[];

<?php
$fc = array();
$main_fc=array();
$cnt=0;
$cnt2=0;
$main_cnt=0;
foreach($genes as $gene){
  $fc = array();

    $cnt=$main_cnt;  
    $cnt2=0;
    array_push($fc,$cnt); 
    array_push($fc,$cnt2); 
    array_push($fc,$gene_info[$gene]->one_fc);
    $cnt2=$cnt2+1;
    array_push($fc,$cnt); 
    array_push($fc,$cnt2); 
    array_push($fc,$gene_info[$gene]->three_fc);
    $cnt2=$cnt2+1; 
    array_push($fc,$cnt); 
    array_push($fc,$cnt2); 
    array_push($fc,$gene_info[$gene]->six_fc);
    $cnt2=$cnt2+1;
    array_push($fc,$cnt); 
    array_push($fc,$cnt2); 
    array_push($fc,$gene_info[$gene]->twelve_fc);
    $cnt2=$cnt2+1;
    array_push($fc,$cnt); 
    array_push($fc,$cnt2); 
    array_push($fc,$gene_info[$gene]->twentyfour_fc);
    $cnt2=$cnt2+1;
      
    $main_cnt=$main_cnt+1;
    array_push($main_fc,$fc);
   /* echo 
    "<script type=\"text/javascript\">
    final_fc.push(json_enncode($fc));
    console.log(final_fc);
    </script>";*/
}

?>


final_fc = <?php echo json_encode($main_fc);?>

one=[];
two=[];
for(var i = 0; i<final_fc.length;i++){
  for(var j=0;j<final_fc[i].length;j++){
    if( (j+1)%3==0 ){
      one.push(final_fc[i][j]);
      two.push(one);
      one=[];
    }
    else{
      one.push(final_fc[i][j]);
    }
  }
}



Highcharts.chart('container', {

    chart: {
        type: 'heatmap',
        marginTop: 40,
        marginBottom: 80,
        plotBorderWidth: 1
    },


    title: {
        text: 'Heat map Fold Change Values'
    },

    xAxis: {
        categories:  <?php echo json_encode($genes);?>
    },

    yAxis: {
        categories:['1 hr','3 hrs','6 hrs', '12 hrs', '24 hrs'],
        title: null
    },

    colorAxis: {
        min: 0,
        minColor: '#FFFFFF',
        maxColor: Highcharts.getOptions().ind1[0]
    },

    legend: {
        align: 'right',
        layout: 'vertical',
        margin: 0,
        verticalAlign: 'top',
        y: 25000,
        symbolHeight: 100000
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> sold <br><b>' +
                this.point.value + '</b> items on <br><b>' + this.series.yAxis.categories[this.point.y] + '</b>';
        }
    },

    series: [{
        name: 'Sales per employee',
        borderWidth: 1,
        data:final_fc,
        dataLabels: {
            enabled: true,
            color: '#000000'
        }
    }]

});




</script>
