<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegulationModel extends Model
{
    protected $table ="regulation";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size',
        'head'
    ];
}
