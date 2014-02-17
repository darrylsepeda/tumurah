<html>
	<head>
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/elegant.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/jquery.jscrollpane.css" media="all" />
        
	</head>
	<body>
    	<div style="float:right;margin:auto 40px auto auto;"><a href="#" onClick="signin();">Sign In</a> | <a href="#">Register</a></div>
        <div style="width:300px;height:200px;text-align:right;float:right;background:white;position:absolute;z-index:1000;" id="formSignin">
        	
        </div>
    	<header>	
        	
			<div id="logo"><a href="<?=site_url("tumurah/index");?>">logo</a></div>
			<div id="menubar">Shop by
				<div class="popup" id="popup1">
                        <!--<div id="myScroller">
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/animals/1" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/animals/2" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/animals/3" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/animals/4" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/nature/1" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/nature/2" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/nature/3" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/nature/4" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/people/1" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/people/2" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/people/3" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/people/4" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/food/1" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/food/2" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/food/3" alt="Image" /></div>
                            <div class="scroller-el"><img src="http://lorempixel.com/400/400/food/4" alt="Image" /></div>
                        </div>-->
                    
				</div>
			</div>
			<div id="src">
				<input text="text" placeholder="Search..." name="src" id="src" style="vertical-align:middle;width:50%;"/>
				<?=@$cat ? form_dropdown('category',@$cat) : form_dropdown()?>
			</div>
			<div id="cart">cart
				<div class="popup" id="popup2">
					<table>
                    	<tr>
                        	<td>Image</td>
                            <td>Merk</td>
                            <td>Brand</td>
                            <td>Instrument Type</td>
                            <td>Price</td>
                            <td>Qty</td>
                            <td>Sub Total</td>
                            <td>Action</td>
                        </tr>
                        <tr>
                        	<td>Image</td>
                            <td>Merk</td>
                            <td>Brand</td>
                            <td>Instrument Type</td>
                            <td>Price</td>
                            <td>Qty</td>
                            <td>Sub Total</td>
                            <td>Action</td>
                        </tr>
                        <tr>
                        	<td colspan="6">TOTAL</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                        	<td colspan="7">TEST</td>
                            <td></td>
                        </tr>
                    </table>
				</div>
			</div>
		</header>
