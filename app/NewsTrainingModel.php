<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsTrainingModel extends Model
{
    protected $table ="news_training";
    protected $fillable = [
        'title_th',
        'title_en',
        'detail',
        'file',
        'type',
        'size'
    ];
}
