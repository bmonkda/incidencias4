<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // para url amigables
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relaciones uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
}
