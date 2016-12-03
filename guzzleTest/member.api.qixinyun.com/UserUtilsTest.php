<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client();
//get 
/*$response = $client->request(
                'GET',
                'http://139.224.65.141:8001/users',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );*/

/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"12345678933",
                                                "password"=>"123456"
                                               )
		                   )
		      );*/

//signUp
/*$response = $client->request(
                'POST',
                'http://127.0.0.1/users',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//restPassword
/*$response = $client->request(
                'PUT',
                'http://127.0.0.1/restPassword',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//signIn
/*$response = $client->request(
                'POST',
                'http://127.0.0.1/users/signIn',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//updatePassword
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("oldPassword"=>"111111",
                                                "password"=>"123456"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'http://127.0.0.1/users/2/updatePassword',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

