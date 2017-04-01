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
// $response = $client->request('GET', 'recruitInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'recruitInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'recruitInfos?filter[name]=name&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"recruitInfos",
                            "attributes"=>array("duties"=>"dutiesduties",
                                                "salary"=>22,
                                                "address"=>'addressaddress',
                                                "source"=>'sourcesource',
                                                "publicationDate"=>'2019-05-05',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'recruitInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"recruitInfos",
                            "attributes"=>array("duties"=>"dutiesduties",
                                                "salary"=>12,
                                                "address"=>'addressaddress',
                                                "source"=>'sourcesource',
                                                "publicationDate"=>'2039-05-05',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'recruitInfos/1',
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
        "type": "recruitInfos",
        "id": "1",
        "attributes": {
            "duties": "dutiesduties",
            "salary": 22,
            "address": "addressaddress",
            "source": "sourcesource",
            "publicationDate": "2019-05-05",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488966525
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
            "self": "127.0.0.1\/recruitInfos\/1"
        }
    }
}*/