<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client();
//get 
$response = $client->request(
                'GET',
                'http://127.0.0.1/applyCompanyForms?filter[uid]=3',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );


//add --start
/*$data = array("data"=>array("type"=>"applyCompanyForms",
                                    "attributes"=>array( "name"=>"企业名称555",
                                                         "certificate"=>array('certificate11','certificate22','certificate33'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "uid"=>1,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"123456798962",
                                                         "principalCertificate"=>"xxxxxxxxxxx",
                                                         "contractPhone"=>"18840287763"
                                                         )
                                       )
                          );
$response = $client->request(
                'POST',
                'http://127.0.0.1/applyCompanyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add --end

//edit --start
/*$data = array("data"=>array("type"=>"applyCompanyForms",
                                    "attributes"=>array( "name"=>"企业名称555",
                                                         "certificate"=>array('certificate11','certificate22','certificate33'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "uid"=>1,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"123456798962",
                                                         "principalCertificate"=>"xxxxxxxxxxx",
                                                         "contractPhone"=>"18840287763"
                                                         )
                                       )
                          );
$response = $client->request(
                'PUT',
                'http://127.0.0.1/applyCompanyForms/2',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit --end

//confirm --start
/*$response = $client->request(
                'PUT',
                'http://127.0.0.1/applyCompanyForms/4/confirm',
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
                'http://127.0.0.1/applyCompanyForms/6/decline',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//decline --end

//get replyApplyCompanyForm --start
/*$response = $client->request(
                'GET',
                'http://127.0.0.1/replyApplyCompanyForms?filter[applyCompanyFormId]=4',
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

