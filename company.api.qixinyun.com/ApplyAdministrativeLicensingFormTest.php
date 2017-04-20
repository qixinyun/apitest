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
 //$response = $client->request('GET', 'applyAdministrativeLicensingForms/8,9',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyAdministrativeLicensingForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyAdministrativeLicensingForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"applyAdministrativeLicensingForms",
                            "attributes"=>array("number"=>'331112222233333',
                                                "title"=>'33titletitletitle1',
                                                "validityFrom"=>'2019-05-05',
                                                "validityTo"=>'2039-05-05',
                                                "content"=>'3311contentcontentcontent',
                                                "council"=>'3311councilcouncilcouncilcouncil',
                                                "detail"=>'1331detaildetaildetaildetail',
                                                "category"=>2,
                                                "attachments"=>array('atta33chments125','attach33ments235','a33ttachments345'),
                                                "administrativeLicensingStatus"=>-2,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
                            "attributes"=>array("number"=>'331112222233333',
                                                "title"=>'33titletitletitle1',
                                                "validityFrom"=>'2019-05-05',
                                                "validityTo"=>'2039-05-05',
                                                "content"=>'3311contentcontentcontent',
                                                "council"=>'3311councilcouncilcouncilcouncil',
                                                "detail"=>'1331detaildetaildetaildetail',
                                                "category"=>2,
                                                "attachments"=>array('atta33chments125','attach33ments235','a33ttachments345'),
                                                "administrativeLicensingStatus"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyAdministrativeLicensingForms/12',
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
        "type": "applyAdministrativeLicensingForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "namenamenamenamenamenamenamenamenamenamenamename",
            "category": 2,
            "fillingTime": "2059-05-05",
            "logo": "logologologo",
            "brandInfoStatus": -2,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487837051
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
            "self": "127.0.0.1\/applyAdministrativeLicensingForms\/1"
        }
    }
}*/