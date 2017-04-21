<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[uid]
 //filter[userIdentification]
 //$response = $client->request('GET', 'applyAdministrativePunishmentForms/8,9',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyAdministrativePunishmentForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyAdministrativePunishmentForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyAdministrativePunishmentForms",
                            "attributes"=>array("number"=>'1555555555555',
                                                "category"=>1,
                                                "title"=>'1titletitle',
                                                "council"=>'1councilcouncil',
                                                "date"=>'2019-01-02',
                                                "content"=>'1contentcontent',
                                                "attachments"=>array('1attachments155','a1ttachments255','atta1chments355'),
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyAdministrativePunishmentForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyAdministrativePunishmentForms",
                            "attributes"=>array("number"=>'111112222233333',
                                                "category"=>1,
                                                "title"=>'111titletitle',
                                                "council"=>'111councilcouncil',
                                                "date"=>'2009-02-05',
                                                "content"=>'111contentcontent',
                                                "attachments"=>array('administrativePunishmentattachments125','administrativePunishmentattachments235','administrativePunishmentattachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyAdministrativePunishmentForms/9',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit -- 结束


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();


echo "<pre>";
print_r($status);
print_r($contents);

/*{
    "meta": [],
    "data": {
        "type": "applyAdministrativePunishmentForms",
        "id": "9",
        "attributes": {
            "userIdentification": 1,
            "number": "1555555555555",
            "category": 1,
            "title": "1titletitle",
            "council": "1councilcouncil",
            "date": "2019-01-02",
            "content": "1contentcontent",
            "attachments": [
                "1attachments155",
                "a1ttachments255",
                "atta1chments355"
            ],
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1492762894
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyAdministrativePunishmentForms\/9"
        }
    }
}*/