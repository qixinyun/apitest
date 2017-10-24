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
        'category' => PUBLIC,//产品类型 共有,私有
        'content' => array('产品内容'),//产品内容 
        'number' => "产品编号",//
        'frequency' => "产品使用次数"
    )
);

//搜索产品
list($result, $status) = $productAdapter->search(
    array(
        'filter'=> array(
            'name' => '产品名称',
            'userGrouId' => 机构id,
            'departmentId' => 部门id,
            'status' => 产品状态,
            'number' => "产品编号"
        ),
        'sort' => array(
            'id'=>-1,//-1 倒叙, 1正序
        ),
        'page' => array(
            'number'=> 从第几页开始,
            'size'=> 每页获取数量
        ),
        'fields' => array(
            'name',//需要筛选的字段
        ),
        'include' => array(
           'usergroup',//需要额外获取资源 
        )
    )
);
