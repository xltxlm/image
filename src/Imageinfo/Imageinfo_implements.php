<?php
namespace xltxlm\image\Imageinfo;

use \xltxlm\image\Plus\__to;
use \xltxlm\classinfo\Features\__Object_toJson;

/**
 * 图片的基础信息;
*/
abstract class Imageinfo_implements
{
    /*  */
    public const GIF="GIF";
    /*  */
    public const JPEG="JPEG";
    /*  */
    public const PNG="PNG";
    /*  */
    public const WEBP="WEBP";
    /*  */
    public const BMP="BMP";

    use __to;
    use __Object_toJson;

    /* @var string  图片的路径 */
    protected $image_path = '';

    /**
    * @return string;
    */
    public function getimage_path():string
    {
        return $this->image_path;
    }

    /**
    * @param string $image_path;
    * @return $this
    */
    public function setimage_path(string $image_path  = '')
    {
        $this->image_path = $image_path;
        return $this;
    }
    /* @var int  宽度 */
    protected $width = 0;
    
    /**
    * @return int;
    */
    abstract public function getwidth():int;
    
    /**
    * @param int $width;
    * @return $this
    */
    protected function setwidth(int $width  = 0)
    {
        $this->width = $width;
        return $this;
    }
    /* @var int  高度 */
    protected $height = 0;
    
    /**
    * @return int;
    */
    abstract public function getheight():int;
    
    /**
    * @param int $height;
    * @return $this
    */
    protected function setheight(int $height  = 0)
    {
        $this->height = $height;
        return $this;
    }
    /* @var string  类似这个	image/gif */
    protected $mime_type = '';

    /**
    * @return string;
    */
    abstract public function getmime_type():string;
    
    /**
    * @param string $mime_type;
    * @return $this
    */
    protected function setmime_type(string $mime_type  = '')
    {
        $this->mime_type = $mime_type;
        return $this;
    }
    /* @var int  文件大小 */
    protected $filesize = 0;
    
    /**
    * @return int;
    */
    abstract public function getfilesize():int;
    
    /**
    * @param int $filesize;
    * @return $this
    */
    protected function setfilesize(int $filesize  = 0)
    {
        $this->filesize = $filesize;
        return $this;
    }
    /* @var array  调用原生的函数 */
    protected $PHP_imagesize = [];

    protected $cached_PHP_imagesize = false;
    /**
    * @return array;
    */
    abstract protected function Real_getPHP_imagesize():array;

    /**
    * @return array;
    */
    final protected function getPHP_imagesize(bool $清除缓存 = false):array
    {
        if ($this->cached_PHP_imagesize === false || $清除缓存===true) {
            $this->cached_PHP_imagesize = $this->Real_getPHP_imagesize();
        }
        return $this->cached_PHP_imagesize;
    }

    /**
    * @param array $PHP_imagesize;
    * @return $this
    */
    protected function setPHP_imagesize(array $PHP_imagesize  = [])
    {
        $this->PHP_imagesize = $PHP_imagesize;
        return $this;
    }
}
