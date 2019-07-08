<script src="http://d3js.org/d3.v2.min.js?2.9.3"></script>
<style>

.link {
  stroke: #aaa;
}

.node text {
  font: 9px helvetica;
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
d3-tip {
    line-height: 1;
    color: black;
}
</style>
<svg width="880" height="500"></svg>
<script src="https://d3js.org/d3.v4.min.js"></script>

<script type='text/javascript' src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"> </script>

<script>



var svg = d3.select("svg"),
    width = +svg.attr("width"),
    height = +svg.attr("height");

var color = d3.scaleOrdinal(d3.schemeCategory20);

var simulation = d3.forceSimulation()
    .force("charge", d3.forceManyBody())
    .force("link", d3.forceLink().id(function(d) { return d.id; }))
    
    .force("center", d3.forceCenter(width / 2, height / 2));


  
graph = <?php echo $graph_json;?>;
graphRec=JSON.parse(JSON.stringify(graph)); //Add this line 
var tip = d3.tip()
    .attr('class', 'd3-tip')
    .offset([-10, 0])
    .html(function (d) {
    return  d.id + "";
})
svg.call(tip);
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
        .on("end", dragended))
    .on('mouseover', tip.show) //Added
 .on('mouseout', tip.hide) //Added 
    .on('dblclick', connectedNodes); //Added code 

node.append("text")
      .attr("dx", 10)
      .attr("dy", ".35em")
      .text(function(d) { return d.id })
      .style("stroke", "black");

node.append("circle")
    .attr("r", 8)
    .style("fill", function (d) {
    return color(d.group);
})

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

  d3.selectAll("circle").attr("cx", function (d) {
        return d.x;
    })
        .attr("cy", function (d) {
        return d.y;
    });
    d3.selectAll("text").attr("x", function (d) {
        return d.x;
    })
        .attr("y", function (d) {
        return d.y;
    });
}


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
  node.enter().insert("circle", ".cursor").attr("class", "node").attr("r", 5).call(d3.drag);
  force.start();
}

/*var optArray = [];
for (var i = 0; i < graph.nodes.length - 1; i++) {
    optArray.push(graph.nodes[i].name);
}
optArray = optArray.sort();
$(function () {
    $("#search").autocomplete({
        source: optArray
    });
});
function searchNode() {
    //find the node
    var selectedVal = document.getElementById('search').value;
    var node = svg.selectAll(".node");
    if (selectedVal == "none") {
        node.style("stroke", "white").style("stroke-width", "1");
    } else {
        var selected = node.filter(function (d, i) {
            return d.name != selectedVal;
        });
        selected.style("opacity", "0");
        var link = svg.selectAll(".link")
        link.style("opacity", "0");
        d3.selectAll(".node, .link").transition()
            .duration(5000)
            .style("opacity", 1);
    }
}*/

var toggle = 0;
//Create an array logging what is connected to what
var linkedByIndex = {};
for (i = 0; i < graph.nodes.length; i++) {
    linkedByIndex[i + "," + i] = 1;
};
graph.links.forEach(function (d) {
    linkedByIndex[d.source.index + "," + d.target.index] = 1;
});
//This function looks up whether a pair are neighbours
function neighboring(a, b) {
    return linkedByIndex[a.index + "," + b.index];
}
function connectedNodes() {
    if (toggle == 0) {
        //Reduce the opacity of all but the neighbouring nodes
        d = d3.select(this).node().__data__;
        node.style("opacity", function (o) {
            return neighboring(d, o) | neighboring(o, d) ? 1 : 0.1;
        });
        link.style("opacity", function (o) {
            return d.index==o.source.index | d.index==o.target.index ? 1 : 0.1;
        });
        //Reduce the op
        toggle = 1;
    } else {
        //Put them back to opacity=1
        node.style("opacity", 1);
        link.style("opacity", 1);
        toggle = 0;
    }
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
