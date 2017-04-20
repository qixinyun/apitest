<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
$response = $client->request('GET', 'equityPledgeRegistrations',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityPledgeRegistrations/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityPledgeRegistrations?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"equityPledgeRegistrations",
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
                                                "status"=>1,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'equityPledgeRegistrations',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"equityPledgeRegistrations",
                            "attributes"=>array("registrationNumber"=>'211registrationNumber',
                                                "pledgorName"=>'211pledgorName',
                                                "pledgorCertificateType"=>2,
                                                "pledgorCertificateNumber"=>'121pledgorCertificateNumber',
                                                "pledgedEquityAmount"=>121,
                                                "pledgeeName"=>'121pledgeeName',
                                                "pledgeeCertificateType"=>2,
                                                "pledgeeCertificateNumber"=>'121pledgeeCertificateNumber',
                                                "pledgedEquityRegistrationDate"=>'2001-01-02',
                                                "variation"=>'112variationvariationvariation',
                                                "attachments"=>array('equityPledgeRegistrationsattachments155','equityPledgeRegistrationsattachments255','equityPledgeRegistrationsattachments355'),
                                                "status"=>2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'equityPledgeRegistrations/4',
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
        "type": "equityPledgeRegistrations",
        "id": "1",
        "attributes": {
            "registrationNumber": "11registrationNumber",
            "pledgorName": "11pledgorName",
            "pledgorCertificateType": 2,
            "pledgorCertificateNumber": "11pledgorCertificateNumber",
            "pledgedEquityAmount": 121,
            "pledgeeName": "11pledgeeName",
            "pledgeeCertificateType": 2,
            "pledgeeCertificateNumber": "11pledgeeCertificateNumber",
            "pledgedEquityRegistrationDate": "2001-01-02",
            "variation": "11variationvariationvariation",
            "attachment": [
                "equityPledgeRegistrationsattachments155",
                "equityPledgeRegistrationsattachments255",
                "equityPledgeRegistrationsattachments355"
            ],
            "status": 2,
            "statusTime": 1491540401,
            "updateTime": 1491540401,
            "createTime": 1491539548
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
            "self": "127.0.0.1\/equityPledgeRegistrations\/1"
        }
    }
}*/