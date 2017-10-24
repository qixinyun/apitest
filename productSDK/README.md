# Product SDK

---

## 接口规范

我方使用`jsonapi`格式规范约束接口.`http://jsonapi.org/`

## 请求规范

* `header`添加`application/vnd.api+json`
* 数据格式为`json`

## 接口描述

* `getOne`: 获取单个商品
* `getList`: 批量获取多个商品
* `add`: 添加商品

## 接口字段

* `name`: 产品名称
* `userGroupId`: 机构id
* `departmentId`: 部门id
* `price`: 价格
* `category`: 产品类型
	* `PRODUCT_SCOPE_PUBLIC`: 共有
	* `PRODUCT_SCOPE_PRIVATE`: 私有
* `content`: 产品内容
* `number`: 产品编号
* `freuency`: 产品总使用次数限制

## 接口错误码

* `201`: 添加成功
* `200`: 请求成功
* `404`: 资源不存在,或者路由不存在
* `405`: 路由不支持方法
* `500`: 服务器内部错误
* `403`: 请求错误, 具体查看返回`result`错误信息

