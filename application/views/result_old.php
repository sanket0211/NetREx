<script src="http://d3js.org/d3.v2.min.js?2.9.3"></script>

<style>

.link {
  stroke: #aaa;
}

.node text {
stroke: #999;
cursos:pointer;
}

.node circle{
stroke: #fff;
stroke-width:3px;
fill:#555;
}

</style>
<script>
var width = 960,
    height = 500

var svg = d3.select("body").append("svg")
    .attr("width", width)
    .attr("height", height);



var force = d3.layout.force()
    .gravity(.05)
    .distance(100)
    .charge(-100)
    .size([width, height]);

d3.json("http://bioinf.iiit.ac.in/ricenet/graphFile.json", function(json) {
   //json = <?php echo $graph_json; ?>;
   //console.log(json.nodes);
   //console.log(json.links);
   json = <?php echo $graph_json;?>;

   console.log(json.nodes);
   console.log(json.links);
   //json=<?php echo $graph_json;?>;
   //console.log(json.nodes);
   force
      .nodes(json.nodes)
      .links(json.links)
      .start();
  var link = svg.selectAll(".link")
      .data(json.links)
    .enter().append("line")
      .attr("class", "link")
    .style("stroke-width", function(d) { return Math.sqrt(d.weight); });

  var node = svg.selectAll(".node")
      .data(json.nodes)
    .enter().append("g")
      .attr("class", "node")
      .call(force.drag);

  node.append("circle")
      .attr("r","5");

  node.append("text")
      .attr("dx", 12)
      .attr("dy", ".35em")
      .text(function(d) { return d.name });

  force.on("tick", function() {
    link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node.attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });
  });
});

function dragstarted(d) {
  if (!d3.event.active) simulation.alphaTarget(0.3).restart();
  d.fx = d.x;
  d.fy = d.y;
}

function dragged(d) {
  d.fx = d3.event.x;
  d.fy = d3.event.y;
}

function dragended(d) {
  if (!d3.event.active) simulation.alphaTarget(0);
  d.fx = null;
  d.fy = null;
}

</script>


<div id="layoutCenterBody">
    <div id="layoutNavigation">
      <div class="navTitle">
        <h3>Contents</h3>
      </div>
      <ul>
        <li><a href="<?php echo site_url('home');?>">Overview</a></li>
        <li><a href="<?php echo site_url('home/search');?>">Go to Rice Net</a></li>
        <li><a href="#">User Manual</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
</div>


	
<div id="layoutBodyContent">
		<form action="<?php echo site_url('home/search_results');?>" method="post">
		<select name="min_cor_cutoff">
		<?php 
		for($x=-1.0;$x<=1.0;$x+=0.1){
  			echo '<option value="'.$x.'">'.$x.'</option>';
		}
		?>
		</select>
		<select name="max_cor_cutoff">
		<?php 
		for($x=-1.0;$x<=1.0;$x+=0.1){
  			echo '<option value="'.$x.'">'.$x.'</option>';
		}
		?>
		</select>
		<table>
                  <thead>
                    <tr>
                      <th>check</th>
                      <th>Gene Ids</th>
                      <th>Common Name</th>
                      <th>GO term</th>
                      <th>Degree</th>
                      <th>Cluster No.</th>
                    </tr>
                  </thead>
		  <?php
                  echo '<tbody>';
                  
                  foreach($gene_info as $gene){
                    echo '<tr>';
                    echo '<td><input type="checkbox" checked name="genes[]" value="'.$gene->os_id.'"></td>';
                    echo '<td>'.$gene->os_id.'</td>';
                    echo '<td>dummy1</td>';
                    echo '<td>dummy2</td>';
                    echo '<td>dummy3</td>';
                    echo '<td>dummy4</td>';
                                         
                    

                  
                    echo '</tr>';
		  }
		    ?>

                  <button type="submit" value="submit">Submit</button>
               
                  </tbody>
                </table>
                  </form>  
	</div>
