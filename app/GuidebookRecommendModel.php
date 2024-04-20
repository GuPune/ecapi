<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuidebookRecommendModel extends Model
{
    protected $table ="guidebook_recommend";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size'
    ];
}
