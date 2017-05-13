<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'financialOverviews',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'financialOverviews/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'financialOverviews?filter[registrationCategory]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"financialOverviews",
                            "attributes"=>array("companyStrengthLevel"=>1,
                                                "taxInterval"=>2,
                                                "netProfitMargin"=>3,
                                                "grossMargin"=>4,
                                                "totalAssets"=>456,
                                                "totalLiabilities"=>123,
                                                "totalSales"=>222,
                                                "businessIncome"=>462,
                                                "businessProfit"=>121,
                                                "totalProfit"=>221,
                                                "netProfit"=>132,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'financialOverviews',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"financialOverviews",
                            "attributes"=>array("companyStrengthLevel"=>2,
                                                "taxInterval"=>3,
                                                "netProfitMargin"=>4,
                                                "grossMargin"=>5,
                                                "totalAssets"=>16,
                                                "totalLiabilities"=>17,
                                                "totalSales"=>18,
                                                "businessIncome"=>19,
                                                "businessProfit"=>20,
                                                "totalProfit"=>21,
                                                "netProfit"=>22,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'financialOverviews/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

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
        "type": "financialOverviews",
        "id": "1",
        "attributes": {
            "companyStrengthLevel": 1,
            "taxInterval": 2,
            "netProfitMargin": 3,
            "grossMargin": 4,
            "totalAssets": 456,
            "totalLiabilities": 123,
            "totalSales": 222,
            "businessIncome": 462,
            "businessProfit": 121,
            "totalProfit": 221,
            "netProfit": 132,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1489657622
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
            "self": "127.0.0.1\/financialOverviews\/1"
        }
    }
}*/