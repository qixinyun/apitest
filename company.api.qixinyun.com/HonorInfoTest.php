<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'honorInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'honorInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'honorInfos?filter[company]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"honorInfos",
                            "attributes"=>array("name"=>'hellohello',
                                                "grantOrganization"=>'grantOrganizationgrantOrganization',
                                                "grantDate"=>'2021-09-06',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'honorInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"honorInfos",
                            "attributes"=>array("name"=>'worldworld',
                                                "grantOrganization"=>'grantOrganization',
                                                "grantDate"=>'2033-09-06',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'honorInfos/1',
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
        "type": "honorInfos",
        "id": "1",
        "attributes": {
            "name": "hellohello",
            "grantOrganization": "grantOrganizationgrantOrganization",
            "grantDate": "2021-09-06",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488273819
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
            "self": "127.0.0.1\/honorInfos\/1"
        }
    }
}*/