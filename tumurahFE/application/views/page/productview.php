
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