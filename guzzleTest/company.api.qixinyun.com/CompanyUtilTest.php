<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client();
//get filter[name]  filter[principalRealName]
/*$response = $client->request(
                'GET',
                'http://127.0.0.1/companies?filter[principalRealName]=法人名字',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );*/

/**
 * 
 * certificate | array 第三方图片地址 三证/一证  address1，address2，address3
 *
 */
$data = array("data"=>array("type"=>"companies",
                                    "attributes"=>array( "name"=>"企业名称34",
                                                         "certificate"=>array('address1'),
                                                         "province"=>"20",
                                                         "city"=>"30",                                                        
                                                         "region"=>"40",
                                                         "uid"=>"1",
                                                         "principalRealName"=>"法人名字",
                                                         "principalIdentifyCardNumber"=>"xxxxxxxxxx",
                                                         "principalCertificate"=>"xxxxxxxxxx",
                                                         "contractPhone"=>"1234568911",
                                                         "category"=>"1",
                                                         "registrationNumber"=>"xxxxxxxxxx",
                                                         "unifiedSocialCreditCode"=>"xxxxxxxxxx",
                                                         "organizationCode"=>"xxxxxxxxxx",
                                                         "registrationAuthority"=>"登记机关",
                                                         "approveDate"=>"123456789",
                                                         "englishName"=>"xxxxxxxxxx",
                                                         "registrationCapital"=>"200",
                                                         "scale"=>"1",
                                                         "establishedDate"=>"123456789",
                                                         "industry"=>"1",
                                                         "issuedDate"=>"123456789",
                                                         "creditUrl"=>"xxxxxxxxxx",
                                                         "email"=>"xxxxxxxxxx",
                                                         "postalCode"=>"710000",
                                                         "businessTermFrom"=>"123456789",
                                                         "businessTermTo"=>"123456789",
                                                         "businessScope"=>"xxxxxxxxxx",
                                                         "businessStatus"=>"1",
                                                         "principalCategory"=>"1"
                                                         )
                                       )
                          );

//add company
/*$response = $client->request(
                'POST',
                'http://127.0.0.1/companies',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
*/
//edit company
$response = $client->request(
                'PUT',
                'http://127.0.0.1/companies/4',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

