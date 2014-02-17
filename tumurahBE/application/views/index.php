<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>/assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    
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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=site_url('tumurah_cms')?>">Tumurah Content Management System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, user <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">Logout</a></li>
            </ul>
            </li>
          </ul>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a><b>User Management</b></a></li>
            <li><a href="#" onclick='call_frame("<?=site_url("tumurah_cms/users")?>");'>User</a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/customer')?>");'>Customer</a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/staff')?>");'>Staff</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a><b>Product Management</b></a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/product')?>");'>Product</a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/product_image')?>");'>Product Image</a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/product_category')?>");'>Product Category</a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/product_manufacture')?>");'>Product Manufacture</a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/product_comment')?>");'>Product Comment</a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/product_rating')?>");'>Product Rating</a></li>
            <li><a href="<?=site_url('upload/dld_pdt')?>">Download Product Excel</a></li>
            <li><a class="fancybox" href="#upload">Upload Product Excel</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a><b>Order Management</b></a></li>
            <li><a href="#" onclick='call_frame("<?=site_url('tumurah_cms/order')?>");'>Order</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- <h1 class="page-header"><?=@$title?></h1> -->
          <div id="test"></div>
          <iframe id="frame" width="100%" height="800" style="border:none">
          </iframe>
        </div>
      </div>
    </div>
    
    <div id="upload" style="display:none"><iframe src="<?=site_url('upload/upload_page')?>"></iframe></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>/assets/js/jquery.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/assets/js/docs.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>/assets/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script> $(document).ready(function() { $('.fancybox').fancybox(); }); </script>
    
    <script>
    function call_frame(link){
        document.getElementById("frame").src = link;
    }
    function call_ajax2(link,divid,data_array){
        $(divid).html('<img src="<?=base_url()?>/assets/712.gif" width="100px">');
        $.ajax({
            type:"POST",
            url:link,
            data:data_array,
            //data:{
            //academicyear:$('#academicyear').val(),
            //yearlevel:$('#yearlevel').val(),
            //examtype:$('#examtype').val(),
            //scoretype:$('#scoretype').val()
            //},
            cache:false,
            success:function(html){
                $(divid).html(html);
            }
        });
    }
    </script>
  </body>
</html>
