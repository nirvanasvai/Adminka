<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $table = 'teams';

    protected $fillable = ['full_name','position','phrase','image'];
}
