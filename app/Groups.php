<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $fillable = [
        'created_by', 'name', 'subject', 'private',
    ];
}
