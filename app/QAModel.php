<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QAModel extends Model
{
    //
    protected $table ="question";
    protected $fillable = [
        'ask',
        'reply',
        'type',
    ];
}
