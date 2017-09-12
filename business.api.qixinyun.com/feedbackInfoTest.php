<?php
namespace Product;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8008/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get feedbackInfos
  /**
     *   3.1 filter[status]
     *   3.2 filter[userId]
     *   3.3 filter[businessId]
     */
// $response = $client->request('GET', 'feedbackInfos/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'feedbackInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'feedbackInfos?filter[userId]=234&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"feedbackInfos",
                            "attributes"=>array("businessId"=>6,
                                                "userId"=>234,
                                                "communicationPeople"=>"leon",
                                                "communicationPeopleLevel"=>2,
                                                "communicationTime"=>'2017-02-22',
                                                "communicationContent"=>'communicationContentcommunicationContentcommunicationContent',
                                                "communicationType"=>2
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'feedbackInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束


//get replyFeedbackInfos
   /**
     *   3.1 filter[status]
     *   3.2 filter[feedbackInfoId]
     *   3.3 filter[userId]
     */
// $response = $client->request('GET', 'replyFeedbackInfos/8',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'replyFeedbackInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'replyFeedbackInfos?filter[feedbackInfoId]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"replyFeedbackInfos",
                            "attributes"=>array("feedbackInfoId"=>5,
                                                "userId"=>234,
                                                "replyContent"=>"leonnnnnn"
                                                )
                           )
              );

$response = $client->request(
                'POST',
                'replyFeedbackInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

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
        "type": "feedbackInfos",
        "id": "1",
        "attributes": {
            "communicationPeople": "leon",
            "communicationPeopleLevel": 2,
            "communicationTime": "2017-02-22",
            "communicationContent": "communicationContentcommunicationContentcommunicationContent",
            "communicationType": 2,
            "updateTime": 0,
            "createTime": 1505188676,
            "statusTime": 0,
            "status": 0
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "234"
                }
            },
            "business": {
                "data": {
                    "type": "businesses",
                    "id": "5"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/feedbackInfos\/1"
        }
    }
}
*/

/*
{
    "meta": [],
    "data": {
        "type": "replyFeedbackInfos",
        "id": "1",
        "attributes": {
            "replyContent": "replyContentreplyContentreplyContentreplyContent",
            "updateTime": 0,
            "createTime": 1505189045,
            "statusTime": 0,
            "status": 0
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "234"
                }
            },
            "feedbackInfo": {
                "data": {
                    "type": "feedbackInfos",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/replyFeedbackInfos\/1"
        }
    }
}
*/