


<script src="https://d3js.org/d3.v4.min.js"></script>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/plotlyjs-bundle.js';?>"></script>

<style>
* {
	box-sizing: border-box;
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





<div class="row">
<div class="column" id="myDiv" style="height:<?php echo 50.46*sizeof($genes); ?>px;width:600px;padding-left:100px;font-size:30px;">Fold-Change Heat Map</div>
<div class="column" id="myDiv2" style="height:<?php echo 50.46*sizeof($genes); ?>px;width:600px;padding-left:100px;font-size:30px;">P-value Heat Map</div>
</div>  
<script>


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
<input type="button" id="btnExport" value="Export fold-change values" onclick="Export()" />
<table class="table" id="tblCustomers">
<thead>
<tr>
<th>check</th>
<th>Gene Ids</th>
<th>1Hr</th>
<th>3Hrs</th>
<th>6Hrs</th>
<th>12Hrs</th>
<th>24Hrs</th>
</tr>
</thead>
<form action="<?php echo site_url('home/search_results');?>" method="post">
<?php
echo '<tbody>';

foreach($genes as $gene){
	echo '<tr>';
	echo '<td><input type="checkbox" checked name="genes[]" value="'.$gene.'"></td>';
	echo '<td>'.$gene.'</td>';
	foreach($one as $o){
		$o->fold_change=number_format((float)$o->fold_change, 5, '.', '');
		if($o->os_id==$gene){
			echo '<td>'.$o->fold_change.'</td>';

			break;
		}
	}
	foreach($three as $o){
		$o->fold_change=number_format((float)$o->fold_change, 5, '.', '');
		if($o->os_id==$gene){
			echo '<td>'.$o->fold_change.'</td>';
			break;
		}
	}
	foreach($six as $o){
		$o->fold_change=number_format((float)$o->fold_change, 5, '.', '');
		if($o->os_id==$gene){
			echo '<td>'.$o->fold_change.'</td>';
			break;
		}
	}
	foreach($twelve as $o){
		$o->fold_change=number_format((float)$o->fold_change, 5, '.', '');
		if($o->os_id==$gene){
			echo '<td>'.$o->fold_change.'</td>';
			break;
		}
	}
	foreach($twentyfour as $o){
		$o->fold_change=number_format((float)$o->fold_change, 5, '.', '');
		if($o->os_id==$gene){
			echo '<td>'.$o->fold_change.'</td>';
			break;
		}
	}

	echo '</tr>';
}
?>
<button type="submit" value="Proceed to Network Viewer">Submit</button>

</tbody>
</form>
</table>

<div class="line"></div>



</div><!-- .postcontent end -->



</div>

</div>

</section><!-- #content end -->



