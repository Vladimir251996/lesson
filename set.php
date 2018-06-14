<?php
	$first = 'Vladimir 5+';
	$string = 'qwery';
	$int = 13;
	$float = 45.54;
	$boolean = true;
	$a = 346;
	$b = 32;
	echo $a % $b; #111111111111111111
	$i = ['name' => 'Vladimir','second_name' => 'Barabanov', 'year' => 'twent two'];
	print_r($i);
	echo'<br/>';
	$ray = [];
	$ray["fff"] = 'new item 1';
	$ray[] = 'new item 2,';
	$ray[] = 'new item 3,';
	$ray[] = 'new item 4,';
	$ray[] = 'new item 5,';
	print_r($ray);
	echo'<br/>';
	for ($i=0; $i < 8 ; $i++) { 
	 	 echo 'Hi,';
		# code...
	}
	echo'<br/>';
			/*
			foreach ($ray as $value) {
			echo $value . '<br />';
			# code...
			}
			*/
	echo'<br/>';
	//$array_to_string +implode(glue, pieces);	
	$array_to_string = implode('||', $ray);	// Один вариант
	echo $array_to_string;
	echo'<br/>';

	/*$ray = ['11',4];
	var_dump ($ray);
	echo'<br/>';
	print_r($ray);
	echo'<br/>'; 
	*/

	
	echo'<br/>';
	echo "Hello, $first ";
	echo'<br/>';
	echo "$string, $int, $float, $boolean,"
	?>

<?= print_r($array_to_string);?>
<br/>
<?= $string ?> 
<br/> 
<?= $float + $int ?>
<br/>
<?= intval ($float + $int) ?>
<br/>





