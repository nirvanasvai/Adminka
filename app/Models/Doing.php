<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doing extends Model
{
    public $table = 'doings';
    protected $fillable = ['description','title','image'];
}
