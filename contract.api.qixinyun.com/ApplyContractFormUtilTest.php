<?php
namespace Product;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8007/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get applyContractForms
  /**
     *   3.1 filter[status]
     *   3.2 filter[name]
     *   3.3 filter[uid]
     *   3.4 filter[userGroupId]
     *   3.5 filter[departmentId]
     */
// $response = $client->request('GET', 'applyContractForms/2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyContractForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyContractForms?filter[name]=qq&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//get contract
   /**
     *   3.1 filter[status]
     *   3.2 filter[name]
     *   3.3 filter[userGroupId]
     *   3.4 filter[departmentId]
     *   3.5 filter[price]
     */
// $response = $client->request('GET', 'contracts',['haders'=>['Content-' => 'application/vnd.api+json']]);
 //$response = $client->request('GET', 'contracts/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'contracts?filter[departmentId]=9&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyContractForms",
                            "attributes"=>array("name"=>"contractName",
                                                "validityStart"=>'2017-01-18',
                                                "validityEnd"=>'2027-01-18',
                                                "category"=>1,
                                                "price"=>10.2,
                                                "companyId"=>1,
                                                "productId"=>1,
                                                "uid"=>86
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyContractForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyContractForms",
                            "attributes"=>array("name"=>"contractNameqqq",
                                                "validityStart"=>'2017-01-28',
                                                "validityEnd"=>'2027-01-28',
                                                "category"=>2,
                                                "price"=>10.25,
                                                "productId"=>1
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyContractForms/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
//edit -- 结束

echo "<pre>";
print_r($status);
print_r($contents);