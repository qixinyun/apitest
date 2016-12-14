<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client();
//get 
/*$response = $client->request(
                'GET',
                'http://127.0.0.1/claimCompanyForms?filter[uid]=3',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );*/

//add --start
/*$data = array("data"=>array("type"=>"claimCompanyForms",
                                    "attributes"=>array( "name"=>"企业名称12",
                                                         "certificate"=>array('certificate111','certificate2','certificate3'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "uid"=>2,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"123456798962",
                                                         "principalCertificate"=>"xxxxxxxxxxx",
                                                         "contractPhone"=>"18840287763",
                                                         "companyId"=>1
                                                         )
                                       )
                          );
$response = $client->request(
                'POST',
                'http://127.0.0.1/claimCompanyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -end

//edit --start
/*$data = array("data"=>array("type"=>"claimCompanyForms",
                                    "attributes"=>array( "name"=>"企业名称12",
                                                         "certificate"=>array('certificate111','certificate2','certificate3'),
                                                         "province"=>20,
                                                         "city"=>30,
                                                         "region"=>40,
                                                         "uid"=>2,
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"123456798962",
                                                         "principalCertificate"=>"xxxxxxxxxxx",
                                                         "contractPhone"=>"18840287763"
                                                         )
                                       )
                          );
/*$response = $client->request(
                'PUT',
                'http://127.0.0.1/claimCompanyForms/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit --end

//confirm --start
/*$response = $client->request(
                'PUT',
                'http://127.0.0.1/claimCompanyForms/2/confirm',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );*/
//confirm --end

//decline --start
/*$data = array("data"=>array("type"=>"replyClaimCompanyForms",
                                "attributes"=>array( "reasonCategory"=>1,
                                                     "comment"=>'nononononn'
                                                     )
                                       )
                          );

$response = $client->request(
                'PUT',
                'http://127.0.0.1/claimCompanyForms/4/decline',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//decline --end

//get replyClaimCompanyForm --start
$response = $client->request(
                'GET',
                'http://127.0.0.1/replyClaimCompanyForms?filter[claimCompanyFormId]=4',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );
//get replyClaimCompanyForm --end

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

