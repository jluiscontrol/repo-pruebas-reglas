<?php

$token = $_POST["token"];
$func = $_POST["func"];
$ruc = $_POST["ruc"];

$tipoConsulta = strlen($ruc) === 13 ? 'GETRUC' : 'GETCEDULA';

$url_login = 'https://sacc.sistemascontrol.ec/api_control_identificaciones/public/usuario/login';

$data = ['usuario' =>'control', 'clave' => '0306'];

$API_URL = curl_init($url_login);
curl_setopt($API_URL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($API_URL, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($API_URL, CURLOPT_USERAGENT, "api-portal-registro-banco-barrio");
curl_setopt($API_URL, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($API_URL, CURLOPT_HTTPHEADER, [
    'Content-Type:application/json'
]);
$result = curl_exec($API_URL);
curl_close($API_URL);
$responseAPI = json_decode($result, true);

if(count($responseAPI['data']) === 0){
    echo 'Las Credenciales del api de identificaciones es incorrecta';
}

$token_api = $responseAPI['data']['token'];

$url = 'https://sacc.sistemascontrol.ec/api_control_identificaciones/public/data/consulta-identificacion';
$API_URL = curl_init($url);
curl_setopt($API_URL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($API_URL, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($API_URL, CURLOPT_USERAGENT, "api-portal-registro-banco-barrio");
curl_setopt($API_URL, CURLOPT_POSTFIELDS, json_encode([
    'func' => $tipoConsulta,
    'ruc' => $ruc
]));
curl_setopt($API_URL, CURLOPT_HTTPHEADER, [
    'Content-Type:application/json',
    'Authorization: '.$token_api
]);
$result = curl_exec($API_URL);
curl_close($API_URL);
$responseAPI = json_decode($result, true);

if($tipoConsulta === 'GETRUC' and array_key_exists('data',$responseAPI)){
    $responseData = [
        "statusCode" => $responseAPI["statusCode"],
        "data" => [
            "error" => "",
            "identity" => $responseAPI["data"]["consolidado"][0]["numeroRuc"],
            "name" => $responseAPI["data"]["consolidado"][0]["razonSocial"],
            "genre" => "OTROS",
            "residence" => $responseAPI["data"]["establecimientos"][0]["direccionCompleta"],
            "streets" => $responseAPI["data"]["establecimientos"][0]["direccionCompleta"],
            "civilstate" => "SOLTERO",
            "dob" => ""
        ]
    ];
}else{
    $responseData = $responseAPI;
}

echo json_encode($responseData);
