<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    protected $table ="about";
    protected $fillable = [
        'title_th',
        'title_en',
        'detail'
    ];
}
