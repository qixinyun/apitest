<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'certificateInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'certificateInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'certificateInfos?filter[company]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"certificateInfos",
                            "attributes"=>array("name"=>'hellohello',
                                                "issueDate"=>'2009-05-05',
                                                "expirationDate"=>'2021-09-06',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'certificateInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"certificateInfos",
                            "attributes"=>array("name"=>'worldworld',
                                                "issueDate"=>'2010-05-15',
                                                "expirationDate"=>'2052-09-26',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'certificateInfos/1',
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
        "type": "certificateInfos",
        "id": "2",
        "attributes": {
            "name": "hellohello",
            "issueDate": "2009-05-05",
            "expirationDate": "2021-09-06",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488166845
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
            "self": "127.0.0.1\/certificateInfos\/2"
        }
    }
}*/