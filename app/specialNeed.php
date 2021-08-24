<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialNeed extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle', 'value'
    ];
}
