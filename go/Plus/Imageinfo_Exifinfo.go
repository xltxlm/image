package Plus

type Imageinfo_Exifinfo struct {
    /* 相片自带的信息内容 */
    exif_info array

}

func NewImageinfo_Exifinfo() *Imageinfo_Exifinfo{
    var this = new(Imageinfo_Exifinfo)
    return this
}


/**
    返回exif信息*/
func (this *Imageinfo_Exifinfo)__invoke()array{

}

