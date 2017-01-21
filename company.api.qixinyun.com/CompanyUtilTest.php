<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client();

//$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get  filter[name]  filter[principalRealName] filter[industry]  filter[unifiedSocialCreditCode] filter[registrationNumber]  filter[registrationCapital]
//sort=-id  sort=-name  sort=-principalRealName
// $response = $client->request('GET', 'companies?filter[unifiedSocialCreditCode]=91350100095309691A',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'companies/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'companies?filter[registrationCapital]=20000',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'companies?sort=-status,id,principalRealName',['haders'=>['Content-' => 'application/vnd.api+json']]);

/**
 * 
 * certificate | array 第三方图片地址 三证/一证  address1，address2，address3
 *
 */
//add --start
/*$data = array("data"=>array("type"=>"companies",
                                    "attributes"=>array( "name"=>"qiyemingcheng11288",
                                                         "certificate"=>array('address11','address22','address33'),
                                                         "province"=>2,
                                                         "city"=>52,                                                        
                                                         "region"=>500,
                                                         "uid"=>1,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"xxxxxxxxxx",
                                                         "principalIdentifyCardFrontPhoto"=>"11xxxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"22xxxxxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"33xxxxxxxxxx",
                                                         "principalIdentifyCardValidity"=>"2019-11-11",
                                                         "contactPhone"=>"1234568911",
                                                         "category"=>1,
                                                         "registrationNumber"=>"xxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxxxxxxxxx",
                                                         "organizationCode"=>"xxxxxxxxxx",
                                                         "registrationAuthority"=>"登记机关",
                                                         "approveDate"=>"2016-12-31",
                                                         "englishName"=>"xxxxxxxxxx",
                                                         "registrationCapital"=>20000,
                                                         "scale"=>1,
                                                         "establishedDate"=>"2016-12-31",
                                                         "industry"=>1,
                                                         "issuedDate"=>"2016-12-31",
                                                         "creditUrl"=>"xxxxxxxxxx",
                                                         "email"=>"xxxxxxxxxx",
                                                         "postalCode"=>"710000",
                                                         "businessTermFrom"=>"2016-12-31",
                                                         "businessTermTo"=>"2016-12-31",
                                                         "businessScope"=>"xxxxxxxxxx",
                                                         "businessStatus"=>2,
                                                         "principalCategory"=>1,
                                                         "principalBirthday"=>"2010-10-10",
                                                         "principalBirthdayCategory"=>2,
                                                         "contactName"=>"nijinghello",
                                                         "contactDuties"=>"程序员",
                                                         "detailedAddress"=>"详细地址"
                                                         )
                                       )
                          );
/*$response = $client->request(
                'POST',
                'companies',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add --end

//edit --start
/*$data = array("data"=>array("type"=>"companies",
                                    "attributes"=>array( "name"=>"qiyemingcheng11288",
                                                         "certificate"=>array('address11','address22','address33'),
                                                         "province"=>2,
                                                         "city"=>52,                                                        
                                                         "region"=>500,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"xxxxxxxxxx",
                                                         "principalIdentifyCardFrontPhoto"=>"11xxxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"22xxxxxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"33xxxxxxxxxx",
                                                         "principalIdentifyCardValidity"=>"2019-11-11",
                                                         "contactPhone"=>"1234568911",
                                                         "category"=>1,
                                                         "registrationNumber"=>"xxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxxxxxxxxx",
                                                         "organizationCode"=>"xxxxxxxxxx",
                                                         "registrationAuthority"=>"登记机关",
                                                         "approveDate"=>"2016-12-31",
                                                         "englishName"=>"xxxxxxxxxx",
                                                         "registrationCapital"=>20000,
                                                         "scale"=>1,
                                                         "establishedDate"=>"2016-12-31",
                                                         "industry"=>1,
                                                         "issuedDate"=>"2016-12-31",
                                                         "creditUrl"=>"xxxxxxxxxx",
                                                         "email"=>"xxxxxxxxxx",
                                                         "postalCode"=>"710000",
                                                         "businessTermFrom"=>"2016-12-31",
                                                         "businessTermTo"=>"2016-12-31",
                                                         "businessScope"=>"xxxxxxxxxx",
                                                         "businessStatus"=>2,
                                                         "principalCategory"=>1,
                                                         "principalBirthday"=>"2010-10-10",
                                                         "principalBirthdayCategory"=>2,
                                                         "contactName"=>"nijinghello",
                                                         "contactDuties"=>"程序员",
                                                         "detailedAddress"=>"详细地址"
                                                         )
                                       )
                          );
$response = $client->request(
                'PUT',
                'http://127.0.0.1/companies/201',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit --end


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);


/*
{
    "meta": [],
    "data": {
        "type": "companies",
        "id": "201",
        "attributes": {
            "name": "qiyemingcheng112",
            "category": 1,
            "certificate": [
                "address11",
                "address22",
                "address33"
            ],
            "registrationNumber": "xxxxxxxxxx",
            "unifiedSocialCreditCode": "xxxxxxxxxx",
            "organizationCode": "xxxxxxxxxx",
            "principalRealName": "\u6cd5\u4eba\u540d\u5b57",
            "principalIdentifyCardNumber": "xxxxxxxxxx",
            "principalIdentifyCardFrontPhoto": "11xxxxxxxxxx",
            "principalIdentifyCardBackPhoto": "22xxxxxxxxxx",
            "principalIdentifyCardHandHeldPhoto": "33xxxxxxxxxx",
            "principalIdentifyCardValidity": "2016-12-31",
            "principalCategory": 1,
            "principalBirthday": "2010-10-10",
            "principalBirthdayCategory": 2,
            "province": 2,
            "city": 52,
            "region": 500,
            "businessTermFrom": "2016-12-31",
            "businessTermTo": "2016-12-31",
            "businessScope": "xxxxxxxxxx",
            "businessStatus": 2,
            "registrationAuthority": "\u767b\u8bb0\u673a\u5173",
            "approveDate": "2016-12-31",
            "englishName": "xxxxxxxxxx",
            "registrationCapital": 20000,
            "scale": 1,
            "establishedDate": "2016-12-31",
            "industry": 1,
            "issuedDate": "2016-12-31",
            "creditUrl": "xxxxxxxxxx",
            "contactPhone": "1234568911",
            "email": "xxxxxxxxxx",
            "postalCode": "710000",
            "contactName": "nijinghello",
            "contactDuties": "\u7a0b\u5e8f\u5458",
            "detailedAddress": "\u8be6\u7ec6\u5730\u5740",
            "readCount": 0,
            "searchCount": 0,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1484126823
        },
        "relationships": {
            "users": {
                "data": {
                    "type": "users",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/companies\/201"
        }
    }
}
*/
