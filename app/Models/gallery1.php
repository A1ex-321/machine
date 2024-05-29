<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery1 extends Model
{
    use HasFactory;
    protected $table = 'gallery1';

    protected $fillable = [
        'machineimage', 
    ];
 
}
