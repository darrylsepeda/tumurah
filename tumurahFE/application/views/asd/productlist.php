  <!-- Main component for a primary marketing message or call to action -->
  
  
  <?php
  ?>
  <div class="row">
    <div class="col-sm-12">
		<ol class="breadcrumb">
		  <li><a href="#">Product List</a></li>
		  <li><a href="#">Product Detail</a></li>
		  <li class="active">Detail</li>
		</ol>
		<hr/>
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
			<div class="panel-heading">Product List</div>
			<div class="list-group">
                <?php foreach($product['product_page']->result() as $each){ ?>
				<a href="#" class="list-group-item">
				  <div class="col-sm-3">
					<img src="<?=$each->location ? base_url().'../tumurahBE/assets/uploads/files/'.$each->location : base_url().'../no-images.jpg'; ?>" width="200" class="img-thumbnail" />
				  </div>
				  <div class="col-sm-9">
				  <h4 class="list-group-item-heading"><?=$each->name?></h4>
				  <p class="list-group-item-text"><?=word_limiter($each->description, 30);?></p>
				  <div>Price: <?=$each->currency?>. <?=$each->price_current?></div>
				  <div class="rateit" data-rateit-value="<?=$each->actual_average?>" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5" data-rateit-readonly="true"></div>
				  </div>
				  <div class="clearfix"></div>
				</a>
                <?php } ?>
			</div>
		</div>
        <?=$pagination;?>
    </div><!-- /.col-sm-4 -->
  </div>
  