<?php
function javaKol()
{
	$otvet = "";
	$sql = "SELECT naim, SUM(kol) FROM tovar GROUP BY naim ASC";
	$rez = mysql_query($sql);
	for ($i=0;$i<10;$i++)
	{
		$row = mysql_fetch_row($rez);
		$kol = $row[1];
		$otvet .= $kol;
		if ($i!=9) $otvet .= "~";
	}
	echo $otvet;
}	
function getQuery()
{
	$date_time = date('Y-m-d [H:i:s]');
	for ($i=0;$i<10;$i++)
	{
		$tmp = "tov".$i;
		if ($_GET[$tmp])
		{
			$kol = $_GET[$tmp];
			$q = "INSERT INTO tovar (naim,kol,dv)".
			     "VALUES ({$i},{$kol},'{$date_time}')";
			mysql_query($q);
		}
	}
}

function runMySQL()
{
	$db = mysql_connect("localhost","root","");
	if ($db)
	{
		if (mysql_select_db("magaz",$db))
		{
			mysql_query("SET names 'utf8'",$db);
			getQuery();
			javaKol();
		}
		mysql_close($db);
	}
}
if ($_GET)
{
	$flag = false;
	for ($i=0;$i<10;$i++)
	{
		$tmp = "tov".$i;
		if ($_GET[$tmp])
		{
			$flag=true;
			break;
		}
	}
	if ($flag)
	{
		runMySQL();
	}
}

?>

