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
 //$response = $client->request('GET', 'applyEquityPledgeRegistrationForms/8,9',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyEquityPledgeRegistrationForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyEquityPledgeRegistrationForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyEquityPledgeRegistrationForms",
                            "attributes"=>array("registrationNumber"=>'2222istrationNumber',
                                                "pledgorName"=>'2222pledgorName',
                                                "pledgorCertificateType"=>1,
                                                "pledgorCertificateNumber"=>'2222pledgorCertificateNumber',
                                                "pledgedEquityAmount"=>12,
                                                "pledgeeName"=>'pledgeeName',
                                                "pledgeeCertificateType"=>1,
                                                "pledgeeCertificateNumber"=>'22pledgeeCertificateNumber',
                                                "pledgedEquityRegistrationDate"=>'2000-01-02',
                                                "variation"=>'variationvariationvariation',
                                                "attachments"=>array('attachments155','attachments255','attachments355'),
                                                "equityPledgeRegistrationStatus"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1,
                                                //"equityPledgeRegistrationId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyEquityPledgeRegistrationForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyEquityPledgeRegistrationForms",
                            "attributes"=>array("registrationNumber"=>'1222221registrationNumber',
                                                "pledgorName"=>'33311pledgorName',
                                                "pledgorCertificateType"=>11,
                                                "pledgorCertificateNumber"=>'333311pledgorCertificateNumber',
                                                "pledgedEquityAmount"=>112,
                                                "pledgeeName"=>'11pledgeeName',
                                                "pledgeeCertificateType"=>12,
                                                "pledgeeCertificateNumber"=>'1331pledgeeCertificateNumber',
                                                "pledgedEquityRegistrationDate"=>'2001-01-02',
                                                "variation"=>'11variationvariationvariation',
                                                "attachments"=>array('EquityPledgeRegistrationattachments155','EquityPledgeRegistrationattachments255','EquityPledgeRegistrationattachments355'),
                                                "equityPledgeRegistrationStatus"=>1,
                                                )
                           )
              );
$response = $client->request(
                'PUT',
                'applyEquityPledgeRegistrationForms/91',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
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
        "type": "applyEquityPledgeRegistrationForms",
        "id": "91",
        "attributes": {
            "userIdentification": 1,
            "registrationNumber": "1222221registrationNumber",
            "pledgorName": "33311pledgorName",
            "pledgorCertificateType": 11,
            "pledgorCertificateNumber": "333311pledgorCertificateNumber",
            "pledgedEquityAmount": 112,
            "pledgeeName": "11pledgeeName",
            "pledgeeCertificateType": 12,
            "pledgeeCertificateNumber": "1331pledgeeCertificateNumber",
            "pledgedEquityRegistrationDate": "2001-01-02",
            "variation": "11variationvariationvariation",
            "equityPledgeRegistrationStatus": 1,
            "attachments": [
                "EquityPledgeRegistrationattachments155",
                "EquityPledgeRegistrationattachments255",
                "EquityPledgeRegistrationattachments355"
            ],
            "company": 1,
            "equityPledgeRegistrationId": 1,
            "status": 0,
            "statusTime": 1495595908,
            "updateTime": 1495595908,
            "createTime": 1495595730
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyEquityPledgeRegistrationForms\/91"
        }
    }
}*/