<?php

namespace xltxlm\image\test\Plus\Image_Cut;

use xltxlm\image\Plus\Image_Cut;

class abc
{
    use Image_Cut;
}

/**
 *
 */
class 图片进行剪切_175_0
{
    public function __invoke()
    {
        unlink(__DIR__ . '/image_new.jpeg');
        (new abc(__DIR__ . "/../../Imageinfo/WX20181207-111805.png"))
            ->setWidth(300)
            ->setheight(100)
            ->setsavefile(__DIR__ . '/image_new.jpeg')
            ->__invoke();
        assert(is_file(__DIR__ . '/image_new.jpeg'));
        p();
    }
}
