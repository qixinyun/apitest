<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[title]
 //filter[company]
// $response = $client->request('GET', 'newses',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'newses/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'newses?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"newses",
                            "attributes"=>array("title"=>"titletitletitle",
                                                "date"=>'2012-02-23',
                                                "source"=>'hettp://www.baidu.com',
                                                "abstract"=>'abstractabstract',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'newses',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"newses",
                            "attributes"=>array("title"=>"titletitle",
                                                "date"=>'2020-02-02',
                                                "source"=>'https://www.baidu.com',
                                                "abstract"=>'abstract',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'newses/1',
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
        "type": "newses",
        "id": "1",
        "attributes": {
            "title": "titletitletitle",
            "date": "2012-02-23",
            "source": "hettp:\/\/www.baidu.com",
            "abstract": "abstractabstract",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488854399
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
            "self": "127.0.0.1\/newses\/1"
        }
    }
}*/