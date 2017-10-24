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
// $response = $client->request('GET', 'applyAdministrativeLicensingForms?include=companies&fields[companies]=name,principalRealName,category,certificate,registration_number',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyAdministrativeLicensingForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyAdministrativeLicensingForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"applyAdministrativeLicensingForms",
                            "attributes"=>array("number"=>'331112222233333',
                                                "title"=>'33titletitletitle1',
                                                "validityFrom"=>'2019-05-05',
                                                "validityTo"=>'2039-05-05',
                                                "content"=>'222ontentcontentcontent',
                                                "council"=>'3222councilcouncilcouncilcouncil',
                                                "detail"=>'1322221detaildetaildetaildetail',
                                                "category"=>2,
                                                "attachments"=>array('atta33chments125','attach33ments235','a33ttachments345'),
                                                "administrativeLicensingStatus"=>-2,
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                "administrativeLicensingId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyAdministrativeLicensingForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyAdministrativeLicensingForms",
                            "attributes"=>array("number"=>'1232434322412',
                                                "title"=>'313titletitletitle1',
                                                "validityFrom"=>'2029-05-05',
                                                "validityTo"=>'2049-05-05',
                                                "content"=>'13311contentcontentcontent',
                                                "council"=>'31311councilcouncilcouncilcouncil',
                                                "detail"=>'11331detaildetaildetaildetail',
                                                "category"=>2,
                                                "attachments"=>array('a1tta33chments125','a1ttach33ments235','a33tt1achments345'),
                                                "administrativeLicensingStatus"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyAdministrativeLicensingForms/142',
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
        "type": "applyAdministrativeLicensingForms",
        "id": "142",
        "attributes": {
            "userIdentification": 1,
            "number": "1232434322412",
            "title": "313titletitletitle1",
            "validityFrom": "2029-05-05",
            "validityTo": "2049-05-05",
            "content": "13311contentcontentcontent",
            "council": "31311councilcouncilcouncilcouncil",
            "detail": "11331detaildetaildetaildetail",
            "category": 2,
            "administrativeLicensingStatus": 2,
            "attachments": [
                "a1tta33chments125",
                "a1ttach33ments235",
                "a33tt1achments345"
            ],
            "company": 1,
            "administrativeLicensingId": 1,
            "status": 0,
            "statusTime": 1495793439,
            "updateTime": 1495793439,
            "createTime": 1495793362
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "152"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyAdministrativeLicensingForms\/142"
        }
    }
}*/