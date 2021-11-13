<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Category;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'name', 'nit', 'address', 'phone', 'movil', 'city_id', 'category_id', 'start', 'end', 'user_id', 'description', 'path'
    ];

    public function city()
    {
        return $this->belongsTo( City::class );
    }

    public function category()
    {
        return $this->belongsTo( Category::class );
    }


}
