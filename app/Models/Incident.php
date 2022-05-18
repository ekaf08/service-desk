<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function operator()
    {
        return $this->belongsTo(User::class);
    }

    public function teknisi()
    {
        return $this->belongsTo(TechnicianIncident::class, 'teknisi_pj_id');
    }

    public function kategoris()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }

    public function logincident(){
        return $this->hasMany(LogIncident::class);
    }
}
