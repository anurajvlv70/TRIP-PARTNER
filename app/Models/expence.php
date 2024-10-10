<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expence extends Model
{
    use HasFactory;
    protected $fillable = [
        'place',
        'date6',
        'food',
        'room',
        'travel',
        'other',
    ];
}
