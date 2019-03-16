<!DOCTYPE html>
<html>
<head>
	<title>Sucker Informations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="buyagrade.css">
</head>
<<<<<<< HEAD
<body>	

	<?php 
	error_reporting(0);
=======
<body>
	<h1>Thank You, sucker!</h1>
	<p>You information has been recorded</p>
	<?php 
				if ($name != '' OR  $section != '' OR  $card_num != '' OR  $$_POST['radio'] != '') {
 echo '<div>
			<h1>Sorry!</h1>
			<p>You did not fill the form completely. <a href="buyagrade.html">Try again?</a></p>
		</div>';




}
else {
 	if(isset($_POST['submit']))

	{
		$fileHandle = fopen('suckers.txt', 'a+')
            OR die ("Can't open file\n");

            
 //write to the file

>>>>>>> 7b8c340b1f91a1b8fe9ce3096d8d25ecd5fc815c

		$name=$_POST['name'];
		$section=$_POST['section'];
		$card_num=$_POST['card'];
<<<<<<< HEAD
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
	
		

=======
		

		echo 'Name: ' . $_POST ["name"] . '<br>';
		echo 'Section: ' . $_POST ["section"] . '<br>';
		echo 'Card Number: ' . $_POST ["card"] . '<br>';
		echo 'Card Type: ' . $_POST ["radio"];

 			fwrite($fileHandle, $name);
 			fwrite($fileHandle, $section);
 			fwrite($fileHandle, $card_num);
 			fwrite($fileHandle, $_POST["radio"]);

 			fclose($fileHandle);

 			echo ' <h3>Here are the all suckers: </h3>
	 <pre class="listsuckers">
	 	 <p><iframe src="suckers.txt" frameborder="0" height="100"
      width="70%"></iframe></p>
	 
	 </pre>
		';
	}


}


	 ?>
	
>>>>>>> 7b8c340b1f91a1b8fe9ce3096d8d25ecd5fc815c
</body>
</html>