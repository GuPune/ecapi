<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsiderationModel extends Model
{
    protected $table ="consideration";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size'
    ];
}
