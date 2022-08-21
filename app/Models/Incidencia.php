<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // para url amigables

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relaciones uno a muchos inversa
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function emergency(){
        return $this->belongsTo(Emergency::class);
    }
    
    public function estatu(){
        return $this->belongsTo(Estatu::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    // Relaciones uno a uno polimórfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    
}
