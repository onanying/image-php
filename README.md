## 项目简介

根据实际需求设计的图片处理类, “居中剪裁”通常使用在用户头像、缩略图等场景, “等比缩放”通常用来压缩图片

#### 提供了以下功能

	1. 居中剪裁 (宽高自动)
	2. 等比缩放 (宽高自动, 源图小于宽高的不做缩放)
	3. 创建缩略图
	4. 如果操作网络图片, 会在根目录生成"tmp.jpg" (用于测试)

## 使用范例

项目中常用的一些使用场景的范例

	**生成用户头像**

```php
$img = new Image();

$config['source_image'] = '/www/img/4533070d32960cd35e726ddb715a1eac.jpg';
$config['width'] = 200;
$config['height'] = 200;
$img->initialize($config);
$this->image->crop();  // 剪裁
```

	**创建缩略图**

```php
$img = new Image();

$config['source_image'] = '/www/img/4533070d32960cd35e726ddb715a1eac.jpg';
$config['width'] = 200;
$config['height'] = 200;
$config['create_thumb'] = true;
$img->initialize($config);
$this->image->crop();  // 剪裁
```

	**等比压缩图片并创建缩略图**

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
$config['thumb_marker'] = '_small';
$img->initialize($config);
$img->crop();  // 剪裁
```
