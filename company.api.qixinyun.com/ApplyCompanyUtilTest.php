<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// 所有的申请表单都一样,过滤用户申请表单时，必须加上 userIdentification 过滤条件，表明用户属于OA用户还是非OA用户 
// filter[uid]  用户id
// filter[userIdentification]  用户标识
/**
 * userIdentification = 1 OA用户
 */
/**
 * userIdentification = 2 非OA用户
 */

// filter[company] 企业
// filter[status] 审核状态
    // 2 审核通过
    // 0  待审核
    // -2   审核不通过

//获取申请表基本信息接口
$response = $client->request('GET', 'applyForms/61',['haders'=>['Content-' => 'application/vnd.api+json']]);
$response = $client->request('GET', 'applyForms/61,60',['haders'=>['Content-' => 'application/vnd.api+json']]);
$response = $client->request('GET', 'applyForms?filter[uid]=1&filter[userIdentification]=2&filter[category]=45',['haders'=>['Content-' => 'application/vnd.api+json']]);

//添加获取申领企业信息接口
// $response = $client->request('GET', 'applyCompanyForms/61,60',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCompanyForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCompanyForms?filter[name]=555&filter[principalRealName]=ni',['haders'=>['Content-' => 'application/vnd.api+json']]);


//add --start

/*$data = array("data"=>array("type"=>"applyCompanyForms",
                                    "attributes"=>array( "name"=>"xian555".rand(0,100),
                                                         "registrationNumber"=>"xxxxxxxxxx".rand(0,100),
                                                         "unifiedSocialCreditCode"=>"",
                                                         "certificate"=>array('certificate11','certificate22','certificate33'),
                                                         "province"=>2,
                                                         "city"=>52,
                                                         "region"=>500,
                                                         "uid"=>1,
                                                         "principalRealName"=>"nijing",
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
                                    "attributes"=>array( "name"=>"hello555".rand(0,100),
                                                         "registrationNumber"=>"xxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxxxxxxxxx",
                                                         "certificate"=>array('certificate1','certificate2','certificate3'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "uid"=>1,
                                                         "principalRealName"=>"nijing",
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
                'POST',
                'applyCompanyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add --end

//edit --start
// $data = array("data"=>array("type"=>"applyCompanyForms",
//                                     "attributes"=>array( "name"=>"hello555".rand(0,100),
//                                                          "registrationNumber"=>"xxxxxxxxxx",
//                                                          "unifiedSocialCreditCode"=>"xxxxxxxxxx",
//                                                          "certificate"=>array('certificate1','certificate2','certificate3'),
//                                                          "province"=>20,
//                                                          "city"=>30,
//                                                          "region"=>40,
//                                                          "principalRealName"=>"法人名字",
//                                                          "principalIdentifyCardNumber"=>"123456798962",
//                                                          "principalIdentifyCardFrontPhoto"=>"1xxxxxxxxxx",
//                                                          "principalIdentifyCardBackPhoto"=>"2xxxxxxxxxx",
//                                                          "principalIdentifyCardHandHeldPhoto"=>"3xxxxxxxxxx",
//                                                          "principalIdentifyCardValidity"=>"2020-11-11",
//                                                          "principalBirthday"=>"2010-10-10",
//                                                          "principalBirthdayCategory"=>2,
//                                                          "contactName"=>"nijinghello",
//                                                          "contactDuties"=>"程序员",
//                                                          "contactPhone"=>"18840287763"
//                                                          )
//                                        )
//                           );
// $response = $client->request(
//                 'PUT',
//                 'applyCompanyForms/10',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
=======
            );*/
//edit --end

/*$response = $client->request(
                'PUT',
                'applyCompanyForms/61/approve',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($status);
print_r($contents);

/*
{
    "meta": [],
    "data": {
        "type": "applyCompanyForms",
        "id": "1",
        "attributes": {
            "name": "hello555",
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
            "principalIdentifyCardValidity": "2020-11-11",
            "principalBirthday": "2010-10-10",
            "principalBirthdayCategory": 2,
            "status": 0,
            "updateTime": 1484130655,
            "createTime": 1484130113,
            "statusTime": 1484130655
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

