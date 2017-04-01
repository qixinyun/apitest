<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[name]
 //filter[category]
 //filter[brandInfoStatus]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applySCIForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applySCIForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applySCIForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applySCIForms",
                            "attributes"=>array("name"=>"namenamenamenamenamenamenamenamenamenamenamename",
                                                "registrationNumber"=>'111registrationNumber',
                                                "registrationApproveDate"=>'2019-05-05',
                                                "categoryNumber"=>'1111categoryNumber',
                                                "version"=>'0.4',
                                                "logo"=>'logologol1111ogo',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applySCIForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applySCIForms",
                            "attributes"=>array("name"=>"123456namename",
                                                "registrationNumber"=>'registrationNumber',
                                                "registrationApproveDate"=>'2059-05-05',
                                                "categoryNumber"=>'categoryNumber',
                                                "version"=>'0.5',
                                                "logo"=>'logologologo',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applySCIForms/1',
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
        "type": "applySCIForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "namenamenamenamenamenamenamenamenamenamenamename",
            "registrationNumber": "111registrationNumber",
            "registrationApproveDate": "2019-05-05",
            "categoryNumber": "1111categoryNumber",
            "version": "0.4",
            "logo": "logologol1111ogo",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488363154
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
            "self": "127.0.0.1\/applySCIForms\/1"
        }
    }
}*/