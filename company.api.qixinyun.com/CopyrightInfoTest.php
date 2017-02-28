<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //filter[name]
 //filter[registrationCategory]
 $response = $client->request('GET', 'copyrightInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'copyrightInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'copyrightInfos?filter[registrationCategory]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"copyrightInfos",
                            "attributes"=>array("name"=>'worldworld',
                                                "registrationNumber"=>'1234567896321',
                                                "registrationDate"=>'2009-05-05',
                                                "registrationCategory"=>2,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'copyrightInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"copyrightInfos",
                            "attributes"=>array("name"=>'著作权信息naamenamename',
                                                "registrationNumber"=>'967845123111',
                                                "registrationDate"=>'2012-05-05',
                                                "registrationCategory"=>2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'copyrightInfos/1',
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
        "type": "copyrightInfos",
        "id": "1",
        "attributes": {
            "name": "worldworld",
            "registrationNumber": "1234567896321",
            "registrationDate": "2009-05-05",
            "registrationCategory": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488188931
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
            "self": "127.0.0.1\/copyrightInfos\/1"
        }
    }
}*/