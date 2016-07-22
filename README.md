# Image.php

很多PHP框架竟然没有图片设定宽高居中剪裁的功能，比如CI，所以我自己封装了一个图片处理类：可设定宽高居中剪裁、设定宽高等比缩放、创建缩略图

#### 提供了以下功能

	1. 居中剪裁 (设定宽高)
	2. 等比缩放 (设定宽高, 源图小于宽高的不做缩放)
	3. 创建缩略图
	4. 如果操作网络图片, 会在根目录生成"tmp.jpg" (用于测试)

## 生成用户头像 (sample 1)

```php
$img = new Image();

$config['source_image'] = '/www/img/4533070d32960cd35e726ddb715a1eac.jpg';
$config['width'] = 200;
$config['height'] = 200;
$img->initialize($config);
$img->crop();  // 剪裁
```

## 创建缩略图 (sample 2)

```php
$img = new Image();

$config['source_image'] = '/www/img/4533070d32960cd35e726ddb715a1eac.jpg';
$config['width'] = 200;
$config['height'] = 200;
$config['create_thumb'] = true;
$img->initialize($config);
$img->crop();  // 剪裁
```

## 等比压缩图片并创建缩略图 (sample 3)

```php
$img = new Image();

$config['source_image'] = '/www/img/4533070d32960cd35e726ddb715a1eac.jpg';
$config['width'] = 1280;
$config['height'] = 720;
$img->initialize($config);
$img->resize();  // 缩放

$config = array(); // 清空之前的配置

$config['source_image'] = '/www/img/4533070d32960cd35e726ddb715a1eac.jpg';
$config['width'] = 600;
$config['height'] = 450;
$config['create_thumb'] = true;
$config['thumb_marker'] = '_small';  // 默认为'_thumb'
$img->initialize($config);
$img->crop();  // 剪裁
```
