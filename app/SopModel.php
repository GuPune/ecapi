<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SopModel extends Model
{
    protected $table ="sop";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size',
        'version'
    ];
}
