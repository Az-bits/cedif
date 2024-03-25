<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
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
            'r.nombre as rol'
        )
            ->from('users as u')
            ->leftJoin('persona as p', 'p.id_persona', '=', 'u.id_persona')
            ->leftJoin('persona_rol as pr', 'pr.id_persona', '=', 'p.id_persona')
            ->leftJoin('roles as r', 'r.id_rol', '=', 'pr.id_rol');
        if ($id !== null) {
            // Si se proporciona un ID, aplicamos un filtro WHERE
            $query->where('id', $id);
            return $query->first();
        } else {
            // Si no se proporciona un ID, aplicamos otras condiciones
            $query->whereIn('u.estado', ['1', '2']);
            $users = $query->get();
            return $users;
        }
    }
}
