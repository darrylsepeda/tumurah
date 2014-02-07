<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Tumurah</title>
</head>
<body>

List : 
<ul>
	<?php foreach($prod->result() as $each_prod){ ?>
		<li><?=$each_prod->product_id?></li>
	<?php } ?>
<ul>

</body>
</html>