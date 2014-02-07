<html>
	<head>
		<?php $this->load->view('jQuery');?>
	</head>
	<body>
		<?php $this->load->view('header');?>
		<div id="wrapper">
			<ul class="prod">
			<?php 
				foreach($prod->result() as $eachProd){
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
				}
			?>
			</ul>
		</div>
		<?php $this->load->view('footer');?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.contentcarousel.js"></script>
	<script type="text/javascript">
		$('#ca-container').contentcarousel();
	</script>
	</body>
</html>
