<?php
	$token = "ba6f2314c101192ecaf9ed19a0d2cac8c15a0525ad835620be5a4a2c0ac102f11214a92b00b249a340cee"; //Токен

	date_default_timezone_set ("Europe/Moscow"); // Часовой пояс Europe/Kiev - это Украина . Europe/Moscow - это Россия.
	$by = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
	$servk = array("1⃣", "2⃣", "3⃣", "4⃣", "5⃣", "6⃣", "7⃣", "8⃣", "9⃣", "0⃣");

	$smileS = array("😸", "🙀", "😿","😾", "😹", "😼", "😻", "😎","😉", "😈", "😂", "😃", "😀");
	$randS = rand(0,count($smileS) - 1);  
	$smile = $smileS[$randS]; 

	$text = str_replace($by, $servk, date("H:i"))."\n  Рандом смайлов: ".$smile."\n    До Лета: &#9728; ".str_replace($by, $servk, ceil((mktime(0,0,0, 6, 1, (date("Y") + 1)) - time())/3600))." часов\n      До Нового Года: &#128571; ".str_replace($by, $servk, ceil((mktime(0,0,0, 1, 1, (date("Y") + 1)) - time())/3600))." часов."; 

	by("wall.post?message=".urlencode($text)."&attachment=".$attach."&access_token=".$token);

	function by($method){
		$ch = curl_init("https://api.vk.com/method/".$method);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		$response = curl_exec($ch);
		curl_close($ch);
		$json = json_decode($response, true);
		return $json["response"];
	}
?>