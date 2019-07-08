<html>
<head>
  <link rel="stylesheet" href="<?php echo base_url().'assets/alchemy.min.css' ;?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/alchemy-white.css' ;?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/styles/vendor.css';?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/alchemy.css';?>"/>



    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ;?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/style.css' ;?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/dark.css';?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-icons.css';?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css';?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.css';?>" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css';?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/rating.css';?>" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/rating.js';?>"></script>
    

    <!-- Document Title
    ============================================= -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/images/cd-conet_logo.png';?>" />
    <title>RiceNet</title>
    <style>
    .btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
</style>



</head>
<body class="stretched">

    <!-- Document Wrapper
    ============================================ -->
    

<!-- Header
============================================= -->
<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                

            <nav id="primary-menu" class="dark">

                <ul>
                    <li id="home" class="mega-menu"><a href="<?php echo site_url('home/');?>"><div>Home</div></a>
                    </li>
                    <li id="products" class="mega-menu"><a href="<?php echo site_url('browse');?>"><div>Browse</div></a>
                    </li>
                    <li id="bonusandoffers" class="mega-menu"><a href="<?php echo site_url('search');?>"><div>Search</div></a>
                    </li>
                    
                    <li id="faqs" class="mega-menu"><a href="<?php echo site_url('faq');?>"><div>FAQs</div></a>
                    </li>
                    
                </ul>                         
                <!-- Top Cart
                ============================================= -->
                <div id="top-cart">
                </div>
                 
                <!-- #top-cart end -->

                <!-- Top Search
                ============================================= -->
               
            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header>





  <div class="alchemy" id="alchemy"></div>

  <script src="https://d3js.org/d3.v3.min.js"></script>

  <script type='text/javascript' src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"> </script>

  <script src="<?php echo base_url().'assets/alchemy.min.js';?>"></script>

  <script src="<?php echo base_url().'assets/scripts/vendor.js';?>"></script>
  <script src="<?php echo base_url().'assets/scripts/vendor.ed65a898.js';?>"></script>
  <script src="<?php echo base_url().'assets/scripts/widgets.js';?>"></script>
  <script src="<?php echo base_url().'assets/scripts/main.js';?>"></script>
  <script src="<?php echo base_url().'assets/alchemy.js';?>"></script>

  
  <div class="alchemy" id="alchemy"></div>
  <script type="text/javascript">
  var graph = <?php echo $graph_json;?>;

    var config = {
  dataSource: graph,                      

  cluster: true,

  nodeTypes: {"node_type":
                [
                 "family",
                 "coworker", 
                 "classmate", 
                 "friend", 
                 "other"
                ]
               },
  nodeCaption: "firstName",
  rootNodeRadius: 30,

  showControlDash: true,

  showStats: true,
  nodeStats: true,

  showFilters: true,
  nodeFilters: true,

  captionToggle: true,
  edgesToggle: true,
  nodesToggle: true,
  toggleRootNotes: false,

  zoomControls: true
};

alchemy.begin(config);
  </script>


<section id="content">

<div class="content-wrap">

    <div class="container clearfix">

        <!-- Post Content
        ============================================= -->
        <div class=" nobottommargin clearfix">

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
    <table class="table">
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
</div>
</div>
</section>

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

            

                
            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2016 All Rights Reserved by RiceNet.
                    </div>

                    

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

   

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/functions.js';?>"></script>

</body>
</html>