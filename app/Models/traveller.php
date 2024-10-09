<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traveller extends Model
{
    use HasFactory;
    protected $fillable = [
        'u_id',
        'start',
        'end',
        'people',
        'vehicle',
        'date',
        'date2',
       
    ];
}
