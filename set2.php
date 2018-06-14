<?php
/*
	$i = ['name' => 'DOG','second_name' => 'Shev', 'year' => 'two'];
	print_r($i);
	echo'<br/>';
	$array_to_string = implode('||', $i);	// Один вариант
	echo $array_to_string;
	echo'<br/>';
	*/
$i = [];	
$i[who] =  'DOG';
$i[poroda] = 'Zenenxynd';
$i[klichka] = 'Grand';
	foreach ($i as $key => $value)
	{
			echo $key . '=>' . $value . '<br/>';
		}
		// подключаю другой скрипт
		//include 
		require '1.php';
		// вывожу дату
		echo $introtext . date('Y-m-d h:i:s' , time() + $hour) //исполняет файл 1, черз $introtext
	?>



