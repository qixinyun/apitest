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
 $response = $client->request('GET', 'applyChattelMortgageRegistrationForms/130,135,133?include=companies&fields[companies]=name,principalRealName',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyChattelMortgageRegistrationForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyChattelMortgageRegistrationForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyChattelMortgageRegistrationForms",
                            "attributes"=>array("registrationNumber"=>'555555555555',
                                                "registrationDate"=>'2009-05-05',
                                                "registrationAuthority"=>'555555555555registrationAuthority',
                                                "securedBond"=>123,
                                                "content"=>'555555555555contentcontentcontent',
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "chattelMortgageRegistrationStatus"=>1,
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                               // "chattelMortgageRegistrationId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyChattelMortgageRegistrationForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyChattelMortgageRegistrationForms",
                            "attributes"=>array("registrationNumber"=>'55555555555',
                                                "registrationDate"=>'2019-01-05',
                                                "registrationAuthority"=>'11111registrationAuthority',
                                                "securedBond"=>1123,
                                                "content"=>'11111contentcontentcontent',
                                                "attachments"=>array('11111attachments155','111111attachments255','11111attachments355'),
                                                "chattelMortgageRegistrationStatus"=>2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyChattelMortgageRegistrationForms/136',
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
        "type": "applyChattelMortgageRegistrationForms",
        "id": "136",
        "attributes": {
            "userIdentification": 1,
            "registrationNumber": "55555555555",
            "registrationDate": "2019-01-05",
            "registrationAuthority": "11111registrationAuthority",
            "securedBond": 1123,
            "content": "11111contentcontentcontent",
            "chattelMortgageRegistrationStatus": 2,
            "attachments": [
                "11111attachments155",
                "111111attachments255",
                "11111attachments355"
            ],
            "company": 1,
            "chattelMortgageRegistrationId": 1,
            "status": 0,
            "statusTime": 1495787127,
            "updateTime": 1495787127,
            "createTime": 1495787038
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
            "self": "127.0.0.1\/applyChattelMortgageRegistrationForms\/136"
        }
    }
}*/