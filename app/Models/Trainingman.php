<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainingman extends Model
{
    use HasFactory;
    protected $fillable = ['logo','pdf','title','link'];
}
