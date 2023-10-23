<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Vacuna;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'especie', 'fecha_nacimiento'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vacunas()
    {
        return $this->belongsToMany(Vacuna::class, 'mascota_vacunas')
            ->withPivot('fecha_aplicacion')
            ->withTimestamps();
    }
}
