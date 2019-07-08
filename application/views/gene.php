

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







<script type="text/javascript" src="<?php echo base_url().'assets/js/plotlyjs-bundle.js';?>"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/cyto/cytoscape.min.js';?>"></script>
<style>
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

</style>

<script type="text/javascript">

$(document).ready(function() {
    $('#table1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

$(document).ready(function() {
    $('#table2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
$(document).ready(function() {
    $('#table3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
$(document).ready(function() {
    $('#table4').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
$(document).ready(function() {
    $('#table5').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
$(document).ready(function() {
    $('#table6').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

$(document).ready(function() {
    $('#table7').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );


</script>

 <!-- <div class="container">
    <nav>
        <ul>
            
            <li class="menu-button selected">Root</li>
            <li class="menu-button">Shoot</li>
            
        </ul>
    </nav>
</div>
 -->
 <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 0%">
        <h4><?php echo $gene_id; ?></h4>
      </div>
    </div>
  </div>
	<div class="container">
		<div class="row">

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



			<table class="table" id="table7">
              <caption>top 100 Neighbours of XXXX for Drought Stress Condition in Root Tissue</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Description</th>
              <th>Kegg Pathway</th>
              <th>GO</th>
              <th>IC4R</th>
              <th>RGAP</th>
              
              
              </tr>
              </thead>
              
              <?php
              echo '<tbody>';
              $cnt=0;

      
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td><strong>Root</strong>: '.$rdescription.'<br><strong>Shoot</strong>: '.$sdescription.'</td>';
          echo '<td>'.$kegg.'</td>';
          echo '<td><strong>Root</strong>: '.$rgo.'<br><strong>Shoot</strong>: '.$sgo.'</td>';
          echo '<td><a onclick="ic4r_link(\''.$gene_id.'\')" href"">IC4R Link</a></td>';
          echo '<td><a href="https://rapdb.dna.affrc.go.jp/viewer/gbrowse_details/irgsp1?name='.$gene_id.'" target="_blank">rgap_link</td>'; 
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          
          
          echo '</tr>';
      
      ?>

      </tbody>
      </form>
      </table>


			<table class="table" id="table1">
              <caption>top 100 Neighbours of XXXX for Drought Stress Condition in Root Tissue</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              
              
              </tr>
              </thead>
              
              <?php
              echo '<tbody>';
              $cnt=0;

      foreach($drought_root_neighbours as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->destination.'</td>';
          echo '<td>'.$link->PCC.'</td>';
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          
          
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>

      <table class="table" id="table2">
              <caption>top 100 Neighbours of XXXX for Drought Stress Condition in Root Tissue</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              
              
              </tr>
              </thead>
              
              <?php
              echo '<tbody>';
              $cnt=0;

      foreach($cold_root_neighbours as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->destination.'</td>';
          echo '<td>'.$link->PCC.'</td>';
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          
          
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>

      <table class="table" id="table3">
              <caption>top 100 Neighbours of XXXX for Drought Stress Condition in Root Tissue</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              
              
              </tr>
              </thead>
              
              <?php
              echo '<tbody>';
              $cnt=0;

      foreach($aba_root_neighbours as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->destination.'</td>';
          echo '<td>'.$link->PCC.'</td>';
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          
          
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>

      <table class="table" id="table4">
              <caption>top 100 Neighbours of XXXX for Drought Stress Condition in Root Tissue</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              
              
              </tr>
              </thead>
              
              <?php
              echo '<tbody>';
              $cnt=0;

      foreach($ja_root_neighbours as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->destination.'</td>';
          echo '<td>'.$link->PCC.'</td>';
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          
          
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>

      <table class="table" id="table5">
              <caption>top 100 Neighbours of XXXX for Drought Stress Condition in Root Tissue</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              
              
              </tr>
              </thead>
              
              <?php
              echo '<tbody>';
              $cnt=0;

      foreach($osmotic_root_neighbours as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->destination.'</td>';
          echo '<td>'.$link->PCC.'</td>';
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          
          
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>

      <table class="table" id="table6">
              <caption>top 100 Neighbours of XXXX for Drought Stress Condition in Root Tissue</caption>
              <thead>
              <tr>
              <th>Sr. No.</th>
              <th>Link</th>
              <th>Global PCC</th>
              
              
              </tr>
              </thead>
              
              <?php
              echo '<tbody>';
              $cnt=0;

      foreach($flood_root_neighbours as $link){
        $cnt=$cnt+1;
          echo '<tr>';
          echo '<td>'.$cnt.'</td>';
          echo '<td>'.$link->source.'-'.$link->destination.'</td>';
          echo '<td>'.$link->PCC.'</td>';
          /*echo '<td>'.$link->Dpcc.'</td>';
          echo '<td>'.$link->Cpcc.'</td>';
          echo '<td>'.$link->Opcc.'</td>';
          echo '<td>'.$link->Apcc.'</td>';
          echo '<td>'.$link->Jpcc.'</td>';
          echo '<td>'.$link->Fpcc.'</td>';*/
          
          
          echo '</tr>';
      }
      ?>

      </tbody>
      </form>
      </table>
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
site.innerHTML='<a href="<?php echo site_url('');?>">home</a>'


var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

  }
}
span.onclick = function() {
  modal.style.display = "none";
  
}

function ic4r_link(gene){
  console.log( 'tapped ' + gene );
  modal.style.display = "block";
  
  if1=document.getElementById('iframe1');
  if1.src = "http://homolog.ic4r.org/genes/"+gene+"/tree_iframe";

  if1=document.getElementById('iframe2');
  if1.src = "http://expression.ic4r.org/expression-api?term="+gene;

  
  
}


</script> 













