<?php
namespace xltxlm\image\Youtube\Image_Youtube_360p;

use \xltxlm\image\Plus\Image_Cut;

/**
 * :类;
 * 按照youtube的尺寸进行图片剪裁;
*/
abstract class Image_Youtube_360p_implements
{
    /*  */
    protected const HEIGHT="360";
    /*  */
    protected const WIDTH="640";

    use Image_Cut;
}
