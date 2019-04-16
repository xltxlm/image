<?php
namespace xltxlm\image\Plus\Watermark;

use \xltxlm\image\Plus\__to;

/**
 * :Trait;
 * 给图片加上水印;
*/
trait Watermark_implements
{
    use __to;

    /* @var string  水印图片在大图上的x轴起点 */
    protected $x = '';

    /**
    * @return string;
    */
    public function getx():string
    {
        return $this->x;
    }

    /**
    * @param string $x;
    * @return $this
    */
    public function setx(string $x  = "")
    {
        $this->x = $x;
        return $this;
    }

    /* @var string  水印图片在大图上的y轴起点 */
    protected $y = '';

    /**
    * @return string;
    */
    public function gety():string
    {
        return $this->y;
    }

    /**
    * @param string $y;
    * @return $this
    */
    public function sety(string $y  = "")
    {
        $this->y = $y;
        return $this;
    }

    /* @var string  水印的图片路径 */
    protected $Watermark_image_path = '';

    /**
    * @return string;
    */
    public function getWatermark_image_path():string
    {
        return $this->Watermark_image_path;
    }

    /**
    * @param string $Watermark_image_path;
    * @return $this
    */
    public function setWatermark_image_path(string $Watermark_image_path  = "")
    {
        $this->Watermark_image_path = $Watermark_image_path;
        return $this;
    }

    /* @var void  大图的图片句柄 */
    protected $dst_im;

    protected $cached_dst_im = false;
    /**
    * @return ;
    */
    abstract protected function Real_getdst_im();

    /**
    * @return void;
    */
    final public function getdst_im(bool $清除缓存 = false)
    {
        if ($this->cached_dst_im === false || $清除缓存===true) {
            $this->cached_dst_im = $this->Real_getdst_im();
        }
        return $this->cached_dst_im;
    }

    /**
    * @param  $dst_im;
    * @return $this
    */
    protected function setdst_im($dst_im)
    {
        $this->dst_im = $dst_im;
        return $this;
    }

    /* @var void  小图的图片句柄 */
    protected $src_im;

    protected $cached_src_im = false;
    /**
    * @return ;
    */
    abstract protected function Real_getsrc_im();

    /**
    * @return void;
    */
    final public function getsrc_im(bool $清除缓存 = false)
    {
        if ($this->cached_src_im === false || $清除缓存===true) {
            $this->cached_src_im = $this->Real_getsrc_im();
        }
        return $this->cached_src_im;
    }

    /**
    * @param  $src_im;
    * @return $this
    */
    protected function setsrc_im($src_im)
    {
        $this->src_im = $src_im;
        return $this;
    }

    /**
    *  合成图片;
    *  @return ;
    */
    abstract public function __invoke();
}
