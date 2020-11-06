<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyanyi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'genre',
        
    ];

    public function lagu(){
        return $this->hasMany(lagu::class, 'residential_area', 'id');
    }
}
