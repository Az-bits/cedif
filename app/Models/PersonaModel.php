<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaModel extends Model
{
    use HasFactory;
    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    protected $fillable = ['ci', 'expedido', 'fecha_nac', 'nombre', 'paterno', 'materno', 'email', 'celular', 'estado'];
    protected $guarded = [];
    public $timestamps = false;
}
