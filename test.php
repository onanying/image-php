<?php

include 'Image.php';

$image = new Image();
$image->initialize([
    'source_image' => 'http://www.wallcoo.com/animal/Dogs_Summer_and_Winter/wallpapers/1920x1200/DogsB10_Lucy.jpg',
    'width'        => 200,
    'height'       => 200,
]);
$image->resize();
