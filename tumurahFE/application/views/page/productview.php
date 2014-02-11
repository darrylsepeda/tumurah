<html>
	<head>
		<?php $this->load->view('css');?>
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
		<?php $this->load->view('jQuery');?>
       	</body>
</html>
