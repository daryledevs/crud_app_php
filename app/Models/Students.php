<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    // Too few arguments to function Illuminate\Database\Schema\Blueprint::timestamp()
    public $timestamps = false; // fixed
}
