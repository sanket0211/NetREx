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

/* The container */
.container1 {
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








#cy1 {
  height: 500px;
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

table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}


</style>

<script type="text/javascript" src="<?php echo base_url().'assets/cyto/cytoscape.min.js';?>"></script>
 <div class="container">
    <nav>
        <hr/>
        <ul>
            <a href="#"><li class="menu-button selected">Gene Network Viewer</li></a>
        </ul>
        <hr/>
    </nav>
</div>
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>

        <div id="gene_content"></div>

        <iframe id="iframe1" src="http://homolog.ic4r.org/genes/Os04g0671100/tree_iframe" width='100%' height='600px' style='oveflow:hidden;border:none' /></iframe>
        <iframe id="iframe2" src="http://expression.ic4r.org/expression-api?term=Os04g0671100" width='100%' height='600px' style='oveflow:hidden;border:none' /></iframe>

      </div>

    </div>


<div class="container">
    <div class="row">
    <form>
    <table>
    <tr>
    <td>
    <label class="container1">
      Colour Nodes By: 
    </label>
    </td>
    <td>
    <label class="container1">No Color
      <input onchange="no_color()" type="radio" checked="checked" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">Fold-Change (1Hr)
      <input onchange="fc_1hr()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">Fold-Change (3Hrs)
      <input onchange="fc_3hr()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">Fold-Change (6Hrs)
      <input onchange="fc_6hr()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">Fold-Change (12Hrs)
      <input onchange="fc_12hr()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">Fold-Change (24Hrs)
      <input onchange="fc_24hr()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">Modules
      <input onchange="modules_wise()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    </tr>
    </table>
    </form>
    <form>
    <table>
    <tr>
    <td>
    <label class="container1">
      Edge Weights by:
    </label>
    </td>
    <td>
    <label class="container1">Global PCC
      <input onchange="global_pcc()" type="radio" checked="checked" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">PCC (Drought)
      <input onchange="pcc_drought()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">PCC (Cold)
      <input onchange="pcc_cold()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    <td>
    <label class="container1">HRR
      <input onchange="hrr()" type="radio" name="radio">
      <span class="checkmark"></span>
    </label>
    </td>
    </tr>
    </table>
    </form>


    <div class="container1">
    <div id="module" >
    <a href="#" onclick="prepHref_cy1(this,'cy1png')" download>Click here to download image</a>
        <div id="cy1"></div>
          
    </div>
    </div>


          <input type="button" id="btnExport" value="Export fold-change values" onclick="Export()" />
              <table class="table" id="tblCustomers">
              <thead>
              <tr>
              <th>check</th>
              <th onclick="sortTable(1)">Gene Ids</th>
              <th onclick="sortTable(2)">1Hr</th>
              <th onclick="sortTable(3)">1Hr-Pval</th>
              <th onclick="sortTable(4)">3Hrs</th>
              <th onclick="sortTable(5)">3Hrs-Pval</th>
              <th onclick="sortTable(6)">6Hrs</th>
              <th onclick="sortTable(7)">6Hrs-Pval</th>
              <th onclick="sortTable(8)">12Hrs</th>
              <th onclick="sortTable(9)">12Hrs-Pval</th>
              <th onclick="sortTable(10)">24Hrs</th>
              <th onclick="sortTable(11)">24Hrs-Pval</th>
              <th onclick="sortTable(12)">Module</th>
              </tr>
              </thead>
              <form action="<?php echo site_url('home/search_results');?>" method="post">
              <input type="text" hidden name="tissue" value=<?php echo $tissue;?> >
              <input type="text" hidden name="stress" value=<?php echo $stress;?> >

              <?php
              echo '<tbody>';

      foreach($genes as $gene){
          echo '<tr>';
          echo '<td><input type="checkbox" checked name="genes[]" value="'.$gene.'"></td>';
          echo '<td>'.$gene.'</td>';
          foreach($one as $o){
              $o->fold_change=number_format((float)$o->fold_change, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->fold_change.'</td>';

                  break;
              }
          }
          foreach($one as $o){
              $o->p_value=number_format((float)$o->p_value, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->p_value.'</td>';

                  break;
              }
          }
          foreach($three as $o){
              $o->fold_change=number_format((float)$o->fold_change, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->fold_change.'</td>';
                  break;
              }
          }
          foreach($three as $o){
              $o->p_value=number_format((float)$o->p_value, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->p_value.'</td>';

                  break;
              }
          }
          foreach($six as $o){
              $o->fold_change=number_format((float)$o->fold_change, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->fold_change.'</td>';
                  break;
              }
          }
          foreach($six as $o){
              $o->p_value=number_format((float)$o->p_value, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->p_value.'</td>';

                  break;
              }
          }
          foreach($twelve as $o){
              $o->fold_change=number_format((float)$o->fold_change, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->fold_change.'</td>';
                  break;
              }
          }
          foreach($twelve as $o){
              $o->p_value=number_format((float)$o->p_value, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->p_value.'</td>';

                  break;
              }
          }
          foreach($twentyfour as $o){
              $o->fold_change=number_format((float)$o->fold_change, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->fold_change.'</td>';
                  break;
              }
          }
          foreach($twentyfour as $o){
              $o->p_value=number_format((float)$o->p_value, 2, '.', '');
              if($o->os_id==$gene){
                  echo '<td>'.$o->p_value.'</td>';

                  break;
              }
          }
          echo '<td><a href="' . site_url('home/module/' . $gene_info[$gene]->module_id) . '">'.$gene_info[$gene]->module_name.'</a></td>';
          echo '</tr>';
      }
      ?>
      <button type="submit" value="Proceed to Network Viewer">Submit</button>

      </tbody>
      </form>
      </table>
    </div>

    

   

    </div>
    
</div>


<script>


function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tblCustomers");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}



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
var general = <?php echo $general;?>;
var modules = <?php echo $modules;?>;

var hrr_network = <?php echo $hrr_network;?>;
var temp_modules = <?php echo $modules;?>;
modules['edges']=hrr_network['edges'];

var cy1 = cytoscape({
  container: document.getElementById('cy1'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 5,
        'text-outline-color': '#888',
        'width': 80,
        'height': 80
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 8,
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
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Majenta, .Majenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 5,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      
    .selector('#cy')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 50,
        'padding-top': 40,
        'padding-left': 40,
        'padding-bottom': 40,
        'padding-right': 40
      }),

  elements: modules,

  layout: {
    name: 'random'
  }
});



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
    modules['edges']=no_color['edges'];
    rerun_graph(modules);
}
function hrr(){
    modules['edges']=hrr_network['edges'];
    rerun_graph(modules);
}

function rerun_graph(data){
cy1 = cytoscape({
  container: document.getElementById('cy1'),
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 5,
        'text-outline-color': '#888',
        'width': 80,
        'height': 80
      })
    .selector('edge')
      .css({
        'content': 'data(name)',
        'width': 8,
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
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#brown, .brown')
      .css({
        'background-color': '#A52A2A',
        'text-outline-color': '#A52A2A',
        'line-color': '#A52A2A',
        'target-arrow-color': '#A52A2A',
        'text-outline-color': '#A52A2A  ',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#green, .green')
      .css({
        'background-color': '#008000',
        'text-outline-color': '#008000',
        'line-color': '#008000',
        'target-arrow-color': '#008000',
        'text-outline-color': '#008000',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#yellow, .yellow')
      .css({
        'background-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'line-color': '#FFFF00',
        'target-arrow-color': '#FFFF00',
        'text-outline-color': '#FFFF00',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#blue, .blue')
      .css({
        'background-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'line-color': '#0000ff',
        'target-arrow-color': '#0000ff',
        'text-outline-color': '#0000ff',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Salmon, .Salmon')
      .css({
        'background-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'line-color': '#FA8072',
        'target-arrow-color': '#FA8072',
        'text-outline-color': '#FA8072',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Turquoise, .Turquoise')
      .css({
        'background-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'line-color': '#40E0D0',
        'target-arrow-color': '#40E0D0',
        'text-outline-color': '#40E0D0',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#grey, .grey')
      .css({
        'background-color': '#778899',
        'text-outline-color': '#778899',
        'line-color': '#778899',
        'target-arrow-color': '#778899',
        'text-outline-color': '#778899',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#black, .black')
      .css({
        'background-color': '#000000',
        'text-outline-color': '#000000',
        'line-color': '#000000',
        'target-arrow-color': '#000000',
        'text-outline-color': '#000000',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#MNB, .MNB')
      .css({
        'background-color': '#F79646',
        'text-outline-color': '#F79646',
        'line-color': '#F79646',
        'target-arrow-color': '#F79646',
        'text-outline-color': '#F79646',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Tan, .Tan')
      .css({
        'background-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'line-color': '#D2B48C',
        'target-arrow-color': '#D2B48C',
        'text-outline-color': '#D2B48C',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#pink, .pink')
      .css({
        'background-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'line-color': '#FFC0CB',
        'target-arrow-color': '#FFC0CB',
        'text-outline-color': '#FFC0CB',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#purple, .purple')
      .css({
        'background-color': '#800080',
        'text-outline-color': '#800080',
        'line-color': '#800080',
        'target-arrow-color': '#800080',
        'text-outline-color': '#800080',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#greenyellow, .greenyellow')
      .css({
        'background-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'line-color': '#ADFF2F',
        'target-arrow-color': '#ADFF2F',
        'text-outline-color': '#ADFF2F',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#red, .red')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#lightcyan, .lightcyan')
      .css({
        'background-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'line-color': '#E0FFFF',
        'target-arrow-color': '#E0FFFF',
        'text-outline-color': '#E0FFFF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#lightyellow, .lightyellow')
      .css({
        'background-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'line-color': '#FFFFE0',
        'target-arrow-color': '#FFFFE0',
        'text-outline-color': '#FFFFE0',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#royalblue, .royalblue')
      .css({
        'background-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'line-color': '#4169E1',
        'target-arrow-color': '#4169E1',
        'text-outline-color': '#4169E1',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#cyan, .cyan')
      .css({
        'background-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'line-color': '#00FFFF',
        'target-arrow-color': '#00FFFF',
        'text-outline-color': '#00FFFF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#grey60, .grey60')
      .css({
        'background-color': '#969696',
        'text-outline-color': '#969696',
        'line-color': '#969696',
        'target-arrow-color': '#969696',
        'text-outline-color': '#969696',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#Majenta, .Majenta')
      .css({
        'background-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'line-color': '#FF00FF',
        'target-arrow-color': '#FF00FF',
        'text-outline-color': '#FF00FF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      .selector('#upregulated, .upregulated')
      .css({
        'background-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'line-color': '#FF0000',
        'target-arrow-color': '#FF0000',
        'text-outline-color': '#FF0000',
        'text-outline-width': 5,
        'color': '#fff'
      }) 
      .selector('#downregulated, .downregulated')
      .css({
        'background-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'line-color': '#0000FF',
        'target-arrow-color': '#0000FF',
        'text-outline-color': '#0000FF',
        'text-outline-width': 5,
        'color': '#fff'
      })
      
    .selector('#cy')
      .css({
        'background-opacity': 0,
        'border-width': 1,
        'border-color': '#aaa',
        'border-opacity': 0.5,
        'font-size': 50,
        'padding-top': 40,
        'padding-left': 40,
        'padding-bottom': 40,
        'padding-right': 40
      }),

  elements: data,

  layout: {
    name: 'random'
  }
});


cy1.on('tap', 'node', function(evt){
  var node = evt.target;
  console.log( 'tapped ' + node.id() );
  modal.style.display = "block";
  node.connectedEdges().animate({
    style: {lineColor: "green"}
  })
  
  if1=document.getElementById('iframe1');
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
  '<table><thead><tr><td>Gene Id</td><td>Chromosome No.</td><td>Strand</td><td>Start Position</td><td>End Position</td></tr></thead><tbody><tr><td>'+gene_id+'</td><td>'+chromosome_no+'</td><td>'+strand+'</td><td>'+start_position+'</td><td>'+end_position+'</td></tr></tbody></table>';

});





}



cy1.on('tap', 'node', function(evt){
  var node = evt.target;
  console.log( 'tapped ' + node.id() );
  modal.style.display = "block";
  
  if1=document.getElementById('iframe1');
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
  '<table><thead><tr><td>Gene Id</td><td>Chromosome No.</td><td>Strand</td><td>Start Position</td><td>End Position</td></tr></thead><tbody><tr><td>'+gene_id+'</td><td>'+chromosome_no+'</td><td>'+strand+'</td><td>'+start_position+'</td><td>'+end_position+'</td></tr></tbody></table>';

});




function prepHref_cy1(linkElement, img_id) {
  var png64 = cy1.png();
    linkElement.href = png64;
}
/*function prepHref_cy2(linkElement, img_id) {
  var png64 = cy2.png();
    linkElement.href = png64;
}
function prepHref_cy3(linkElement, img_id) {
  var png64 = cy3.png();
    linkElement.href = png64;
}
function prepHref_cy4(linkElement, img_id) {
  var png64 = cy4.png();
    linkElement.href = png64;
}
function prepHref_cy5(linkElement, img_id) {
  var png64 = cy5.png();
    linkElement.href = png64;
}
function prepHref_cy6(linkElement, img_id) {
  var png64 = cy6.png();
    linkElement.href = png64;
}
function prepHref_cy7(linkElement, img_id) {
  var png64 = cy7.png();
    linkElement.href = png64;
}

*/

</script>


