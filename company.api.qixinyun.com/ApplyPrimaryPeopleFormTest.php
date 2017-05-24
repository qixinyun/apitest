<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
/**   
 *   3.1 filter[status]  表单审核状态
 *      审核通过状态 2
 *      待审核状态 0
 *      审核拒绝状态 -2
 *   3.2 filter[company]
 *      所属企业id
 *   3.3 filter[userIdentification]  用户标识
 *      OA用户    1 
 *      非OA用户  2
 *   3.4 filter[uid]
 *      用户id
 */
 //$response = $client->request('GET', 'applyPrimaryPeopleForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyPrimaryPeopleForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 //$response = $client->request('GET', 'applyPrimaryPeopleForms?sort=-id&page[number]=1&page[size]=10',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyPrimaryPeopleForms",
                            "attributes"=>array("name"=>"122211editnamenamename",
                                                "duties"=>111111,
                                                "gender"=>112,
                                                "nationality"=>11111,
                                                "birthday"=>"1995-05-05",
                                                "education"=>11111,
                                                "socialDuties"=>"socialDuties",
                                                "experience"=>"experience",
                                                "abroadInvestmen"=>0,
                                                "companyId"=>200065,
                                                "uid"=>1,
                                                "userIdentification"=>2,
                                                //"primaryPeopleId"=>2
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyPrimaryPeopleForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyPrimaryPeopleForms",
                            "attributes"=>array("name"=>"editnassmenamename",
                                                "duties"=>1,
                                                "gender"=>1,
                                                "nationality"=>1,
                                                "birthday"=>"1991-05-05",
                                                "education"=>1,
                                                "socialDuties"=>"111socialDuties",
                                                "experience"=>"111xperience",
                                                "abroadInvestmen"=>0
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyPrimaryPeopleForms/80',
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
        "type": "applyPrimaryPeopleForms",
        "id": "80",
        "attributes": {
            "userIdentification": 2,
            "name": "editnassmenamename",
            "duties": 1,
            "gender": 1,
            "nationality": 1,
            "birthday": "1991-05-05",
            "education": 1,
            "socialDuties": "111socialDuties",
            "experience": "111xperience",
            "abroadInvestmen": 0,
            "company": 200065,
            "primaryPeopleId": 2,
            "status": 0,
            "statusTime": 1495593638,
            "updateTime": 1495593638,
            "createTime": 1495593486
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "skynetcreditUsers",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyPrimaryPeopleForms\/80"
        }
    }
}*/


