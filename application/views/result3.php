
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>Save</title>
    <link rel="stylesheet" href="https://unpkg.com/popoto/dist/popoto.min.css">
    <style>
        #popoto-graph:fullscreen {
            width: 100%;
            height: 100%;
        }

        #popoto-graph:-webkit-full-screen {
            width: 100%;
            height: 100%;
        }

        #popoto-graph:-moz-full-screen {
            width: 100%;
            height: 100%;
        }

        #popoto-graph:-ms-fullscreen {
            width: 100%;
            height: 100%;
        }

        .ppt-save-tag:before {
            content: "\f093";
            color: #8bb71a;
        }

        .ppt-container-graph {
            background-color: #22252a;
            height: 600px;
            padding: 0 0 0;
            border-bottom-right-radius: 5px 5px;
            border-bottom-left-radius: 5px 5px;
            overflow: hidden;
        }
    </style>
</head>
<body class="ppt-body">

<section class="ppt-section-main">
    <div class="ppt-section-header">
        <span class="ppt-header-span">Graph</span> search "<span id="save-header" class="ppt-header-span"
                                                                 style="color: #f0b017;">The Matrix Actors</span>"
    </div>

    <div class="ppt-container-graph">
        <nav class="ppt-taxo-nav">
            <div id="saves">
                <span class="ppt-header-span">Saved graphs:</span><br><br>
                <ul class="ppt-taxo-ul">
                    <li id="save_1" value="Gene"><span class="ppt-icon ppt-save-tag">&nbsp;</span><span
                            class="ppt-label" title="Load Graph">Subgraph</span></li>
                    <li id="save-2" value="Person"><span class="ppt-icon ppt-save-tag">&nbsp;</span><span
                            class="ppt-label" title="Load Graph">Module 1</span></li>
                    <li id="save-3" value="Person"><span class="ppt-icon ppt-save-tag">&nbsp;</span><span
                            class="ppt-label" title="Load Graph">Module 2</span></li>
                    <li id="save-4" value="Movie"><span class="ppt-icon ppt-save-tag">&nbsp;</span><span
                            class="ppt-label" title="Load Graph">Module 3</span></li>
                    <li id="save-5" value="Movie"><span class="ppt-icon ppt-save-tag">&nbsp;</span><span
                            class="ppt-label" title="Load Graph">Module 4</span></li>
                </ul>
                <hr>
                <br>
            </div>
            <div id="popoto-taxonomy">
                <span class="ppt-header-span">Taxonomies:</span><br><br>
            </div>
        </nav>
        <div id="popoto-graph" class="ppt-div-graph">
            <!-- Graph will be generated here-->
        </div>
    </div>

    <!--<div id="popoto-query" class="ppt-container-query">-->
    <!--&lt;!&ndash; Query viewer will be generated here &ndash;&gt;-->
    <!--</div>-->

    <div id="popoto-cypher" class="ppt-container-cypher">
        <!-- Cypher query viewer will be generated here -->
    </div>

    <div class="ppt-section-header">
        <!-- The total results count is updated with a listener defined below -->
        RESULTS <span id="result-total-count" class="ppt-count"></span>
    </div>

    <div id="popoto-results" class="ppt-container-results">
        <!-- Results will be generated here -->
    </div>

</section>

<script src="https://unpkg.com/jquery" charset="utf-8"></script>
<script src="https://unpkg.com/d3" charset="utf-8"></script>
<script src="https://unpkg.com/popoto" charset="utf-8"></script>

<script>

    // Demo Neo4j database settings hosted on GrapheneDb
    //popoto.rest.CYPHER_URL = "https://db-kh9ct9ai1mqn6hz2itry.graphenedb.com:24780/db/data/transaction/commit";
    //popoto.rest.AUTHORIZATION = "Basic cG9wb3RvOmIuVlJZQVF2blZjV2tyLlRaYnpmTks5aHp6SHlTdXk=";

    popoto.provider.node.Provider = {
        "Person": {
            "returnAttributes": ["name", "born"],
            "constraintAttribute": "name"
        },
        "Movie": {
            "returnAttributes": ["title", "released", "tagline"],
            "constraintAttribute": "title"
        }
    };

    /**
     * Add save tool in graph, by default this parameter is set to false and the save tool icon is hidden.
     */
    popoto.tools.SAVE_GRAPH = true;
    // disable toggle taxonomy tool
    popoto.tools.TOGGLE_TAXONOMY = false;

    /**
     * Here a listener is used to retrieve the total results count and update the page accordingly.
     * This listener will be called on every graph modification.
     */
    popoto.result.onTotalResultCount(function (count) {
        document.getElementById("result-total-count").innerHTML = "(" + count + ")";
    });


    // Sample save simulation application simulation:

    // count used to generate save name and Ids (starts at 4 because of the hardcoded 3 saves in this example)
    var count = 4;

    /**
     * Listener to used to get current graph context on save icon click.
     *
     * This simple example just illustrate how to access data and redraw graph with data, the graph is not really saved
     * but just added temporarily on the page. On page reload the saved graph will be lost.
     *
     * "graph" parameter contains the current graph that can be saved in your application and restored when needed.
     */
    popoto.graph.onSave(function (graph) {
        // generate a unique id
        var id = "save-" + count++;
        // save it in JavaScript "saves" var
        saves[id] = graph;

        // Update page with the new saved graph item in list with a on click event to illustrate how it can be used.
        var li = d3.select("#saves")
            .selectAll("ul")
            .append("li")
            .attr("id", id)
            .on("click", onClickSavedGraph);

        li.append("span")
            .attr("class", "ppt-icon ppt-save-tag")
            .html('&nbsp;');

        li.append("span")
            .attr("class", "ppt-label")
            .attr("title", "Load Graph")
            .text(id);
    });

    /**
     * Var that contains hardcoded save examples.
     * It contains 3 graph examples
     *
     * New saves will simply be added in this var.
     */
     /**
     * Var that contains hardcoded save examples.
     * It contains 3 graph examples
     *
     * New saves will simply be added in this var.
     */
     var saves = <?php echo $graph_json;?>;
     //var saves = JSON.parse(saves);

     console.log(saves);
    var saves2 = {
        "save-1": {
            label: "Person",
            value: {
                name: "Paul Blythe"
            },
            rel: [
                {
                    label: "FOLLOWS",
                    target: {
                        label: "Person",
                        value: {
                            name: "Angela Scope"
                        },
                        rel: [
                            {
                                label: "REVIEWED",
                                target: {
                                    label: "Movie",
                                    value: {
                                        title: "The Replacements"
                                    }
                                }
                            },
                            {
                                label: "FOLLOWS",
                                target: {
                                    label: "Person",
                                    value: {
                                        name: "Jessica Thompson"
                                    },
                                    rel: [
                                        {
                                            label: "REVIEWED",
                                            target: {
                                                label: "Movie",
                                                value: {
                                                    title: "Cloud Atlas"
                                                }
                                            }
                                        }
                                    ]
                                }
                            }
                        ]
                    }
                }
            ]
        }
    };
    console.log(saves2)

    /**
     * Add on click event on saved graph li items to update graph accordingly.
     *
     */
    d3.select("#saves").selectAll("li").on("click", onClickSavedGraph);

    /**
     * Update popoto default graph
     */
    function onClickSavedGraph() {
        // Update Graph title:
        d3.select("#save-header").text(d3.select(this).select(".ppt-label").text());

        popoto.graph.mainLabel = saves[this.id];
        popoto.tools.reset();
    }

    /**
     * Start popoto.js generation on first saved graph.
     */
    popoto.start(saves["save_1"]);
    //popoto.start(saves2["save-1"]);

</script>
</body>
</html>
