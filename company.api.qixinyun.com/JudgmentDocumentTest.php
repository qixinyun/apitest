<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //$response = $client->request('GET', 'judgmentDocuments',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'judgmentDocuments/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'judgmentDocuments?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"judgmentDocuments",
                            "attributes"=>array("title"=>'title',
                                                "publishTime"=>'2009-05-05',
                                                "caseNumber"=>'caseNumbercaseNumber',
                                                "court"=>'courtcourt',
                                                "identity"=>1,
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'judgmentDocuments',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"judgmentDocuments",
                            "attributes"=>array("title"=>'1111titletitletitle',
                                                "publishTime"=>'2019-05-05',
                                                "caseNumber"=>'1111caseNumbercaseNumber',
                                                "court"=>'1111courtcourt',
                                                "identity"=>2,
                                                "attachments"=>array('judgmentDocumentsachments125','judgmentDocumentsachments235','judgmentDocumentsachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'judgmentDocuments/1',
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
        "type": "judgmentDocuments",
        "id": "1",
        "attributes": {
            "title": "title",
            "publishTime": "2009-05-05",
            "caseNumber": "caseNumbercaseNumber",
            "court": "courtcourt",
            "identity": 1,
            "attachments": [
                "1attachments155",
                "1attachments255",
                "1attachments355"
            ],
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1494321785
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
            "self": "127.0.0.1\/judgmentDocuments\/1"
        }
    }
}*/