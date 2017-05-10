<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'executorInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'executorInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'executorInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"executorInfos",
                            "attributes"=>array("caseNumber"=>'caseNumber',
                                                "filingTime"=>'2009-05-05',
                                                "court"=>'courtcourt',
                                                "subject"=>1,
                                                "status"=>2,
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'executorInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"executorInfos",
                            "attributes"=>array("caseNumber"=>'111caseNumbercaseNumber',
                                                "filingTime"=>'2019-05-05',
                                                "court"=>'1111courtcourt',
                                                "subject"=>2,
                                                "status"=>4,
                                                "attachments"=>array('executorInfosachments125','executorInfosachments235','executorInfosachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'executorInfos/1',
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
        "type": "executorInfos",
        "id": "1",
        "attributes": {
            "caseNumber": "caseNumber",
            "filingTime": "2009-05-05",
            "court": "courtcourt",
            "subject": 1,
            "attachments": [
                "1attachments155",
                "1attachments255",
                "1attachments355"
            ],
            "status": 2,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1494401416
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
            "self": "127.0.0.1\/executorInfos\/1"
        }
    }
}*/