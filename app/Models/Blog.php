<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string)
 */
class Blog extends Model
{
    public $table='blogs';
    protected $fillable =['title','image','description','full_description','slug'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }
}
