<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

//$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get  filter[name]  filter[principalRealName] 
//sort=-id  sort=-name  sort=-principalRealName
 $response = $client->request('GET', 'applyCompanyForms?sort=-principalRealName',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCompanyForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCompanyForms?filter[name]=555&filter[principalRealName]=ni',['haders'=>['Content-' => 'application/vnd.api+json']]);


//add --start
/*$data = array("data"=>array("type"=>"applyCompanyForms",
                                    "attributes"=>array( "name"=>"xian555",
                                                         "registrationNumber"=>"xxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxxxxxxxxx",
                                                         "certificate"=>array('certificate11','certificate22','certificate33'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "uid"=>1,
                                                         "principalRealName"=>"nijing",
                                                         "principalIdentifyCardNumber"=>"123456798962",
                                                         "principalIdentifyCardFrontPhoto"=>"11xxxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"22xxxxxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"33xxxxxxxxxx",
                                                         "principalBirthday"=>"2010-10-10",
                                                         "principalBirthdayCategory"=>2,
                                                         "contactName"=>"nijinghello",
                                                         "contactDuties"=>"程序员",
                                                         "contactPhone"=>"18840287763"
                                                         )
                                       )
                          );
$response = $client->request(
                'POST',
                'applyCompanyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add --end

//edit --start
/*$data = array("data"=>array("type"=>"applyCompanyForms",
                                    "attributes"=>array( "name"=>"企业名称555",
                                                         "registrationNumber"=>"xxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxxxxxxxxx",
                                                         "certificate"=>array('certificate1','certificate2','certificate3'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "uid"=>1,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"123456798962",
                                                         "principalIdentifyCardFrontPhoto"=>"1xxxxxxxxxx",
                                                         "principalIdentifyCardBackPhoto"=>"2xxxxxxxxxx",
                                                         "principalIdentifyCardHandHeldPhoto"=>"3xxxxxxxxxx",
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
                'applyCompanyForms/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit --end

//confirm --start
/*$response = $client->request(
                'PUT',
                'applyCompanyForms/4/confirm',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );*/
//confirm -end

//decline  --start
/*$data = array("data"=>array("type"=>"replyApplyCompanyForms",
                                "attributes"=>array( "reasonCategory"=>1,
                                                     "comment"=>'nononononn'
                                                     )
                                       )
                          );

$response = $client->request(
                'PUT',
                'applyCompanyForms/6/decline',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//decline --end

//get replyApplyCompanyForm --start
/*$response = $client->request(
                'GET',
                'replyApplyCompanyForms?filter[applyCompanyFormId]=4',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );*/
//get replyApplyCompanyForm --end

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

/*
{
    "meta": [],
    "data": {
        "type": "applyCompanyForms",
        "id": "1",
        "attributes": {
            "name": "\u4f01\u4e1a\u540d\u79f0555",
            "registrationNumber": "xxxxxxxxxx",
            "unifiedSocialCreditCode": "xxxxxxxxxx",
            "certificate": "certificate1,certificate2,certificate3",
            "province": 20,
            "city": 30,
            "region": 40,
            "contactPhone": "18840287763",
            "contactName": "nijinghello",
            "contactDuties": "\u7a0b\u5e8f\u5458",
            "principalRealName": "\u6cd5\u4eba\u540d\u5b57",
            "principalIdentifyCardNumber": "123456798962",
            "principalIdentifyCardFrontPhoto": "1xxxxxxxxxx",
            "principalIdentifyCardBackPhoto": "2xxxxxxxxxx",
            "principalIdentifyCardHandHeldPhoto": "3xxxxxxxxxx",
            "principalBirthday": "2010-10-10",
            "principalBirthdayCategory": 2,
            "status": 0,
            "updateTime": 1484033686,
            "createTime": 1484033191,
            "statusTime": 1484033686
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
                    "id": "0"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyCompanyForms\/1"
        }
    }
}
*/

