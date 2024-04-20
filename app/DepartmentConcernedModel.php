<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentConcernedModel extends Model
{
    protected $table ="department_concerned";
    protected $fillable = [
        'title_th',
        'title_en',
        'link'
    ];
}
