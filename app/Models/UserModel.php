<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'name',
        'password',
        'estado',
        'id_persona',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function getUsers($id = null)
    {
        $query = $this->select(
            'id',
            'password',
            'u.id_persona',
            'u.email',
            'u.estado',
            'p.nombre',
            'p.paterno',
            'p.materno',
            'r.nombre as rol',
            'r.id_rol'
        )
            ->from('users as u')
            ->leftJoin('persona as p', 'p.id_persona', '=', 'u.id_persona')
            // ->leftJoin('persona_rol as pr', 'pr.id_persona', '=', 'p.id_persona')
            ->leftJoin('persona_rol as pr', 'pr.id_user', '=', 'u.id')
            ->leftJoin('roles as r', 'r.id_rol', '=', 'pr.id_rol');
        if ($id !== null) {
            // Si se proporciona un ID, aplicamos un filtro WHERE
            $query->where('id', $id);
            return $query->first();
        } else {
            // Si no se proporciona un ID, aplicamos otras condiciones
            $query->whereIn('u.estado', ['1', '2'])->whereNot('u.id_persona', '1');
            $users = $query->get();
            return $users;
        }
    }
}
