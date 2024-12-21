<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Garment extends Model
{
    protected $table = 'garments';
    protected $fillable = ['name', 'age', 'city'];

}
