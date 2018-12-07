<?php

namespace xltxlm\image\Youtube;

/**
 * 按照youtube的尺寸进行图片剪裁;
 */
class Image_Youtube_360p extends Image_Youtube_360p\Image_Youtube_360p_implements
{
    public function __construct(string $image_path = null)
    {
        parent::__construct($image_path);
        $this->setWidth(self::WIDTH);
        $this->setheight(self::HEIGHT);
    }

}
