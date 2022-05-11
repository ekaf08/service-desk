<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'kegiatan',
    ];

    public function subactivity(){
        return $this->hasMany(Subactivity::class);
    }


    use HasFactory;
}
