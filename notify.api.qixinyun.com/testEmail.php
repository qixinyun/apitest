<?php

require '../vendor/autoload.php';

use GuzzleHttp\Exception\RequestException;

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8004/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//验证邮箱
$data = array('data'=>array('type'=>'email',
							'attributes'=>array(
								'code'=>22331
								),
							)
			);
$response = $client->request('POST', 'email/verify/41893204@qq.com',
	[
	'haders'=>['Content-' => 'application/vnd.api+json'],
	'json' => $data,
	]);

var_dump($response->getStatusCode());
$body = $response->getBody();
echo '<pre>';
$contents = $body->getContents();
print_r($contents);