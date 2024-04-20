<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsInformationModel extends Model
{
    protected $table ="news_information";
    protected $fillable = [
        'title_th',
        'title_en',
        'detail',
        'file',
        'type',
        'size'
    ];
}
