<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosModel extends Model
{
    use HasFactory;
    protected $table = 'video';
    protected $primaryKey = 'id_video';
    protected $fillable = ['id_usuario', 'titulo', 'descripcion', 'estado', 'enlace'];
    protected $guarded = [];
    public $timestamps = false;
}
