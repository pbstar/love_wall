<?php
header('Content-Type:image/png');
$img = imagecreate(100, 35);//创建画布
$imgColor = imagecolorallocate($img, 255, 255, 255);//设置背景颜色
imagefill($img, 0, 0, $imgColor);//填充背景色
$fontColor = imagecolorallocate($img, 255, 0, 0);//设置字体颜色
$lineColor=imagecolorallocate($img,0,0,0);
$arr1 = range(0, 9);//[0,1,2,...9]
$arr2 = range('a', 'z');//['a','b',...'z']
$arr3 = range('A', 'Z');//['A','B',...'Z']
$arr = array_merge($arr1, $arr2, $arr3);//最终大数组 长度是62
shuffle($arr);//打乱数组顺序
$word = '';
for ($i = 1; $i <= 4; $i++) {
    $index = rand(0, 61);//获取随机索引号
    $word .= $arr[$index];
}
//把验证码存到session
session_start();
$_SESSION['vcode']=$word;
imagestring($img, 15, 30, 10, $word, $fontColor);
imageline($img,0,38,100,30,$lineColor);
imageline($img,50,38,50,38,$lineColor);
imageline($img,10,10,100,10,$lineColor);
imageline($img,30,25,90,15,$lineColor);
imagepng($img);//输出图像资源