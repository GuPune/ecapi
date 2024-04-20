<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoRecommendModel extends Model
{
    protected $table ="video_recommend";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size'
    ];
}
