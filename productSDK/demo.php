<?php

include bootstrap.php

$productAdapter = new ProductAdapter();

//获取产品数据
$productId = 10; 
list($result, $status) = $productAdapter->getOne(
    $productId,
    array(
        'fields'=>array('name','price'),
        'include'=>array()
    )
);

//批量获取产品数据
$productIds = array(10,12,13);
list($result, $status) = $productAdapter->getList(
    $productIds,
    array(
        'fields'=>array('name','price'),
        'include'=>array()
    )
);

//添加产品
list($result, $status) = $productAdapter->add(
    array(
        'name' => '产品名称',
        'userGrouId' => 0,//产品所属机构id
        'departmentId' => 0,//产品所属部门id
        'price' => 0,//产品价格
        'category' => PRODUCT_SCOPE_PUBLIC,//产品类型 共有,私有
        'content' => array('产品内容'),//产品内容 
        'number' => "产品编号",//
        'frequency' => "产品使用次数"
    )
);
