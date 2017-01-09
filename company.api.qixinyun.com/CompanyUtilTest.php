<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);
//get 
// filter[principalRealName]
// filter[name]
// filter[uid]
// filter[registrationCapital]
// filter[industry]
// filter[businessStatus]
// filter[areaId]
// filter[establishedPeriod]

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
// $data = array("data"=>array("type"=>"companies",
//                                     "attributes"=>array( "name"=>"企业名称44",
//                                                          "certificate"=>array('address1','222','333'),
//                                                          "province"=>20,
//                                                          "city"=>274,                                                  
//                                                          "region"=>2288,
//                                                          "uid"=>1,
//                                                          "principalRealName"=>"法人名字",
//                                                          "principalIdentifyCardNumber"=>"xxxxxxxxxx",
//                                                          "principalCertificate"=>"xxxxxxxxxx",
//                                                          "contactPhone"=>"1234568911",
//                                                          "category"=>1,
//                                                          "registrationNumber"=>"xxxxxxxxxx",
//                                                          "unifiedSocialCreditCode"=>"xxxxxxxxxx",
//                                                          "organizationCode"=>"xxxxxxxxxx",
//                                                          "registrationAuthority"=>"登记机关",
//                                                          "approveDate"=>"2014-01-01",
//                                                          "englishName"=>"xxxxxxxxxx",
//                                                          "registrationCapital"=>20000,
//                                                          "scale"=>1,
//                                                          "establishedDate"=>"2014-02-01",
//                                                          "industry"=>1,
//                                                          "issuedDate"=>"2015-01-01",
//                                                          "creditUrl"=>"xxxxxxxxxx",
//                                                          "email"=>"xxxxxxxxxx",
//                                                          "postalCode"=>"710000",
//                                                          "businessTermFrom"=>"2013-01-01",
//                                                          "businessTermTo"=>"2012-01-01",
//                                                          "businessScope"=>"xxxxxxxxxx",
//                                                          "businessStatus"=>2,
//                                                          "principalCategory"=>1,
//                                                          "detailedAddress"=>"详细地址"
//                                                          )
//                                        )
//                           );

//add --start
// $response = $client->request(
//                 'POST',
//                 'companies',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

//add --end

//edit --start
/*$response = $client->request(
                'PUT',
                'http://127.0.0.1/companies/4',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit --end

//update readCount
// $data = array("data"=>array("type"=>"companies",
//                         "attributes"=>array(
//                                             "count"=>15,
//                                             )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'companies/1/readCount',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

//update searchCount
$data = array("data"=>array("type"=>"companies",
                            "attributes"=>array(
                                            "count"=>15,
                                            )
                           )
              );
$response = $client->request(
                'PUT',
                'companies/1/searchCount',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);

