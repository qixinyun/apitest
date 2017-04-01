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
 //filter[company]
// $response = $client->request('GET', 'productCertifications',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'productCertifications/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'productCertifications?filter[name]=name&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"productCertifications",
                            "attributes"=>array("name"=>"namenamename",
                                                "certificationOrganization"=>'certificationOrganization',
                                                "category"=>1,
                                                "certificationDate"=>'2010-10-10',
                                                "validityTo"=>'2022-02-02',
                                                "content"=>'contentcontent',
                                                "status"=>0,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'productCertifications',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"productCertifications",
                            "attributes"=>array("name"=>"111namenamename",
                                                "certificationOrganization"=>'111certificationOrganization',
                                                "category"=>2,
                                                "certificationDate"=>'2012-10-10',
                                                "validityTo"=>'2045-02-02',
                                                "content"=>'111contentcontent',
                                                "status"=>-2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'productCertifications/1',
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
        "type": "productCertifications",
        "id": "1",
        "attributes": {
            "name": "namenamename",
            "certificationOrganization": "certificationOrganization",
            "category": 1,
            "certificationDate": "2010-10-10",
            "validityTo": "2022-02-02",
            "content": "contentcontent",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488435825
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
            "self": "127.0.0.1\/productCertifications\/1"
        }
    }
}*/