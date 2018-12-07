<?php

namespace xltxlm\image;

use xltxlm\image\Exception\Exception_Image_type_Error;

/**
 * 图片的基础信息;
 */
class Imageinfo extends Imageinfo\Imageinfo_implements
{
    public function __construct(string $image_path = null)
    {
        parent::__construct($image_path);
        $this->getPHP_imagesize(true);
    }

    protected function Real_getPHP_imagesize(): array
    {
        return getimagesize($this->getimage_path());
    }

    public function getwidth(): int
    {
        return $this->getPHP_imagesize()[0];
    }

    public function getheight(): int
    {
        return $this->getPHP_imagesize()[1];
    }

    public function getmime_type(): string
    {
        return image_type_to_mime_type($this->getPHP_imagesize()[2]);
    }

    public function getimage_type(): string
    {
        switch ($this->getPHP_imagesize()[2]) {
            case IMAGETYPE_GIF:
                return self::GIF;
            case IMAGETYPE_JPEG:
                return self::JPEG;
            case IMAGETYPE_PNG:
                return self::PNG;
            case IMAGETYPE_WEBP:
                return self::WEBP;
            case IMAGETYPE_BMP:
                return self::BMP;
            default:
                throw new Exception_Image_type_Error($this->__Object_toJson());
        }

    }

    public function getfilesize(): int
    {
        return filesize($this->getimage_path());
    }

}
