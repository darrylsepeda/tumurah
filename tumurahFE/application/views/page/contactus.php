  <!-- Main component for a primary marketing message or call to action -->
  <!--<div class="row">
    <div class="col-sm-12">
		<ol class="breadcrumb">
		  <li class="active">About TuMurah</li>
		</ol>
    </div>
  </div>-->
  
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
            <div class="panel-heading">Contact Us</div>
            <div class="panel-body" style="word-wrap:break-word;">
            	<div class="container">
                      <p class="lead">PT. Tumurah Indonesia</p>
                      <p>Ruko Green Parkview Blok B1 no. 25<br/>
                      	Jl. Daan Mogot KM14, Jakarta<br/>
                        Office (021) 2 996691 99/98<br/>
                        Fax (021) 2 9669 149
                      </p>
                    </div>
                <p>
					<form>
                    	<table class="table">
                        	<tr>
                            	<td>Name</td>
                                <td><input type="text" placeholder="Name..." class="form-control"/></td>
                            </tr>
                            <tr>
                            	<td>Address</td>
                                <td><textarea class="form-control" rows="3" placeholder="Address..."></textarea></td>
                            </tr>
                            <tr>
                            	<td>Email</td>
                                <td><input type="email" placeholder="Email..." class="form-control"/></td>
                            </tr>
                            <tr>
                            	<td>Phone/Fax</td>
                                <td><input type="text" placeholder="Phone..." class="form-control"/></td>
                            </tr>
                            <tr>
                            	<td>Comments</td>
                                <td><textarea class="form-control" rows="3" placeholder="Comments..."></textarea></td>
                            </tr>
                            <tr>
                            	<td></td>
                                <td><button class="btn btn-primary">Send</button></td>
                            </tr>
                        </table>
                    </form>
                    
                
                    
                </p>
            </div>
        </div>
    </div>
</div>