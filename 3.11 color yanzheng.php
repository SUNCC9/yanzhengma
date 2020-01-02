<?php
header('content-type:image/jpeg');
$image=imagecreatetruecolor(100,40);//创建一个100*40的画布
$white=imagecolorallocate($image,255,255,255);//背景颜色
$black=imagecolorallocate($image,0,0,0);//字体颜色
imagefill()
