<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // table rooms

    protected $table = 'rooms';

    protected $casts = [
        'cofe_tea' => 'boolean',
        'sovutish' => 'boolean',
        'wi_fi' => 'boolean',
        'hojathona' => 'boolean',
        'proyektr' => 'boolean',
        'ovoz_kuch' => 'boolean',
        'kompyuter' => 'boolean',
        'ovqatlanish' => 'boolean'
    ];

    protected $guarded = [];
}
