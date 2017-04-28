<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

//$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get  filter[name]  filter[principalRealName] 
//sort=-id  sort=-name  sort=-principalRealName
//$response = $client->request('GET', 'claimCompanyForms?filter[company]=1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'claimCompanyForms?filter[uid]=128',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'claimCompanyForms?filter[name]=h&filter[principalRealName]=法',['haders'=>['Content-' => 'application/vnd.api+json']]);


//add --start
$data = array("data"=>array("type"=>"claimCompanyForms",
                                    "attributes"=>array( "name"=>"ffffffff企业hello555",
                                                         "registrationNumber"=>"ffffffffxxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"ffffffffxxxxxxxxxx",
                                                         "certificate"=>array('ffffffffcertificate11','ffffffffcertificate22','ffffffffcertificate33'),
                                                         "province"=>2,
                                                         "city"=>52,
                                                         "region"=>500,
                                                         "uid"=>1,
                                                         "principalRealName"=>"ffffffff",
                                                         "principalIdentifyCardNumber"=>"fffffff123456798962",
                                                         "principalIdentifyCardFrontPhoto"=>"fffffff11xxxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"2fffffff2xxxxxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"fffffff33xxxxxxxxxx",
                                                         "principalIdentifyCardValidity"=>"2029-11-11",
                                                         "principalBirthday"=>"2020-10-10",
                                                         "principalBirthdayCategory"=>2,
                                                         "contactName"=>"fffffffijinghello",
                                                         "contactDuties"=>"fffffff程序员",
                                                         "contactPhone"=>"17840287763",
                                                         "companyId"=>1
                                                         )
                                       )
                          );
$response = $client->request(
                'POST',
                'claimCompanyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -end

//edit --start
/*$data = array("data"=>array("type"=>"claimCompanyForms",
                                    "attributes"=>array( "name"=>"helloworld",
                                                         "registrationNumber"=>"xxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxxxxxxxxx",
                                                         "certificate"=>array('certificate11','certificate22','certificate33'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"123456798962",
                                                         "principalIdentifyCardFrontPhoto"=>"11xxxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"22xxxxxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"33xxxxxxxxxx",
                                                         "principalIdentifyCardValidity"=>"2019-11-11",
                                                         "principalBirthday"=>"2010-10-10",
                                                         "principalBirthdayCategory"=>2,
                                                         "contactName"=>"nijinghello",
                                                         "contactDuties"=>"程序员",
                                                         "contactPhone"=>"18840287763"
                                                         )
                                       )
                          );
$response = $client->request(
                'PUT',
                'claimCompanyForms/43',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit --end
/*$response = $client->request(
                'PUT',
                'claimCompanyForms/57/approve',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

/*
{
    "meta": [],
    "data": {
        "type": "claimCompanyForms",
        "id": "2",
        "attributes": {
            "name": "\u4f01\u4e1ahello555",
            "registrationNumber": "xxxxxxxxxx",
            "unifiedSocialCreditCode": "xxxxxxxxxx",
            "certificate": "certificate11,certificate22,certificate33",
            "principalRealName": "hhhh",
            "principalIdentifyCardNumber": "123456798962",
            "principalIdentifyCardFrontPhoto": "11xxxxxxxxxx",
            "principalIdentifyCardBackPhoto": "22xxxxxxxxxx",
            "principalIdentifyCardHandHeldPhoto": "33xxxxxxxxxx",
            "principalIdentifyCardValidity": "2019-11-11",
            "principalBirthday": "2010-10-10",
            "principalBirthdayCategory": 2,
            "contactPhone": "18840287763",
            "contactName": "nijinghello",
            "contactDuties": "\u7a0b\u5e8f\u5458",
            "province": 20,
            "city": 30,
            "region": 40,
            "status": 0,
            "updateTime": 0,
            "createTime": 1484130811,
            "statusTime": 0
        },
        "relationships": {
            "users": {
                "data": {
                    "type": "users",
                    "id": "1"
                }
            },
            "companies": {
                "data": {
                    "type": "companies",
                    "id": "201"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/claimCompanyForms\/2"
        }
    }
}
*/