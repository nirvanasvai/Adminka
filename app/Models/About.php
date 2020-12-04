<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $table = 'abouts';
    protected $fillable = ['right_description','left_description','image','description_title_up','description_title_down',];
}
