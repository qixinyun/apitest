<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 $response = $client->request('GET', 'administrativeLicensings',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'administrativeLicensings/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'administrativeLicensings?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"administrativeLicensings",
                            "attributes"=>array("number"=>'555555555555',
                                                "title"=>'titletitletitle',
                                                "validityFrom"=>'2009-05-05',
                                                "validityTo"=>'2029-05-05',
                                                "content"=>'contentcontentcontent',
                                                "council"=>'councilcouncilcouncilcouncil',
                                                "detail"=>'detaildetaildetaildetail',
                                                "category"=>1,
                                                "attachments"=>array('attachments155','attachments255','attachments355'),
                                                "status"=>1,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'administrativeLicensings',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"administrativeLicensings",
                            "attributes"=>array("number"=>'111112222233333',
                                                "title"=>'titletitletitle1',
                                                "validityFrom"=>'2019-05-05',
                                                "validityTo"=>'2039-05-05',
                                                "content"=>'11contentcontentcontent',
                                                "council"=>'11councilcouncilcouncilcouncil',
                                                "detail"=>'11detaildetaildetaildetail',
                                                "category"=>2,
                                                "attachments"=>array('attachments125','attachments235','attachments345'),
                                                "status"=>2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'administrativeLicensings/1',
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
        "type": "administrativeLicensings",
        "id": "1",
        "attributes": {
            "number": "555555555555",
            "title": "titletitletitle",
            "validityFrom": "2009-05-05",
            "validityTo": "2029-05-05",
            "content": "contentcontentcontent",
            "council": "councilcouncilcouncilcouncil",
            "detail": "detaildetaildetaildetail",
            "category": 1,
            "attachment": [
                "attachments155",
                "attachments255",
                "attachments355"
            ],
            "status": 1,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1491900776
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
            "self": "127.0.0.1\/administrativeLicensings\/1"
        }
    }
}*/