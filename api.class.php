<?php

class Api{


	public static function ApiConnectPOST($url,$body){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		
		$ret = curl_exec($ch);
		curl_close ($ch);
		return $ret;
	}

	public static function ApiPOST($url,$body,$authToken){

		$ch = curl_init();
		$header = array('Content-type:application/json', 'Authorization:'.$authToken);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
		
		$ret = curl_exec($ch);
		curl_close ($ch);
		return $ret;
	}

	public static function ApiPUT($url,$body,$authToken){

		$ch = curl_init($url);
		$header = array('Content-type:application/json', 'Authorization:'.$authToken);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($body));
		curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		$ret = curl_exec($ch);
		$info = curl_getinfo($ch);
		if (curl_errno($ch)){
			
			echo $info['http_code'];
			echo '<script>alert("Deu ruim ae!")</script>';
			return $info['http_code'];
		}
		
		curl_close ($ch);
		
		return $info['http_code'];
	}

	public static function ApiConnectGET($url,$authToken){
		$ch = curl_init();
		$header = array('Content-type:application/json', 'Authorization:'.$authToken);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPGET, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
		$ret = curl_exec($ch);
		curl_close ($ch);
		return $ret;
	}
	public static function ApiGETorganization($subDomain){
		$ch = curl_init();
		$url = "https://inpaktaservice.herokuapp.com/cliente/org?subDominio=$subDomain";
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPGET, 1);
		$ret = curl_exec($ch);
		curl_close ($ch);
		return $ret;
	}

	public static function createSubdomain($subdomain){
		$cpanelusername = 'inpakt79';
		$cpanelpassword = '88Yfh3dX0y';
		$domain = 'inpakta.com.br';
		$directory = "/public_html/subdominios/";

		$query = "https://$domain:2083/json-api/cpanel?cpanel_jsonapi_func=addsubdomain&cpanel_jsonapi_module=SubDomain&cpanel_jsonapi_version=2&domain=$subdomain&rootdomain=$domain&dir=$directory";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$header[0] = "Authorization: Basic ". base64_encode($cpanelusername.":".$cpanelpassword) . "\n\r";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_URL, $query);
		$result = curl_exec($ch);
		
		if ($result == false){
			echo "<script>alert('erro ao cadastrar seu subdominio:\n".curl_error($ch)."')</script>";
		}
		curl_close($ch);
	}

}

?>