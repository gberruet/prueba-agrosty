<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    public function messages()
    {
        return $this->hasMany('App\Mensaje', 'subjectId');
    }
}
