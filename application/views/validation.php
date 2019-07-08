<script src="https://d3js.org/d3.v4.min.js"></script>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/plotlyjs-bundle.js';?>"></script>

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
* {
    box-sizing: border-box;
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
  border: 1px solid #ccc;
  border-top: none;
}



/* Create two equal columns that floats next to each other */
.column {
float: left;
width: 50%;
padding: 10px;
height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}
</style>



<div class="container">
    <nav>
        <hr/>
        <ul>
            <a href="#"><li class="menu-button selected">Gene Expression Viewer</li></a>
            
        </ul>
        <hr/>
    </nav>
</div>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->



<div class="container">
    <div class="row">
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'London')">Heat Maps</button>
          <button class="tablinks" onclick="openCity(event, 'Paris')">Fold-Change Values</button>
          <button class="tablinks" onclick="openCity(event, 'tutorial')">Tutorial</button>
        </div>

    <div id="London" class="tabcontent">
      <div class="twelve columns" style="text-align:justify; text-indent:1rem;">
                <div class="column" id="myDiv" style="height:<?php echo 50.46*sizeof($genes); ?>px;width:400px;padding-left:100px;font-size:20px;">Fold-change (FC) across five time-points</div>
                <div class="column" id="myDiv2" style="height:<?php echo 50.46*sizeof($genes); ?>px;width:400px;padding-left:100px;font-size:20px;"><i>p</i>-values across six time-points
</div>
            </div>
    </div>

    <div id="Paris" class="tabcontent">
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
          
          echo '</tr>';
      }
      ?>
      <button type="submit" value="Proceed to Network Viewer">Click to go to Network Viewer</button>

      </tbody>
      </form>
      </table>
</div>

<div id="tutorial" class="tabcontent">
      <div class="twelve columns" style="text-align:justify; text-indent:1rem;">
                <iframe src="files/tutorial.pdf" style="width: 100%;height: 800px;border: none;"></iframe>
        </div>
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


var data = [
{
    //z: [[1, 20, 30, 50, 1], [20, 1, 60, 80, 30], [30, 60, 1, -10, 20],[30, 60, 1, -10, 20],[30, 60, 1, -10, 20]],
z: <?php echo json_encode($fc);?>,
       x: ['1Hour', '3Hours', '6Hours', '12Hours', '24Hours'],

       //y: ['Morning', 'Afternoon', 'Evening','Afternoon1','Afternoon2','Afternoon3'],
       y: <?php echo json_encode($genes);?>,
       type: 'heatmap'
}
];
var data2 = [
{
    //z: [[1, 20, 30, 50, 1], [20, 1, 60, 80, 30], [30, 60, 1, -10, 20],[30, 60, 1, -10, 20],[30, 60, 1, -10, 20]],
z: <?php echo json_encode($pv);?>,
       x: ['1Hour', '3Hours', '6Hours', '12Hours', '24Hours'],

       //y: ['Morning', 'Afternoon', 'Evening','Afternoon1','Afternoon2','Afternoon3'],
       y: <?php echo json_encode($genes);?>,
       type: 'heatmap'
}
];

Plotly.plot('myDiv', data );
Plotly.plot('myDiv2', data2 );

</script>
    <script type="text/javascript">
            function Export() {
                        $("#tblCustomers").table2excel({
                                        filename: "Table.xls"
                                            });
                        }
    </script>
    
<script type="text/javascript" src="<?php echo base_url().'assets/table2excel.js';?>"></script>

<section id="content">

<div class="content-wrap">

<div class="container clearfix">

<!-- Post Content
============================================= -->
<div class=" nobottommargin clearfix">


<div class="line"></div>



</div><!-- .postcontent end -->



</div>

</div>

</section><!-- #content end -->

