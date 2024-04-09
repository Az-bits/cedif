<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    use HasFactory;
    protected $table = 'contacto';
    protected $primaryKey = 'id_contacto';
    protected $fillable = ['id_usuario', 'nombre', 'email', 'celular', 'descripcion', 'parentesco', 'estado', 'ci', 'estado', 'ip_cliente'];
    protected $guarded = [];
    public $timestamps = false;
}
