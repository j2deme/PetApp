<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mascota;

class Vacuna extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'fabricante', 'tipo'];

    public function mascotas()
    {
        return $this->belongsToMany(Mascota::class, 'mascota_vacunas')
            ->withPivot('fecha_aplicacion')
            ->withTimestamps();
    }
}
