<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $table = 'booking';

    protected $fillable = [
        'name',
        'from_address',
        'to_address',
        'price',
        'date',
    ];
}
