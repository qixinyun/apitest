<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //$response = $client->request('GET', 'chattelMortgageRegistrations',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'chattelMortgageRegistrations/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'chattelMortgageRegistrations?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"chattelMortgageRegistrations",
                            "attributes"=>array("registrationNumber"=>'555555555555',
                                                "registrationDate"=>'2009-05-05',
                                                "registrationAuthority"=>'registrationAuthority',
                                                "securedBond"=>123,
                                                "content"=>'contentcontentcontent',
                                                "attachments"=>array('attachments155','attachments255','attachments355'),
                                                "status"=>1,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'chattelMortgageRegistrations',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"chattelMortgageRegistrations",
                            "attributes"=>array("registrationNumber"=>'111112222233333',
                                                "registrationDate"=>'2019-05-05',
                                                "registrationAuthority"=>'registrationAuthority',
                                                "securedBond"=>1234,
                                                "content"=>'11contentcontentcontent',
                                                "attachments"=>array('chattelMortgageRegistrationattachments125','chattelMortgageRegistrationattachments235','chattelMortgageRegistrationattachments345'),
                                                "status"=>2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'chattelMortgageRegistrations/1',
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
        "type": "chattelMortgageRegistrations",
        "id": "1",
        "attributes": {
            "registrationNumber": "555555555555",
            "registrationDate": "2009-05-05",
            "registrationAuthority": "registrationAuthority",
            "securedBond": 123,
            "content": "contentcontentcontent",
            "attachment": [
                "attachments155",
                "attachments255",
                "attachments355"
            ],
            "status": 1,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1491901529
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
            "self": "127.0.0.1\/chattelMortgageRegistrations\/1"
        }
    }
}*/