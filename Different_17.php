<?php
	$token = "Access_token"; // токен
	$user_id = "0123456789"; //ID пользователя. Вставлять ID лучше своего фейка
	$chat_id = "0123456789"; // ID беседки. Вставлять ID лучше своего фейка

	by("messages.addChatUser?chat_id=".$chat_id."&user_id=".$user_id."&access_token=".$token);
	by("messages.removeChatUser?chat_id=".$chat_id."&user_id=".$user_id."&access_token=".$token);

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