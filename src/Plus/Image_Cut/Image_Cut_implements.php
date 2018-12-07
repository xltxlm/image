<?php
namespace xltxlm\image\Plus\Image_Cut;

use \xltxlm\image\Plus\__to;

/**
 * :Trait;
 * 图片缩放,短的一边加上底色补偿.;
*/
trait Image_Cut_implements
{
    use __to;

    /* @var int  目标宽度 */
    protected $Width = 0;
    
    /**
    * @return int;
    */
    public function getWidth():int
    {
        return $this->Width;
    }

    /**
    * @param int $Width;
    * @return $this
    */
    public function setWidth(int $Width  = 0)
    {
        $this->Width = $Width;
        return $this;
    }
    /* @var int  目标高度 */
    protected $height = 0;
    
    /**
    * @return int;
    */
    public function getheight():int
    {
        return $this->height;
    }

    /**
    * @param int $height;
    * @return $this
    */
    public function setheight(int $height  = 0)
    {
        $this->height = $height;
        return $this;
    }
    /* @var string  保存图片的新路径 */
    protected $savefile = '';

    /**
    * @return string;
    */
    public function getsavefile():string
    {
        return $this->savefile;
    }

    /**
    * @param string $savefile;
    * @return $this
    */
    public function setsavefile(string $savefile  = '')
    {
        $this->savefile = $savefile;
        return $this;
    }
    /**
    *  切图片,返回图片的基础信息;
    *  @return ;
    */
    abstract public function __invoke();
}
