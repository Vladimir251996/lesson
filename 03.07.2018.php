<?php
$mysqli = new mysqli('localhost', 'root', 'KAMAZ');

if($mysqli -> connect_error) {
	$error = "Не удалось подключиться к mysqli: " . $mysqli -> 
	connect_error;
}
//получаем результат запроса
$res = $mysqli -> qwery('SELECT * FROM member table');
//здесь мы получаем строку (запись) в виде ассоциативного массива
$member_table = [];
while ($row = $res -> fetch_assoc()){
$member_table = [] = $row;

};

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		<?php
		if (isset($error))
			echo 'text:' . $error;
		else
			print_r($member_table);
		?>
		</pre>
			<table style = "border: 1px solid black;witx: 100%;">
				<thead> <!-- Перебираем в цикле массив с записями из таблицы -->
					<td>id</td>
					<td>name</td>
					<td>sex</td>
					<td>edg</td>
					<td>psix</td>
					<td>id</td>
					<td>id</td>
					<td>id</td>
					<td>id</td>
				</thead>
				<tbody>
				<?php
				foreach ($member_table as $member):?>
					<tr>
						<?php $foreach ($member as $svoistva):?> 
						<td><? $svoistva ?></td>

					<?php endforeach; ?>
					<td><? = $member['table'] ?></td>
					<td><? = $member['name'] ?></td>
					<td><? = $member['sex'] ?></td>
					<td><? = $member['edg'] ?></td>
					<?php endforeach;?>

				</table>
				</body>
				</html>

