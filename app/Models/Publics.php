<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publics extends Model
{
    //public data table name define
    protected $table = 'publics';
    protected $fillable = ['name', 'age', 'city', 'file_path'];

}
