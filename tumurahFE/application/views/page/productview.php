  <!-- Main component for a primary marketing message or call to action -->
  <div class="row">
    <div class="col-sm-12">
		<ol class="breadcrumb">
		  <li><a href="productlist">Product List</a></li>
		  <li class="active">Product Detail</li>
		  <!--<li >Detail</li>-->
		</ol>
    </div><!-- /.col-sm-4 -->
  </div>
  
  <div class="row">
    <div class="col-sm-3">
		<div class="panel panel-default">
		  <div class="panel-heading">Product Category</div>
			
			<div class="list-group">
				<a href="<?=site_url("tumurah/productlist?category=&brand=")?>" class="list-group-item active">All Category</a>
				
				<div class="list-group-item" data-toggle="collapse" href="#collapseOne">
				  Bed
				</div>
				<div id="collapseOne" class="collapse in">
					<a href="#" class="list-group-item">
						&nbsp;&nbsp;&nbsp;&nbsp;
						King Size
					</a>
					<a href="#" class="list-group-item">
						&nbsp;&nbsp;&nbsp;&nbsp;
						Queen Size
					</a>
				</div>
				<div class="list-group-item" data-toggle="collapse" href="#collapseTwo">
				  Towel
				</div>
				<div id="collapseTwo" class="collapse">
					<a href="#" class="list-group-item">
						&nbsp;&nbsp;&nbsp;&nbsp;
						Bath Towel
					</a>
					<a href="#" class="list-group-item">
						&nbsp;&nbsp;&nbsp;&nbsp;
						Face Towel
					</a>
				</div>
				<a href="#" class="list-group-item">Door</a>
				<a href="#" class="list-group-item">Desk</a>
			</div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">Brand</div>
		  <div class="list-group">
			<a href="#" class="list-group-item active">
			  All Brand
			</a>
			<a href="#" class="list-group-item">Tumurah</a>
			<a href="#" class="list-group-item">King</a>
			<a href="#" class="list-group-item">Queen</a>
		  </div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">Product Price</div>
			<div class="panel-body">
				<p>
					<label for="amount">Range:</label>
					<input type="text" readonly="readonly" id="amount" style="border:0; color:#f6931f; font-weight:bold;" />
				</p>
				<div id="slider-range"></div>
				<br/>
				<button type="button" class="btn btn-default pull-right">Filter</button>
				<div class="clearfix"></div>
			</div>
		</div>

    </div><!-- /.col-sm-4 -->
    <div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">Nama Product</div>
			<div class="list-group">
            	<div class="container-fluid">
                	<div class="row">
                         <div class="col-md-2 span3">
                            <img data-src="holder.js/100x100" class="img-thumbnail"/>
                            <img data-src="holder.js/100x100" class="img-thumbnail"/>
                            <img data-src="holder.js/100x100" class="img-thumbnail"/>
                         </div>
                         <div class="col-md-5"><img data-src="holder.js/300x300" class="img-thumbnail"/></div>
                         <div class="col-md-5 span5">
                            <div class="row">
                                <div class="col-md-9">Product Name</div>
                                <div class="col-md-2">Rating</div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">Product Name</div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">btn Like</div>
                            </div>
                            
                            <div class="row" style="white-space: wrap;">
                                <div class="col-md-11">Product Short Description<br/>
                                Line 1<br/>
                                Line 2<br/>
                                Line 3
                                </div>
                            </div>
                            <div class="row" style="white-space: wrap;">
                                <div class="col-md-11">
                                	Qty 
                                    <input type="text" class="form-control col-md-2" value="1">
                                    <button type="button" class="btn btn-primary pull-right">Add to Cart</button>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            	
                	
			</div>
		</div>
    </div><!-- /.col-sm-4 -->
  </div>
  


<!--<div id="wrapper">
	<ul class="prod">
	<?php 
		//foreach($prod->result() as $eachProd){
	?>
			<li>
			<table>
			<tr><td><img src="<?="../../".$base_img.$eachProd->imgurl;?>" /></td></tr>
			<tr><td><?=$eachProd->merk." ".$eachProd->name;?></td></tr>
			<tr><td><?=$eachProd->description;?></td></tr>
			<tr><td><?=$eachProd->currency." ".$eachProd->price_current;?></td></tr>
			</table>
			</li>
	<?php			
		//}
	?>
	</ul>
</div>-->