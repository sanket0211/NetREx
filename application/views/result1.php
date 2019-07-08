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
<style>

.links line {
  stroke: #999;
  stroke-opacity: 1.6;
}

.nodes circle {
  stroke: #fff;
  stroke-width: 1.5px;
  stroke-height: 20px;
  stroke-size:  50px;
}

</style>
<svg width="880" height="600"></svg>
<script src="https://d3js.org/d3.v4.min.js"></script>
<form>
    <h3> Link threshold 0 <input type="range" id="thersholdSlider" name="points" value = 0 min="0" max="10" onchange="threshold(this.value)"> 10 </h3>
</form>
<script>

var svg = d3.select("svg"),
    width = +svg.attr("width"),
    height = +svg.attr("height");

var color = d3.scaleOrdinal(d3.schemeCategory20);

var simulation = d3.forceSimulation()
    .force("link", d3.forceLink().id(function(d) { return d.id; }))
    
    .force("center", d3.forceCenter(width / 2, height / 2));

d3.json("http://bioinf.iiit.ac.in/ricenet/graphFile.json", function(graph) {
  
  graph = <?php echo $graph_json;?>;
  graphRec=JSON.parse(JSON.stringify(graph)); //Add this line 

  var link = svg.append("g")
      .attr("class", "links")
    .selectAll("line")
    .data(graph.links)
    .enter().append("line")
      .attr("stroke-width", function(d) { return Math.sqrt(d.value); });

  var node = svg.append("g")
      .attr("class", "nodes")
    .selectAll("circle")
    .data(graph.nodes)
    .enter().append("circle")
      .attr("r", 7)
      .attr("fill", function(d) { return color(d.group); })
      .call(d3.drag()
          .on("start", dragstarted)
          .on("drag", dragged)
          .on("end", dragended));

  node.append("title")
      .text(function(d) { return d.id; });

  simulation
      .nodes(graph.nodes)
      .on("tick", ticked);

  simulation.force("link")
      .links(graph.links);

  function ticked() {
    link
        .attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node
        .attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; });
  }
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

//adjust threshold
function threshold(thresh) {
    graph.links.splice(0, graph.links.length);
    for (var i = 0; i < graphRec.links.length; i++) {
      if (graphRec.links[i].value > thresh) {graph.links.push(graphRec.links[i]);}
    }
    restart();
}
//Restart the visualisation after any node and link changes
function restart() {
  link = link.data(graph.links);
  link.exit().remove();
  link.enter().insert("line", ".node").attr("class", "link");
  node = node.data(graph.nodes);
  node.enter().insert("circle", ".cursor").attr("class", "node").attr("r", 5).call(force.drag);
  force.start();
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
