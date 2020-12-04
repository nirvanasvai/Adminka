<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public $table = 'portfolios';
    protected $fillable = ['main_description','title','image','description','slug','name_project','development_time','languages','description_job','description_about'];

    public function scopeLastPortfolio($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
