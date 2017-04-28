<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

//$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get  filter[name]  filter[principalRealName] 
//sort=-id  sort=-name  sort=-principalRealName
//$response = $client->request('GET', 'prefectedCompanyForms?filter[company]=1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'prefectedCompanyForms?filter[uid]=128',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'prefectedCompanyForms?filter[name]=h&filter[principalRealName]=法',['haders'=>['Content-' => 'application/vnd.api+json']]);


//add --start
/*$data = array("data"=>array("type"=>"prefectedCompanyForms",
                                    "attributes"=>array( "name"=>"dwwwwqiyemingcheng11288",
                                                         "certificate"=>array('wwweeeeress11','address22','address33'),
                                                         "province"=>2,
                                                         "city"=>52,                                                        
                                                         "region"=>500,
                                                         "uid"=>1,
                                                         "principalRealName"=>"dd法人名字",
                                                         "principalIdentifyCardNumber"=>"xewwwexxxxxxxxx",
                                                         "principalIdentifyCardFrontPhoto"=>"11xxwwxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"22xxxewwwexxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"33xxewwwexxxxxxxx",
                                                         "principalIdentifyCardValidity"=>"2019-11-11",
                                                         "contactPhone"=>"1234568911",
                                                         "category"=>1,
                                                         "registrationNumber"=>"xxwwwexxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"ewweeeeeee",
                                                         "organizationCode"=>"xxxxeeeexxxxxx",
                                                         "registrationAuthority"=>"登ewwe记机关",
                                                         "approveDate"=>"2016-12-31",
                                                         "englishName"=>"xxxxxeeeexxxxx",
                                                         "registrationCapital"=>'20000',
                                                         "scale"=>1,
                                                         "establishedDate"=>"2016-12-31",
                                                         "industry"=>1,
                                                         "issuedDate"=>"2016-12-31",
                                                         "creditUrl"=>"xxxxwweexxxxxx",
                                                         "email"=>"xxxxxxxddxxx",
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
                                                         "detailedAddress"=>"详细地址",
                                                         "businessPlace"=>"营业场所",
                                                         "residence"=>"住所",
                                                         "companyId"=>1
                                                         )
                                       )
                          );
$response = $client->request(
                'POST',
                'prefectedCompanyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -end

//edit --start
/*$data = array("data"=>array("type"=>"prefectedCompanyForms",
                                    "attributes"=>array( "name"=>"qqqqiyemingcheng11288",
                                                         "certificate"=>array('qqaddress11','aqqddress22','adqqdress33'),
                                                         "province"=>2,
                                                         "city"=>52,                                                        
                                                         "region"=>500,
                                                         "principalRealName"=>"法人qq名字",
                                                         "principalIdentifyCardNumber"=>"qqxxxxxxxxxx",
                                                         "principalIdentifyCardFrontPhoto"=>"1qq1xxxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"2qq2xxxxxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"3qq3xxxxxxxxxx",
                                                         "principalIdentifyCardValidity"=>"2019-11-11",
                                                         "contactPhone"=>"1234568911",
                                                         "category"=>1,
                                                         "registrationNumber"=>"xxxqqxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxqqxxxxxxxx",
                                                         "organizationCode"=>"xxxqqxxxxxxx",
                                                         "registrationAuthority"=>"登qq记机关",
                                                         "approveDate"=>"2016-12-31",
                                                         "englishName"=>"xxxxqqxxxxxx",
                                                         "registrationCapital"=>'220000',
                                                         "scale"=>1,
                                                         "establishedDate"=>"2016-12-31",
                                                         "industry"=>1,
                                                         "issuedDate"=>"2016-12-31",
                                                         "creditUrl"=>"xxxqqxxxxxxx",
                                                         "email"=>"xxxxxxqqxxxx",
                                                         "postalCode"=>"712000",
                                                         "businessTermFrom"=>"2016-12-31",
                                                         "businessTermTo"=>"2016-12-31",
                                                         "businessScope"=>"xxqqxxxxxxxx",
                                                         "businessStatus"=>2,
                                                         "principalCategory"=>1,
                                                         "principalBirthday"=>"2010-10-10",
                                                         "principalBirthdayCategory"=>2,
                                                         "contactName"=>"nijiqqnghello",
                                                         "contactDuties"=>"程qq序员",
                                                         "detailedAddress"=>"详qq细地址",
                                                         "businessPlace"=>"营业qq场所",
                                                         "residence"=>"住qq所"
                                                         )
                                       )
                          );
$response = $client->request(
                'PUT',
                'prefectedCompanyForms/49',
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
        "type": "prefectedCompanyForms",
        "id": "49",
        "attributes": {
            "name": "qqqqiyemingcheng11288",
            "category": 1,
            "certificate": [
                "qqaddress11",
                "aqqddress22",
                "adqqdress33"
            ],
            "registrationNumber": "xxxqqxxxxxxx",
            "unifiedSocialCreditCode": "xxqqxxxxxxxx",
            "organizationCode": "xxxqqxxxxxxx",
            "province": 2,
            "city": 52,
            "region": 500,
            "businessTermFrom": "2016-12-31",
            "businessTermTo": "2016-12-31",
            "businessScope": "xxqqxxxxxxxx",
            "businessStatus": 2,
            "principalRealName": "\u6cd5\u4ebaqq\u540d\u5b57",
            "principalIdentifyCardNumber": "qqxxxxxxxxxx",
            "principalIdentifyCardFrontPhoto": "1qq1xxxxxxxxxx",
            "principalIdentifyCardBackPhoto": "2qq2xxxxxxxxxx",
            "principalIdentifyCardHandHeldPhoto": "3qq3xxxxxxxxxx",
            "principalIdentifyCardValidity": "2019-11-11",
            "principalCategory": 1,
            "principalBirthday": "2010-10-10",
            "principalBirthdayCategory": 2,
            "registrationAuthority": "\u767bqq\u8bb0\u673a\u5173",
            "approveDate": "2016-12-31",
            "englishName": "xxxxqqxxxxxx",
            "registrationCapital": "220000",
            "scale": 1,
            "establishedDate": "2016-12-31",
            "industry": 1,
            "issuedDate": "2016-12-31",
            "creditUrl": "xxxqqxxxxxxx",
            "detailedAddress": "\u8be6qq\u7ec6\u5730\u5740",
            "residence": "\u4f4fqq\u6240",
            "businessPlace": "\u8425\u4e1aqq\u573a\u6240",
            "contactPhone": "1234568911",
            "email": "xxxxxxqqxxxx",
            "postalCode": "712000",
            "contactName": "nijiqqnghello",
            "contactDuties": "\u7a0bqq\u5e8f\u5458",
            "status": 0,
            "updateTime": 1493213252,
            "createTime": 1493211231,
            "statusTime": 1493213252
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
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/prefectedCompanyForms\/49"
        }
    }
}
*/