<?php
	session_start();
	require_once '../../apiConnection/api.class.php';

	$user = array('email' => 'laratecsys@gmail.com', 'senha' => '1234');
	$url  = 'https://inpaktaservice.herokuapp.com/login';

	$result = Api::ApiConnectPOST($url,json_encode($user));
	echo $result;
?>
