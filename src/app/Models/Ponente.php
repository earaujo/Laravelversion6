<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ponente extends Model
{
    protected $table = "ponentes";
    protected $fillable = [
       'nombre',
       'biografia',
       'especialidad'
    ];
}
