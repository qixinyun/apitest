<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'courtBulletins',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'courtBulletins/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'courtBulletins?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"courtBulletins",
                            "attributes"=>array("content"=>'content',
                                                "publicityTime"=>'2009-05-05',
                                                "court"=>'courtcourt',
                                                "category"=>1,
                                                "person"=>'namename',
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'courtBulletins',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"courtBulletins",
                            "attributes"=>array("content"=>'1111contentcontentcontent',
                                                "publicityTime"=>'2019-05-05',
                                                "court"=>'1111courtcourt',
                                                "category"=>2,
                                                "person"=>'namename',
                                                "attachments"=>array('courtBulletinsachments125','courtBulletinsachments235','courtBulletinsachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'courtBulletins/1',
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
        "type": "courtBulletins",
        "id": "1",
        "attributes": {
            "content": "content",
            "publicityTime": "2009-05-05",
            "court": "courtcourt",
            "category": 1,
            "person": "namename",
            "attachments": [
                "1attachments155",
                "1attachments255",
                "1attachments355"
            ],
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1494384720
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
            "self": "127.0.0.1\/courtBulletins\/1"
        }
    }
}*/