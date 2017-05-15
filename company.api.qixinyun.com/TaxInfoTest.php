<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'taxInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'taxInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'taxInfos?filter[company]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"taxInfos",
                            "attributes"=>array("identificationNumber"=>'identificationNumber0505',
                                                "creditRating"=>121,
                                                "evaluationUnit"=>'evaluationUnit',
                                                "isTaxes"=>-2,
                                                "arrearsTaxesBalance"=>1234,
                                                "totalTaxes"=>123,
                                                "companyId"=>2
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'taxInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"taxInfos",
                            "attributes"=>array("identificationNumber"=>'qqqidentificationNumber',
                                                "creditRating"=>11,
                                                "evaluationUnit"=>'qqqevaluationUnit',
                                                "isTaxes"=>2,
                                                "arrearsTaxesBalance"=>111,
                                                "totalTaxes"=>111,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'taxInfos/1',
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

/*{
    "meta": [],
    "data": {
        "type": "taxInfos",
        "id": "1",
        "attributes": {
            "identificationNumber": "identificationNumber0505",
            "creditRating": 121,
            "evaluationUnit": "evaluationUnit",
            "isTaxes": -2,
            "arrearsTaxesBalance": 1234,
            "totalTaxes": 123,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1494831813
        },
        "relationships": {
            "companies": {
                "data": {
                    "type": "companies",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/taxInfos\/1"
        }
    }
}*/