<?php
namespace Product\Adapter;
use GuzzleHttp;
use GuzzleHttp\Exception\RequestException;

class ProductAdapter
{
    private $client;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client(
            ['base_uri' => PRODUCT_API_RUL]
        );
    }

    //通过id获得单个数据接口
    public function getOne(int $id, array $condition = array())
    {

        if (!empty($id)) {
            $response = $this->client->request(
                'GET',
                'products/'.$id.$this->formatCondition($condition),
                [
                    'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );

            if ($response->getStatusCode() != '200') {
                return false;
            }

            $body = $response->getBody();
            $data = json_decode($body->getContents(), true);
            if (empty($data)) {
                return false;
            }
            $statusCode = $response->getStatusCode();
            return array($statusCode, $data);
        }
        return false;
    }

    public function getList(array $ids, array $condition = array())
    {
        if (!empty($ids)) {
            $response = $this->client->request(
                'GET',
                'products/'.implode(',', $ids).$this->formatCondition($condition),
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );

            $statusCode = $response->getStatusCode();
            $body = $response->getBody();

            if (in_array($statusCode, array('200', '204'))) {
                $dataList = json_decode($body->getContents(), true);
                return array($statusCode, $dataList);
            }
        }
        return false;
    }

    public function addProduct(array $product = array())
    {
        $data = array();
        $data['data'] = array('type'=>'products');

        foreach ($product as $key => $info) {
            $data['data']['attributes'][$key] = $info;
        }

        try {
            $response = $this->client->request(
                'POST',
                'products',
                [
                    'haders'=>['Content-Type' => 'application/vnd.api+json'],
                    'json' => $data
                ]
            );
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                if ($e->getResponse()->getStatusCode() == '409') {
                    return false;
                }
            }
        }

        if ($response->getStatusCode() != '201') {
            return false;
        }

        return true;
    }

    private function formatCondition(array $condition) : string
    {
        $fields = $this->formatFileds($condition['fields']);
        $includes = $this->formatInclude($condition['include']);

        $condition = '';
        $conjection = '&';
        
        if (!empty($fields)) {
            $condition = $conjection.$fields;
            $conjection = '&';
        }
        if (!empty($includes)) {
            $condition = $conjection.$includes;
        }

    }

    private function formatInclude(array $include = array())
    {
        $condition = implode(',', $include);
        return 'include='.$condition;
    }

    private function formatFileds(array $fileds = array())
    {
        $condition = implode(',', $fileds);
        return 'fileds[products]='.$condition;
    }
}

