<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmissionModel extends Model
{
    protected $table ="submission";
    protected $fillable = [
        'title_th',
        'title_en',
        'file',
        'type',
        'size',
        'doc_number',
        'head'
    ];
}
