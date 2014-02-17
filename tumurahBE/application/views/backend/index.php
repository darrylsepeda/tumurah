<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tumurah CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <?php 
    if(@$css_files)
    foreach($css_files as $file): ?>
    	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php 
    if(@$js_files)
    foreach($js_files as $file): ?>
    	<script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

    <!-- Le styles -->
    <link href="<?=base_url()?>/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?=base_url()?>/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?=base_url()?>/assets/ico/favicon.png">-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?=site_url('tumurah_cms')?>">Tumurah Content Management System</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
          </div><!--/.nav-collapse -->
          <ul class="nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="nav-header">User Management</li>
                <li><a href="<?=site_url('tumurah_cms/users')?>">User</a></li>
                <li><a href="<?=site_url('tumurah_cms/customer')?>">Customer</a></li>
                <li><a href="<?=site_url('tumurah_cms/staff')?>">Staff</a></li>
                <li class="divider"></li>
                <li class="nav-header">Product Management</li>
                <li><a href="<?=site_url('tumurah_cms/product')?>">Product</a></li>
                <li><a href="<?=site_url('tumurah_cms/product_image')?>">Product Image</a></li>
                <li><a href="<?=site_url('tumurah_cms/product_category')?>">Product Category</a></li>
                <li><a href="<?=site_url('tumurah_cms/product_manufacture')?>">Product Manufacture</a></li>
                <li><a href="<?=site_url('tumurah_cms/product_comment')?>">Product Comment</a></li>
                <li><a href="<?=site_url('tumurah_cms/product_rating')?>">Product Rating</a></li>
                <li class="divider"></li>
                <li><a href="<?=site_url('upload/dld_pdt')?>">Download Product Excel</a></li>
                <li><a href="<?=site_url('upload/dld_pdt')?>">Upload Product Excel</a></li>
                <li class="divider"></li>
                <li class="nav-header">Order Management</li>
                <li><a href="<?=site_url('tumurah_cms/order')?>">Order</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
          <h2><?=@$title?></h2>
          <?=@$output?>
      </div><!--/row-->

      <hr />

      <footer>
        <p>&copy; Tumurah 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <?php if(@$title){ ?><script src="<?=base_url()?>/assets/js/jquery.js"></script> <?php } ?>
    <script src="<?=base_url()?>/assets/js/bootstrap-transition.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-alert.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-modal.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-tab.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-button.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-collapse.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-carousel.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
