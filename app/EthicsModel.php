<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EthicsModel extends Model
{
    protected $table ="ethics";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size',
        'link'
    ];
}
