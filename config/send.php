<?

	// bot
	/* https://api.telegram.org/bot1581082911:AAEKW20w_-5V0Wx9tzhyThV2pjCgZtCjyc8/getUpdates */

	$site 		= '';
	$token 		= "1581082911:AAEKW20w_-5V0Wx9tzhyThV2pjCgZtCjyc8";
	$chat_id 	= "-1002325597678";
	$txt = '';
	
	if(isset($_GET['mess'])) {
		
		$f_phone 	= strip_tags($_POST['phone']);
		$f_phone 	= substr_replace($f_phone, '', 0, 1);
		$f_phone 	= substr_replace($f_phone, '8', 0, 1);

		$arr 	= array(
		  'Телефон: ' 	=> $f_phone,
		  'Тип: ' 		=> 'Заказать стирку (первая кнопка)'
		);

		foreach($arr as $key => $value) $txt .= "<b>".$key."</b> ".$value."%0A";
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

		if ($sendToTelegram) echo "yes";
		else echo "error";

		exit();
	}

	if(isset($_GET['mess2'])) {
		
		$f_phone 	= strip_tags($_POST['phone']);
		$f_phone 	= substr_replace($f_phone, '', 0, 1);
		$f_phone 	= substr_replace($f_phone, '8', 0, 1);
		$f_name 	= strip_tags($_POST['name']);

		$arr 	= array(
		  'Телефон: ' 	=> $f_phone,
		  'Аты-жөні: ' => $f_name,
		  'Тип: ' 		=> 'Оставить заявку'
		);

		foreach($arr as $key => $value) $txt .= "<b>".$key."</b> ".$value."%0A";
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

		if ($sendToTelegram) echo "yes";
		else echo "error";

		exit();
	}