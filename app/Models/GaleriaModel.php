<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaModel extends Model
{
    use HasFactory;
    protected $table = 'galeria';
    protected $primaryKey = 'id_galeria';
    // protected $fillable = [
    //     'id_usuario',
    //     'mision',
    //     'vision',
    //     'objetivo',
    //     'historia',
    //     'sobre_institucion',
    //     'correo',
    //     'correo2',
    //     'celular1',
    //     'celular2',
    //     'telefono1',
    //     'telefono2',
    //     'facebook',
    //     'youtube',
    //     'ubicacion',
    // ];
    protected $guarded = [];
    public $timestamps = false;
}
