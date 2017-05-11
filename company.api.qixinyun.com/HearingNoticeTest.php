<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 $response = $client->request('GET', 'hearingNotices',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'hearingNotices/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'hearingNotices?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"hearingNotices",
                            "attributes"=>array("title"=>'title',
                                                "announcementDate"=>'2009-05-05',
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'hearingNotices',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"hearingNotices",
                            "attributes"=>array("title"=>'111titletitle',
                                                "announcementDate"=>'2019-05-05',
                                                "attachments"=>array('hearingNoticesachments125','hearingNoticesachments235','hearingNoticesachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'hearingNotices/1',
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
        "type": "hearingNotices",
        "id": "1",
        "attributes": {
            "title": "111titletitle",
            "announcementDate": "2019-05-05",
            "attachments": [
                "hearingNoticesachments125",
                "hearingNoticesachments235",
                "hearingNoticesachments345"
            ],
            "status": 0,
            "statusTime": 0,
            "updateTime": 1494474596,
            "createTime": 1494474463
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
            "self": "127.0.0.1\/hearingNotices\/1"
        }
    }
}*/