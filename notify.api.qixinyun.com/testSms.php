<?php

require '../vendor/autoload.php';

use GuzzleHttp\Exception\RequestException;

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8004/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);


$data = array('data'=>array('type'=>'sms',
							'attributes'=>array(
								'code'=>34567
								),
							)
			);
$response = $client->request('POST', 'sms/auth/15202939435',
	[
	'haders'=>['Content-' => 'application/vnd.api+json'],
	'json' => $data,
	]);

var_dump($response->getStatusCode());
$body = $response->getBody();
echo '<pre>';
$contents = $body->getContents();
print_r($contents);