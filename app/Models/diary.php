<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary extends Model
{
    use HasFactory;
    protected $fillable = [
        'u_id',
        'start',
        'end',
        'vehicle',
        'date',
        'date2',
        'friend',
        'image',
    ];
}
