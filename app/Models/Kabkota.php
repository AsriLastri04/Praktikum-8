<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabkota extends Model
{
    //
    use HasFactory;
    protected $table = 'kabkotas';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude','provinsis_id' ];

    function provinsis(){
        return $this->belongsTo(Provinsi::class);
    }
}

