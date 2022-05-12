<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_opd'
    ];

    public function incident(){
        return $this->hasMany(Incident::class);
    }
}
