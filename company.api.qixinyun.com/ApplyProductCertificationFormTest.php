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
 $response = $client->request('GET', 'applyProductCertificationForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyProductCertificationForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyProductCertificationForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyProductCertificationForms",
                            "attributes"=>array("name"=>"namenamenamemenamenamename",
                                                "certificationOrganization"=>'certificationOrganization',
                                                "category"=>1,
                                                "certificationDate"=>'2010-10-10',
                                                "validityTo"=>'2022-02-02',
                                                "content"=>'contentcontent',
                                                "productCertificationStatus"=>-2,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyProductCertificationForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyProductCertificationForms",
                            "attributes"=>array("name"=>"123456namename",
                                                "certificationOrganization"=>'q111certificationOrganization',
                                                "category"=>2,
                                                "certificationDate"=>'2020-10-10',
                                                "validityTo"=>'2062-02-02',
                                                "content"=>'111contentcontent',
                                                "productCertificationStatus"=>0,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyProductCertificationForms/1',
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
        "type": "applyProductCertificationForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "namenamenamemenamenamename",
            "certificationOrganization": "certificationOrganization",
            "category": 1,
            "certificationDate": "2010-10-10",
            "validityTo": "2022-02-02",
            "content": "contentcontent",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488440728
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
            "self": "127.0.0.1\/applyProductCertificationForms\/1"
        }
    }
}*/