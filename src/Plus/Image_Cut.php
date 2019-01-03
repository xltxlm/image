<?php

namespace xltxlm\image\Plus;

use xltxlm\image\Imageinfo;
use \xltxlm\image\Plus\__to;

/**
 * 图片缩放,短的一边加上底色补偿.;
 */
trait Image_Cut
{
    use  Image_Cut\Image_Cut_implements;

    /**
     * @param string $image_path
     * @return static
     */
    public function setimage_path(string $image_path = "")
    {
        $this->image_path = $image_path;
        return $this;
    }


    public function __invoke()
    {
        $imageinfo = new Imageinfo($this->getimage_path());

        $ratio_new = $this->getWidth() / $this->getheight();
        $ratio_old = $imageinfo->getwidth() / $imageinfo->getheight();
        //需要补偿高度
        if ($ratio_old > $ratio_new) {
            $new_width = $this->getWidth();
            $new_height = floor($new_width / $ratio_old);
            $dst_x = 0;
            $dst_y = floor(($this->getheight() - $new_height) / 2);
        } else {
            //需要补偿宽度
            $new_height = $this->getheight();
            $new_width = floor($new_height * $ratio_old);
            $dst_x = floor(($this->getWidth() - $new_width) / 2);
            $dst_y = 0;
        }

        $image_new = imagecreatetruecolor($this->getWidth(), $this->getheight());
        imagecolorallocate($image_new, 255, 255, 255);

        if ($imageinfo->getimage_type() == Imageinfo::JPEG) {
            $image = imagecreatefromjpeg($this->getimage_path());
        }
        if ($imageinfo->getimage_type() == Imageinfo::PNG) {
            $image = imagecreatefrompng($this->getimage_path());
        }
        if ($imageinfo->getimage_type() == Imageinfo::GIF) {
            $image = imagecreatefromgif($this->getimage_path());
        }
        if ($imageinfo->getimage_type() == Imageinfo::BMP) {
            $image = imagecreatefromwbmp($this->getimage_path());
        }

        imagecopyresampled($image_new, $image, $dst_x, $dst_y, 0, 0, $new_width, $new_height, $imageinfo->getwidth(), $imageinfo->getheight());
        imagejpeg($image_new, $this->getsavefile());
    }

}
