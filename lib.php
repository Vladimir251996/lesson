<?php
function getIdMenu()
{
$tmp=0;
if($_GET)
{
	if($_GET["id"])
	{
		$tmp=$_GET["id"];
	}
	if(!(($tmp>=1)&&($tmp<=3))) $tmp=0;
	
}
return $tmp;

}
define("ServerName", "localhost");
define("UserLogin", "root");
define("UserPassword", "");
define("DbName", "magaz");
function makeOpisan()
{
	$db=mysql_connect(ServerName,UserLogin,UserPassword);
	if($db)
	{
		if (mysql_select_db(DbName,$db))
		{
			mysql_query("SET name 'utf8",$db);
			$rez=mysql_query("SELECT * FROM `opisan`",$db);
			
			$out_page="";
			for ($i=0;$i<10;$i++)
			{
				$row=mysql_fetch_row($rez);
				$naim=$row[1];
				$txt=$row[2];
				$out_page.="<h1 class='h1_opisan'>{$naim}</h1><div class='div_opisan'>{$txt}</div><br/>";
			}
			echo $out_page;
		}
		mysql_close();
	}
}
function makeTabl()
{
	
	$db = mysql_connect(ServerName,UserLogin,UserPassword);
	if($db)
	{
		if (mysql_select_db(DbName,$db))
		{
			mysql_query("SET names 'utf8",$db);
			$sql1 = "SELECT naim, SUM(kol) FROM tovar GROUP BY naim ASC";
			$rez1 = mysql_query($sql1,$db);
			
			$sql2 = "SELECT naim FROM opisan";
			$rez2 = mysql_query($sql2,$db);
			
			$out_page = "";
			for ($i=0;$i<10;$i++)
			{
				$row1 = mysql_fetch_row($rez1);
				$row2 = mysql_fetch_row($rez2);
				
				$kol = $row1[1];
				$naim = $row2[0];
				
				$out_page .="<tr><td>{$naim}</td><td>{$kol}</td></tr>";
				
			}
			echo  $out_page;
		}
		mysql_close($db);
	}
}
function getHTML($nom)
{
	
	$html = "";
	
	$db = mysql_connect(ServerName,UserLogin,UserPassword);
	if ($db)
	{
		if (mysql_select_db(DbName, $db))
		{
			mysql_query("SET names 'utf8'",$db);
			$rez = mysql_query("SELECT * FROM razmetka WHERE (id={$nom})");
			$kol_str = mysql_num_rows($rez);
			if ($kol_str==1)
			{
				$row = mysql_fetch_row($rez);
				$html = $row[1];
			}
		}
		mysql_close($db);
	}
	echo $html;
}
?>
