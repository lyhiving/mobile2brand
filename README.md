## 手机型号转品牌LOGO

[![Latest Stable Version](https://img.shields.io/packagist/v/lyhiving/mobile2brand.svg)](https://packagist.org/packages/lyhiving/mobile2brand)
[![Build Status](https://travis-ci.org/lyhiving/mobile2brand.svg?style=flat-square&branch=master)](https://travis-ci.org/lyhiving/mobile2brand)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)](https://php.net/)


PHP 实现根据手机设备品牌和设备型号获取设备的品牌LOGO，目前数据为自整理。输出325X260 的JPG图片。

### Installation
```
composer require "lyhiving/mobile2brand:^1.0"
```

### Usage
```php
<?php
use lyhiving\Mobile\Mobile2Brand;

// composer 方式安装
// include './vendor/autoload.php';

// 非 composer 方式安装的，引入文件
// include './src/Mobile2Brand.php';
	
$mb = new Mobile2Brand();
$brand = $mb->find('LGE','Nexus 5X');
print_r($brand);

// Output;
google
```

一般情况下，我们想直接获取URL地址。
```php
<?php
use lyhiving\Mobile\Mobile2Brand;

$mb = new Mobile2Brand();
$logo = $mb->url('https://raw.githubusercontent.com/lyhiving/mobile2brand/master/src/icons/')->find('Xiaomi','MI MAX 2');
print_r($logo);

// Output;
https://raw.githubusercontent.com/lyhiving/mobile2brand/master/src/icons/xiaomi.jpg
```

![效果图](https://raw.githubusercontent.com/lyhiving/mobile2brand/master/src/icons/xiaomi.jpg)


### Tips

手机品牌logo每个厂家有不同的使用规定，如有涉及更新LOGO或者更多设备兼容，请直接[提交issue](https://github.com/lyhiving/mobile2brand/issues/new) 告之，我会在合适的时候更新到版本中。


### License
[MIT license.](https://raw.githubusercontent.com/lyhiving/mobile2brand/master/LICENSE)