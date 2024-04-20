<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgCoverModel extends Model
{
    protected $table ="img_cover";
    protected $fillable = [ 
        'title_th',
        'title_en',
        'sub_title_th',
        'sub_title_en',
        'file',
        'type',
        'size'
    ];
}
