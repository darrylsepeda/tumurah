<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url();?>assets/assets/ico/tumurah.ico">

    <title>Tumurah</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/carousel.css" rel="stylesheet">
    <!-- caroufredsel -->
    <link href="<?=base_url();?>assets/css/horizontal.css" rel="stylesheet">
    <!-- Custom styles for this template 
    <link href="<?=base_url();?>assets/navbar.css" rel="stylesheet">-->

	
	<!-- Rate It styles for this template -->
	<link href="<?=base_url();?>assets/dist/rateit/src/rateit.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div class="container">
    <div class="navbar-wrapper">
      <div class="container">
        <div id="signin-signup">
        	<?php 
				if($this->session->userdata('logged_in')){
					$session_data=$this->session->userdata('logged_in');
					$data['first'] = $session_data['first'];
					$data['last'] = $session_data['last'];
					echo '<button type="button" class="btn btn-link" id="btn-option">Welcome, '.$data['first']." ".$data['last'].' <b class="caret"></b></button>';
				}else{
					echo '<button type="button" class="btn btn-link" id="btn-signin">Sign in <b class="caret"></b></button> |    
          			<button type="button" class="btn btn-link btn-signup" id="btn-signup" >Register</button>';
				}
			?>  
        </div>
        <!-- /#signin-signup -->
        <div style="float:right;">
        	<div id="form-option">
                <ul class="clearfix">
                    <li><a class="btn btn-link">Edit Profile</a></li>
                    <li><a href="<?=site_url('tumurah/logout');?>" class="btn btn-link">Logout</a></li>
                </ul>
            </div>
            <!-- /#form-signin -->
          <div id="form-signin">
          	<?=validation_errors();?>
          	<?=form_open('tumurah/verifyLogin');?>
            <table class="table table-responsive">
              <tr>
                <td>
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon glyphicon glyphicon-user"></span>
                      <input type="email" class="form-control" name="user" placeholder="Email...">
                    </div>
                </td>
              </tr>
              <tr>
                  <td>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon glyphicon glyphicon-log-in"></span>
                        <input type="password" class="form-control" name="pass" placeholder="Password...">
                      </div>
                  </td>
              </tr>
              <tr>
                <td><button type="submit" class="btn btn-info">Login</button></td>
              </tr>
            </table>
            </form>
          </div>
          <!-- /#form-signin -->
        </div>
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index">Tumurah</a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index">Home</a></li>
                <li>
                  <div class="dropdown">
                    <ul class="nav navbar-nav">
                      <li><a data-toggle="dropdown" href="#">Shop by <b class="caret"></b></a>
                          <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="width:1140px;height:auto;margin-left:-197px;">
                            <div class="wrap" style="width:90%;margin:auto;">
                              <h2>Category</h2>
                        
                              <div class="frame oneperframe" id="oneperframe">
                                <ul class="clearfix">
                                  <li>
                                    <table>
                                      <tr>
                                        <td><img data-src="holder.js/990x290" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera"></td>
                                      </tr>
                                    </table>
                                  </li>
                                  <li>
                                    <table>
                                      <tr>
                                        <td><img data-src="holder.js/990x290" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera"></td>
                                      </tr>
                                    </table>
                                  </li>
                                  <li>
                                    <table>
                                      <tr>
                                        <td><img data-src="holder.js/990x290" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera"></td>
                                      </tr>
                                    </table>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.frame oneperframe -->
                            </div>
                            <!-- /.wrap -->
                          </div>
                          <!-- /. dropdown-menu -->
                      </li>
                    </ul>
                  </div>
                  <!-- /.dropdown -->
                </li>
                <li>
                  <input type="text" class="form-control" placeholder="Search..."/>
                </li>
                <li>
                  <select class="form-control">
                      <option>Furniture</option>
                      <option>Camera</option>
                      <option>Computer</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
                </li>
                
              </ul>
              <div class="dropdown">
                <ul class="nav navbar-nav navbar-right">
                  <li><a data-toggle="dropdown" href="#">Cart <b class="caret"></b></a>
                      <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="width:1140px;height:auto;">
                        <table class="table table-bordered table-hover" id="cart">
                          <tr>
                            <th>Image</th>
                            <th>Merk</th>
                            <th>Brand</th>
                            <th>Instrument Type</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th>Action</th>
                          </tr>
                          <tr>
                            <td><img data-src="holder.js/150x100" class="img-thumbnail" alt=""></td>
                            <td>Samsung</td>
                            <td>Galaxy Note 8.0</td>
                            <td>Tablet</td>
                            <td>IDR 180.000</td>
                            <td>10</td>
                            <td>IDR 1.800.000,-</td>
                            <td>Edit Delete</td>
                          </tr>
                          <tr>
                            <td colspan="6">Total</td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td colspan="7">Teest</td>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.dropdown-menu -->
                  </li>
                </ul>
              </div>
              <!-- /.dropdown -->
            </div>
            <!-- /.navbar-collapse collapse -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar navbar-inverse navbar-static-top -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.navbar-wrapper -->

    <!-- modal form register -->

    <div class="modal-dialog" id="form-signup" >
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close btn-signup" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Become a TuMurah Member</h4>
        </div>
        <div class="modal-body">
          <p>
            <table id="table table-hover">
              <tr>
                <td>First Name</td>
                <td><input type="text" class="form-control" placeholder="First Name..."></td>
              </tr>
              <tr>
                <td>Last Name</td>
                <td><input type="text" class="form-control" placeholder="Last Name..."></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><input type="email" class="form-control" placeholder="Email..."></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" class="form-control" placeholder="Password..."></td>
              </tr>
              <tr>
                <td>Confirm Password</td>
                <td><input type="password" class="form-control" placeholder="Confirm Password..."></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="male">
                      Male
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="female">
                      Female
                    </label>
                  </div>
                </td>
              </tr>
            </table>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-signup" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    
    <!-- modal form register -->
    
   
    
    
    <!--<div class="container">

      
      <div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Tumurah</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Product <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
			  <li><a href="#">FaQ</a></li>
              <li><a href="#">Contact Us</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Login</a></li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, user <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div> 
      </div>-->