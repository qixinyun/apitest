<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[companyName]
 //filter[company]
// $response = $client->request('GET', 'investmentAbroads',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'investmentAbroads/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'investmentAbroads?filter[companyName]=company&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"investmentAbroads",
                            "attributes"=>array("companyName"=>"companyName",
                                                "principal"=>'principal',
                                                "establishedTime"=>'2029-05-05',
                                                "registrationCapital"=>23,
                                                "address"=>'addressaddress',
                                                "website"=>'htp://www.baidu.com',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'investmentAbroads',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"investmentAbroads",
                            "attributes"=>array("companyName"=>"namenamename111",
                                                "principal"=>'principal111',
                                                "establishedTime"=>'2019-05-05',
                                                "registrationCapital"=>25,
                                                "address"=>'addressaddress1111',
                                                "website"=>'https://www.baidu.com',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'investmentAbroads/1',
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
        "type": "investmentAbroads",
        "id": "1",
        "attributes": {
            "companyName": "companyName",
            "principal": "principal",
            "establishedTime": "2029-05-05",
            "registrationCapital": 23,
            "address": "addressaddress",
            "website": "htp:\/\/www.baidu.com",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488870867
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
            "self": "127.0.0.1\/investmentAbroads\/1"
        }
    }
}*/