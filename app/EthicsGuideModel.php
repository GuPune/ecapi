<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EthicsGuideModel extends Model
{
    protected $table ="ethics_guide";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size'
    ];
}
