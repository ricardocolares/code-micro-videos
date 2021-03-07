<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use Traits\Uuid;

    protected $casts = [
        'id' => 'string'
    ];
}
