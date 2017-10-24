<?php
require '../vendor/autoload.php';

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8004/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get filter[name]=t  filter[status]=0 filter[parentId]
// $response = $client->request('GET', 'usergroups?page[number]=3&page[size]=10',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'usergroups/15?fields[usergroups]=parentId,userGroupType',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'usergroups?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
// $data = array("data"=>array("type"=>"usergroups",
//                             "attributes"=>array("name"=>"usergroup44",
//                                                 'parentId'=>1,
//                                                 'userGroupType'=>1,
//                                                 'jirisdictionAreaIds'=>array(),
//                                                 'businessAreaIds'=>array(),
//                                                 // 'platformId'=>1
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'usergroups',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"usergroups",
//                             "attributes"=>array("name"=>"usergroup122",
//                                                 'userGroupType'=>1,
//                                                 'jirisdictionAreaIds'=>array(1, 2),
//                                                 'businessAreaIds'=>array(1, 2)
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'usergroups/11',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//edit -- 结束

//enabled --开始
/*$response = $client->request(
                'PUT',
                'usergroups/1/enabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//enabled --结束

//disabled --开始
$response = $client->request(
                'PUT',
                'usergroups/1/disabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );
//disabled --结束

//bindDepartments  --开始
/*$data = array("data"=>array("type"=>"usergroups",
                            "relationships"=>array("departments"=>array("data"=>array(array("type"=>"departments", "id"=>1),
                                                                                      array("type"=>"departments", "id"=>5)
                                                                                      )
                                                                        )
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'usergroups/1/relationships/departments',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//bindDepartments  --结束

//unBindDepartments  --开始
/*$response = $client->request(
                'DELETE',
                'usergroups/1/relationships/departments/1,5',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//unBindDepartments  --结束

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
var_dump($status);
echo "<pre>";
print_r($contents);

