<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>Popoto Search</title>
    <link rel="stylesheet" href="https://unpkg.com/popoto@2.0.13/dist/popoto.min.css">
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
    </style>
</head>
<body class="ppt-body">

<section class="ppt-section-main">
    <div class="ppt-section-header">
        <span class="ppt-header-span">Graph</span> search
    </div>

    <div class="ppt-container-graph">
        <nav id="popoto-taxonomy" class="ppt-taxo-nav">
            <!-- Label/taxonomy filter will be generated here -->
        </nav>
        <div id="popoto-graph" class="ppt-div-graph">
            <!-- Graph will be generated here-->
        </div>
    </div>

    <div id="popoto-query" class="ppt-container-query">
        <!-- Query viewer will be generated here -->
    </div>

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

<!---------------------->
<!-- Required scripts -->

<!-- Jquery is only used in popoto.js to send ajax POST request on Neo4j REST API -->
<!-- This dependency will definitely be removed in future releases -->
<script src="https://unpkg.com/jquery" charset="utf-8"></script>
<script src="https://unpkg.com/d3" charset="utf-8"></script>
<script src="https://unpkg.com/popoto@2.0.13/dist/popoto.min.js" charset="utf-8"></script>


<script>

/**
     * URL used to access Neo4j REST API to execute queries.
     * Update this parameter to your running server instance.
     *
     * For more information on Neo4J REST API the documentation is available
     * here: http://neo4j.com/docs/stable/rest-api-cypher.html
     */
    popoto.rest.CYPHER_URL = "http://localhost:7474/db/data/transaction/commit";

    /**
     * Add this authorization property if your Neo4j server uses basic HTTP authentication.
     * The value of this property must be "Basic <payload>", where "payload" is a base64
     * encoded string of "username:password".
     *
     * "btoa" is a JavaScript function that can be used to encode the user and password
     * value in base64 but it is recommended to directly use the Base64 value.
     *
     *  For example Base64 encoded value of "neo4j:password" is "bmVvNGo6cGFzc3dvcmQ="
     *
     ***********************************************************************************
     *  /!\ It is not a safe way to keep these credentials in the page as anyone can 
     * have access to this code in your web page.
     ***********************************************************************************
     */
     popoto.rest.AUTHORIZATION = "Basic " + btoa("neo4j:neo4j@0211");

     /**
     * Define the Label provider you need for your application.
     * This configuration is mandatory and should contain at least all the labels you could find in your graph model.
     *
     * In this version only nodes with a label are supported.
     *
     * By default If no attributes are specified Neo4j internal ID will be used.
     * These label provider configuration can be used to customize the node display in the graph.
     * See www.popotojs.com or example for more details on available configuration options.
     */
    popoto.provider.node.Provider = {
        "DROUGHTGene": {
            "returnAttributes": ["name"],
            //"constraintAttribute": "name",
            "autoExpandRelations": true // if set to true Person nodes will be automatically expanded in graph
        }
    };

    /**
     * Here a listener is used to retrieve the total results count and update the page accordingly.
     * This listener will be called on every graph modification.
     */
    popoto.result.onTotalResultCount(function (count) {
        document.getElementById("result-total-count").innerHTML = "(" + count + ")";
    });

    popoto.query.RESULTS_PAGE_SIZE = 100;

    popoto.logger.LEVEL = popoto.logger.LogLevels.INFO;

    popoto.start("DROUGHTGene");
</script>