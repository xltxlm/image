<?php

namespace xltxlm\image\Plus;

use xltxlm\image\Imageinfo;

/**
 * 给图片加上水印;
 */
trait Watermark
{
    use Watermark\Watermark_implements;

    protected function Real_getdst_im()
    {
        return (new Imageinfo($this->getimage_path()))
            ->__invoke();
    }

    protected function Real_getsrc_im()
    {
        return (new Imageinfo($this->getWatermark_image_path()))
            ->__invoke();
    }


    public function __invoke()
    {
        // 以 50% 的透明度合并水印和图像
        imagecopymerge($this->getdst_im(), $this->getsrc_im(), $marge_right, imagesy($this->getdst_im()) - $sy - $marge_bottom, 0, 0, imagesx($this->getsrc_im()), imagesy($this->getsrc_im()), 50);
    }


}
