<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'employeeEvaluates',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'employeeEvaluates/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'employeeEvaluates?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"employeeEvaluates",
                            "attributes"=>array("appraiser"=>"评价人",
                                                "date"=>"2020-02-02",
                                                "content"=>'评价内容',
                                                "duties"=>'评价人岗位',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'employeeEvaluates',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"employeeEvaluates",
                            "attributes"=>array("appraiser"=>"评价人111",
                                                "date"=>"2027-02-02",
                                                "content"=>'评价内容111',
                                                "duties"=>'评价人岗位11',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'employeeEvaluates/1',
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
        "type": "employeeEvaluates",
        "id": "1",
        "attributes": {
            "appraiser": "\u8bc4\u4ef7\u4eba",
            "date": "2020-02-02",
            "content": "\u8bc4\u4ef7\u5185\u5bb9",
            "duties": "\u8bc4\u4ef7\u4eba\u5c97\u4f4d",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488951575
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
            "self": "127.0.0.1\/employeeEvaluates\/1"
        }
    }
}*/