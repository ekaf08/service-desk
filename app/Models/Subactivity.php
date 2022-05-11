<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subactivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'subkegiatan'
    ];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
