<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueTemperature extends Model
{
    /** @use HasFactory<\Database\Factories\HistoriqueTemperatureFactory> */
    use HasFactory;

    protected $fillable = ['temperature', 'capteur_id'];

    public function capteur()
    {
        return $this->belongsTo(Capteur::class);
    }
}
