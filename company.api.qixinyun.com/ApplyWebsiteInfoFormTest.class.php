<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applyWebsiteInfoForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyWebsiteInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyWebsiteInfoForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyWebsiteInfoForms",
                            "attributes"=>array("name"=>"11111namee222",
                                                "domain"=>'domain222',
                                                "url"=>'1111urlurlurl222',
                                                "filingLicense"=>'111filingLicense222',
                                                "verifyTime"=>'2027-05-05',
                                                "companyId"=>1,
                                                "uid"=>392,
                                                "userIdentification"=>2,
                                               // "websiteInfoId"=>1,
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyWebsiteInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyWebsiteInfoForms",
                            "attributes"=>array("name"=>"wwwwwwwwwww123456namename",
                                                "domain"=>'domain222',
                                                "url"=>'wwwwwwwwwwwwwurlurlurl11',
                                                "filingLicense"=>'1wwwwwwwwwwwwwwww1filingLicense',
                                                "verifyTime"=>'2009-05-05',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyWebsiteInfoForms/147',
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
        "type": "applyWebsiteInfoForms",
        "id": "147",
        "attributes": {
            "userIdentification": 2,
            "name": "11111namee222",
            "domain": "domain222",
            "url": "1111urlurlurl222",
            "filingLicense": "111filingLicense222",
            "verifyTime": "2027-05-05",
            "company": 1,
            "websiteInfoId": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1495851946
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "skynetcreditUsers",
                    "id": "392"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyWebsiteInfoForms\/147"
        }
    }
}*/