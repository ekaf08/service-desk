<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subkategori',
        'kategori_layanan',
        'is_prioritas'        
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function keyword(){
        return $this->hasMany(Keyword::class);
    }
}
