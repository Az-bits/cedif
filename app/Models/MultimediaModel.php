<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultimediaModel extends Model
{
    use HasFactory;
    protected $table = 'multimedia';
    protected $primaryKey = 'id_multimedia';
    protected $fillable = ['nombre_archivo', 'url', 'extension', 'size', 'estado'];
    protected $guarded = [];
    public $timestamps = false;
}
