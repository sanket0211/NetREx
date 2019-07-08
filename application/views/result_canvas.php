
<!DOCTYPE html>
<!-- This code is for demonstration purposes only.  You should not hotlink to Github, Rawgit, or files from the Cytoscape.js documentation in your production apps. -->
<html>
<head>

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

<style>
body { 
  font: 14px helvetica neue, helvetica, arial, sans-serif;
}
head { 
  font: 14px helvetica neue, helvetica, arial, sans-serif;
}

#cy {
  height: 500px;
  width: 1400px;
  top:10px;
  left:50px;
  bottom:10px;
</style>


<link href="style.css" rel="stylesheet" />
<meta charset=utf-8 />
<script type="text/javascript" src="<?php echo base_url().'assets/cyto/cytoscape.min.js';?>"></script>
</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div >

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header full-header" data-sticky-class="dark">

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
                            <li id="faqs" class="mega-menu"><a href="<?php echo site_url('contact-us');?>"><div>Contact Us</div></a>
                            </li>
                            <li id="faqs" class="mega-menu"><a href="<?php echo site_url('download');?>"><div>Download</div></a>
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


<section id="content">


<div id="cy"></div>


<?php 
$all_tissues = array_keys($tissue_gene);
foreach($all_tissues as $ts){

	foreach($tissue_gene[$ts] as $t){
		echo $t;
	}

}
?>

</section>
<!-- Load application code at the end to ensure DOM is loaded -->
<script>


var cy = cytoscape({
  container: document.getElementById('cy'),
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
        'text-outline-color': '#A52A2A	',
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

  elements: <?php echo $graph_json;?>,

  layout: {
    name: 'random'
  }
});
</script>
</div>


</body>
</html>
