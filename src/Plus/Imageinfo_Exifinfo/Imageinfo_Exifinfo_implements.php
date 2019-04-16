<?php
namespace xltxlm\image\Plus\Imageinfo_Exifinfo;

use \xltxlm\image\Plus\__to;
/**
 * :类;
 * exif-相机的相关信息;
*/
abstract class Imageinfo_Exifinfo_implements
{

    use __to;

/* @var array  相片自带的信息内容 */
    protected $exif_info = [];





    /**
    * @return array;
    */
            protected function getexif_info():array        {
                return $this->exif_info;
        }

    
    




/**
* @param array $exif_info;
* @return $this
*/
    protected function setexif_info(array $exif_info  = [])
    {
    $this->exif_info = $exif_info;
    return $this;
    }



/**
*  返回exif信息;
*  @return :array;
*/
abstract public function __invoke():array;
}