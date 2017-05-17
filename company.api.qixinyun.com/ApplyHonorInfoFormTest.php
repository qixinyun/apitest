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
 $response = $client->request('GET', 'applyHonorInfoForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyHonorInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyHonorInfoForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyHonorInfoForms",
                            "attributes"=>array("name"=>'hellohello1111',
                                                "grantOrganization"=>'grantOrganization',
                                                "grantDate"=>'2021-09-06',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyHonorInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyHonorInfoForms",
                            "attributes"=>array("name"=>'hellohello',
                                                "grantOrganization"=>'grantOrganization222',
                                                "grantDate"=>'2027-09-06',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyHonorInfoForms/1',
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
        "type": "applyHonorInfoForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "hellohello222",
            "issueDate": "2009-05-05",
            "expirationDate": "2021-09-06",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488171166
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
            "self": "127.0.0.1\/applyHonorInfoForms\/1"
        }
    }
}*/