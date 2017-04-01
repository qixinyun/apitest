<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //filter[userIdentification]
// filter[uid]
// $response = $client->request('GET', 'applyCertificateInfoForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCertificateInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'applyCertificateInfoForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyCertificateInfoForms",
                            "attributes"=>array("name"=>'hellohello1111',
                                                "issueDate"=>'2009-05-05',
                                                "expirationDate"=>'2021-09-06',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyCertificateInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"applyCertificateInfoForms",
//                             "attributes"=>array("name"=>'hellohello',
//                                                 "issueDate"=>'2019-05-05',
//                                                 "expirationDate"=>'2031-09-06',
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'applyCertificateInfoForms/1',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );



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
        "type": "applyCertificateInfoForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "hellohello222",
            "issueDate": "2009-05-05",
            "expirationDate": "2021-09-06",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488171166
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
            "self": "127.0.0.1\/applyCertificateInfoForms\/1"
        }
    }
}*/