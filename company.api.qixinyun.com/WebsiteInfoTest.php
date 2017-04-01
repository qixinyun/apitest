<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[name]
 //filter[company]
// $response = $client->request('GET', 'websiteInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'websiteInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'websiteInfos?filter[name]=name&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"websiteInfos",
                            "attributes"=>array("name"=>"namenamename",
                                                "domain"=>'domain',
                                                "url"=>'urlurlurl',
                                                "filingLicense"=>'filingLicense',
                                                "verifyTime"=>'2029-05-05',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'websiteInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"websiteInfos",
                            "attributes"=>array("name"=>"namenamename111",
                                                "domain"=>'domain11',
                                                "url"=>'urlurlurl111',
                                                "filingLicense"=>'filingLicense111',
                                                "verifyTime"=>'2039-05-05',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'websiteInfos/1',
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
        "type": "websiteInfos",
        "id": "1",
        "attributes": {
            "name": "namenamename",
            "domain": "domain",
            "url": "urlurlurl",
            "filingLicense": "filingLicense",
            "verifyTime": "2029-05-05",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488336489
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
            "self": "127.0.0.1\/websiteInfos\/1"
        }
    }
}*/