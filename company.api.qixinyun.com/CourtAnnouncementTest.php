<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //$response = $client->request('GET', 'courtAnnouncements',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'courtAnnouncements/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'courtAnnouncements?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"courtAnnouncements",
                            "attributes"=>array("hearingDate"=>'2009-05-05',
                                                "cause"=>'cause',
                                                "plaintiff"=>'plaintiff',
                                                "defendant"=>'plaintiff',
                                                "caseNumber"=>'caseNumber',
                                                "contractor"=>'contractor',
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'courtAnnouncements',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"courtAnnouncements",
                            "attributes"=>array("hearingDate"=>'2010-05-05',
                                                "cause"=>'causecausecause',
                                                "plaintiff"=>'regplaintiffistrationAuthority',
                                                "defendant"=>'defendantdefendant',
                                                "caseNumber"=>'caseNumbercontractor',
                                                "contractor"=>'contractordefendant',
                                                "attachments"=>array('courtAnnouncementsachments125','courtAnnouncementsachments235','courtAnnouncementsachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'courtAnnouncements/6',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

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
        "type": "courtAnnouncements",
        "id": "6",
        "attributes": {
            "hearingDate": "2010-05-05",
            "cause": "causecausecause",
            "plaintiff": "regplaintiffistrationAuthority",
            "defendant": "defendantdefendant",
            "caseNumber": "caseNumbercontractor",
            "contractor": "contractordefendant",
            "attachments": [
                "courtAnnouncementsachments125",
                "courtAnnouncementsachments235",
                "courtAnnouncementsachments345"
            ],
            "status": 0,
            "statusTime": 0,
            "updateTime": 1494303983,
            "createTime": 1494303618
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
            "self": "127.0.0.1\/courtAnnouncements\/6"
        }
    }
}*/