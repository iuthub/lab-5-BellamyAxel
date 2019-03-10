<!DOCTYPE html>
<html>
<head>
	<title>Sucker Informations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="buyagrade.css">
</head>
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


		$name=$_POST['name'];
		$section=$_POST['section'];
		$card_num=$_POST['card'];
		

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
	
</body>
</html>