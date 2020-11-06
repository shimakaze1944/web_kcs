<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lagu extends Model
{
    use HasFactory;

    protected $fillable = [
        'lagu',
        
        'tanggal_rilis',
        'residential_area',
    ];

    public function creator(){
       return $this->belongsTo(penyanyi::class, 'residential_area', 'id');
    }

}