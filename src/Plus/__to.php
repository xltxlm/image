<?php

namespace xltxlm\image\Plus;

/**
 * 基础类;
 */
trait __to
{
    use __to\__to_implements;

    public function __construct(string $image_path = null)
    {
        if ($image_path) {
            $this->setimage_path($image_path);
        }
    }


}
