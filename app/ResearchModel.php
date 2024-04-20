<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchModel extends Model
{
    protected $table ="research";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size'
    ];
}
