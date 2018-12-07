<?php

namespace xltxlm\image\test\Youtube\Image_Youtube_360p;
use xltxlm\image\Youtube\Image_Youtube_360p;

/**
 *
 */
class 图片剪切成360p大小_176_0
{
    public function __invoke()
    {
        unlink(__DIR__ . '/image_new.jpeg');
        (new Image_Youtube_360p(__DIR__ . "/../../Imageinfo/WX20181207-111805.png"))
            ->setsavefile(__DIR__ . '/image_new.jpeg')
            ->__invoke();
        assert(is_file(__DIR__ . '/image_new.jpeg'));
        p();
    }
}
