<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'dishonestExecutors/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'dishonestExecutors/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'dishonestExecutors?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"dishonestExecutors",
                            "attributes"=>array("caseNumber"=>'caseNumber',
                                                "accordingNumber"=>'accordingNumber',
                                                "court"=>'courtcourt',
                                                "filingTime"=>'2009-05-05',
                                                "publishTime"=>'2009-05-05',
                                                "performance"=>'performance',
                                                "obligation"=>'obligation',
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'dishonestExecutors',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"dishonestExecutors",
                            "attributes"=>array("caseNumber"=>'caseNumbercaseNumber',
                                                "accordingNumber"=>'accordingNumberaccordingNumber',
                                                "court"=>'courtcourt',
                                                "filingTime"=>'2019-05-05',
                                                "publishTime"=>'2019-05-05',
                                                "performance"=>'performanceperformance',
                                                "obligation"=>'obligationobligation',
                                                "attachments"=>array('dishonestExecutorsachments125','dishonestExecutorsachments235','dishonestExecutorsachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'dishonestExecutors/1',
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
        "type": "dishonestExecutors",
        "id": "2",
        "attributes": {
            "caseNumber": "caseNumber",
            "accordingNumber": "accordingNumber",
            "court": "courtcourt",
            "filingTime": "2009-05-05",
            "publishTime": "2009-05-05",
            "performance": "performance",
            "obligation": "obligation",
            "attachments": [
                "1attachments155",
                "1attachments255",
                "1attachments355"
            ],
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1494906855
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
            "self": "127.0.0.1\/dishonestExecutors\/2"
        }
    }
}*/