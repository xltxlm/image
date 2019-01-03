<?php
namespace xltxlm\image\Plus\__to;

/**
 * :Trait;
 * 基础类;
*/
trait __to_implements
{

/* @var string  图片文件的路径 */
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
    abstract public function setimage_path(string $image_path  = "");

    /**
    *  ;
    *  @return ;
    */
    abstract public function __construct(string $image_path = null);
}
