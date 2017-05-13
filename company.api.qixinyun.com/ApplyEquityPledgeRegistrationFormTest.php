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
                            "attributes"=>array("registrationNumber"=>'registrationNumber',
                                                "pledgorName"=>'pledgorName',
                                                "pledgorCertificateType"=>1,
                                                "pledgorCertificateNumber"=>'pledgorCertificateNumber',
                                                "pledgedEquityAmount"=>12,
                                                "pledgeeName"=>'pledgeeName',
                                                "pledgeeCertificateType"=>1,
                                                "pledgeeCertificateNumber"=>'pledgeeCertificateNumber',
                                                "pledgedEquityRegistrationDate"=>'2000-01-02',
                                                "variation"=>'variationvariationvariation',
                                                "attachments"=>array('attachments155','attachments255','attachments355'),
                                                "equityPledgeRegistrationStatus"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
/*$data = array("data"=>array("type"=>"applyEquityPledgeRegistrationForms",
                            "attributes"=>array("registrationNumber"=>'11registrationNumber',
                                                "pledgorName"=>'11pledgorName',
                                                "pledgorCertificateType"=>11,
                                                "pledgorCertificateNumber"=>'11pledgorCertificateNumber',
                                                "pledgedEquityAmount"=>112,
                                                "pledgeeName"=>'11pledgeeName',
                                                "pledgeeCertificateType"=>12,
                                                "pledgeeCertificateNumber"=>'11pledgeeCertificateNumber',
                                                "pledgedEquityRegistrationDate"=>'2001-01-02',
                                                "variation"=>'11variationvariationvariation',
                                                "attachments"=>array('EquityPledgeRegistrationattachments155','EquityPledgeRegistrationattachments255','EquityPledgeRegistrationattachments355'),
                                                "equityPledgeRegistrationStatus"=>1,
                                                )
                           )
              );
$response = $client->request(
                'PUT',
                'applyEquityPledgeRegistrationForms/11',
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
        "type": "applyEquityPledgeRegistrationForms",
        "id": "11",
        "attributes": {
            "userIdentification": 1,
            "registrationNumber": "registrationNumber",
            "pledgorName": "pledgorName",
            "pledgorCertificateType": 1,
            "pledgorCertificateNumber": "pledgorCertificateNumber",
            "pledgedEquityAmount": 12,
            "pledgeeName": "pledgeeName",
            "pledgeeCertificateType": 1,
            "pledgeeCertificateNumber": "pledgeeCertificateNumber",
            "pledgedEquityRegistrationDate": "2000-01-02",
            "variation": "variationvariationvariation",
            "equityPledgeRegistrationStatus": 1,
            "attachments": [
                "attachments155",
                "attachments255",
                "attachments355"
            ],
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1492766492
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
            "self": "127.0.0.1\/applyEquityPledgeRegistrationForms\/11"
        }
    }
}*/