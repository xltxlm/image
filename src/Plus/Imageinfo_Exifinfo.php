<?php

namespace xltxlm\image\Plus;

use \xltxlm\image\Plus\__to;

/**
 * exif-相机的相关信息;
 */
class Imageinfo_Exifinfo extends Imageinfo_Exifinfo\Imageinfo_Exifinfo_implements
{

    public function setimage_path(string $image_path = "")
    {
        $this->image_path = $image_path;
        $fp = fopen($this->image_path, 'rb');
        $headers = \exif_read_data($fp, 0, true);
        foreach ($headers as $key => $header) {
            if (!in_array($key, ['COMPUTED', 'IFD0', 'EXIF'])) {
                unset($headers[$key]);
            }
        }
        //注释掉有乱码的key:EXIF:UserComment
        unset($headers['EXIF']['UserComment']);
        unset($headers['EXIF']['ComponentsConfiguration']);
        $this->setexif_info($headers);
        return $this;
    }

    public function __invoke(): array
    {
        return $this->getexif_info();

    }


}