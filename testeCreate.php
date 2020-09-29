<?php
$cpanelusername = "inpakt79";
$cpanelpassword = "88Yfh3dX0y";
$subdomain = 'laratecsys';
$domain = 'inpakta.com.br';
$directory = "/public_html/subdominios/$subdomain";  // A valid directory path, relative to the user's home directory. Or you can use "/$subdomain" depending on how you want to structure your directory tree for all the subdomains.

$query = "https://$domain:2083/json-api/cpanel?cpanel_jsonapi_func=addsubdomain&cpanel_jsonapi_module=SubDomain&cpanel_jsonapi_version=2&domain=$subdomain&rootdomain=$domain&dir=$directory";

$curl = curl_init();                                // Create Curl Object
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);       // Allow self-signed certs
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);       // Allow certs that do not match the hostname
curl_setopt($curl, CURLOPT_HEADER,0);               // Do not include header in output
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);       // Return contents of transfer on curl_exec
$header[0] = "Authorization: Basic " . base64_encode($cpanelusername.":".$cpanelpassword) . "\n\r";
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);    // set the username and password
curl_setopt($curl, CURLOPT_URL, $query);            // execute the query
$result = curl_exec($curl);
if ($result == false) {
    error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");   
                                                    // log error if curl exec fails
}
curl_close($curl);

print $result;

?>