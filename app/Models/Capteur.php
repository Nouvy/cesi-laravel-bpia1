<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capteur extends Model
{
    /** @use HasFactory<\Database\Factories\CapteurFactory> */
    use HasFactory;

    protected $fillable = [
        'nom', 'num_serie',
    ];

    public function historique_temperatures()
    {
        return $this->hasMany(HistoriqueTemperature::class);
    }
}
