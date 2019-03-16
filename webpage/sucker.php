<!DOCTYPE html>
<html>
<head>
	<title>Sucker Informations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="buyagrade.css">
</head>
<body>	

	<?php 
	error_reporting(0);

		$name=$_POST['name'];
		$section=$_POST['section'];
		$card_num=$_POST['card'];
		$card_type=$_POST['card_type'];


		$isNamerError=empty($name);
		$isSectionError=empty($section);
		$isCardNumError=empty($card_num);
		$isCardTypeError=empty($card_type);
		$isFormError=$isNamerError||$isSectionError||$isCardNumError||$isCardTypeError;
	?>

	<?php 
		if (!$isFormError) {
			$list=$name . ";" . $section . ";". $card_num. ";" . $card_type . "\n";
			file_put_contents("suckerfuckers.txt", $list, FILE_APPEND);
	 ?>

	 <h1>Thanks Sucker!</h1>
	 	<h3>Here are Your info</h3>

	 	<p>Name: <?php echo $name; ?></p>
	 	<p>Section: <?php echo $section; ?></p>
	 	<p>Card Number: <?php echo $card_num; ?></p>
	 	<p>Card Type: <?php echo $card_type; ?></p>


		<p>Here is the list of all the suckers:</p>
	
	
	<pre>
		 <?=
		 file_get_contents("suckerfuckers.txt"); 

		?>
	</pre>

	<?php 
	}else{
		 ?>
		<p>All the fields are required, Go back and <a href="buyagrade.html">fill the form again!</a></p>

	<?php 
			} 
	?>
	
		

</body>
</html>