<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client();
//get   ?filter[name]=4
$response = $client->request(
                'GET',
                'http://127.0.0.1/shareholders',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );

/*$data = array("data"=>array("type"=>"shareholders",
                                    "attributes"=>array( "companyId"=>"1",
                                    					 "name"=>"股东名称12233",
                                                         "category"=>"1",
                                                         "certificateType"=>"1",
                                                         "certificateNumber"=>"1234567896321465",
                                                         "subscribedContributionMethod"=>"1",
                                                         "subscribedContribution"=>"1000",
                                                         "subscribedContributionTime"=>"20161125",
                                                         "actualContributionMethod"=>"1",
                                                         "actualContribution"=>"1000",
                                                         "actualContributionTime"=>"20161125"
                                                         )
                                       )
                          );*/

/*$response = $client->request(
                'POST',
                'http://127.0.0.1/shareholders',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
/*$response = $client->request(
                'PUT',
                'http://127.0.0.1/shareholders/11',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

