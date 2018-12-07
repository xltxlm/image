<?php

namespace xltxlm\image\test\Imageinfo;

use xltxlm\image\Imageinfo;

/**
 *
 */
class 图片基础信息的获取_174_0
{
    public function __invoke()
    {
        $imageinfo = new Imageinfo(__DIR__ . '/WX20181207-111805.png');
        $getwidth = $imageinfo->getwidth();
        p($getwidth);
        $getheight = $imageinfo->getheight();
        p($getheight);
        $getfilesize = $imageinfo->getfilesize();
        p($getfilesize);
        $getimage_type = $imageinfo->getimage_type();
        p($getimage_type);
        $getmime_type = $imageinfo->getmime_type();
        p($getmime_type);
    }
}
