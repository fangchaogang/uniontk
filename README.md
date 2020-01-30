# 介绍

淘宝联盟、京东联盟、多多进宝、唯品客、苏宁推客、蘑菇街SDK封装，该项目长期维护。

# TODO
蘑菇街联盟SDK待适配，因为没有测试号

`苏宁、蘑菇街SDK已经适配，接口较多，没有全部测试，如果发现问题请提交ISSUE或者PR，我会在第一时间修复`

# 安装

```bash
composer require fangchaogang/uniontk
```

# 初始化SDK
每个平台SDK的具体调用方法参考各平台的文档

1、淘宝SDK初始化

```php
<?php
use fangchaogang\uniontk\Factory;
use fangchaogang\uniontk\taobao\request\TbkItemInfoGetRequest;

$client = Factory::taobao ();
$req = new TbkItemInfoGetRequest;
$req->setNumIids ($numIids);
return $client->execute ($req);
```

2、京东SDK初始化
```php
<?php
use fangchaogang\uniontk\Factory;
use fangchaogang\uniontk\jingdong\request\JdUnionGoodsPromotiongoodsinfoQueryRequest;

$jd = Factory::jingdong();
$req = new JdUnionGoodsPromotiongoodsinfoQueryRequest();
$req->setSkuIds("$itemid");
return $jd->execute($req);
```

3、拼多多SDK初始化
```php
<?php
use fangchaogang\uniontk\Factory;
use fangchaogang\uniontk\pinduoduo\request\DdkGoodsDetailRequest;

$pdd = Factory::pinduoduo();
$req = new DdkGoodsDetailRequest();
$req->setGoodsIdList("[$itemid]");
return  $pdd->execute($req);
```

4、唯品会SDK初始化
```php
<?php
use fangchaogang\uniontk\Factory;
use fangchaogang\uniontk\vip\request\PidGenRequest;
use fangchaogang\uniontk\vip\request\UnionPidServiceClient;

// 唯品会官方的sdk写的比较垃圾，用法和其他平台稍微不一样
$service= UnionPidServiceClient::getService();
Factory::vip();
$pidGenRequest1 = new PidGenRequest();
$pidNameList2 = array();
$pidNameList2[0] = "value";
$pidGenRequest1->pidNameList = $pidNameList2;
$pidGenRequest1->requestId = "requestId";
dd($service->genPidWithOauth($pidGenRequest1));
```

5、苏宁连联盟SDK初始化
```php
<?php
use fangchaogang\uniontk\Factory;
use fangchaogang\uniontk\suning\request\Netalliance\CouponproductQueryRequest;

$c = Factory::suning();
$req = new CouponproductQueryRequest();
$req->setPageNo("1");
$req->setPageSize("10");
$req->setPositionId("12");
$resp = $c->execute($req);
dd($resp);
```
