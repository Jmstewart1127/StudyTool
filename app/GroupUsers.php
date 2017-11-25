<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUsers extends Model
{
    protected $fillable = [
        'user_id', 'group_id',
    ];
}
