<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido_Paterno
 * @property $Apellido_Materno
 * @property $Correo
 * @property $Rol
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'Nombre' => 'required|string',
		'Apellido_Paterno' => 'required|string',
		'Apellido_Materno' => 'required|string',
		'Correo' => 'required|string',
		'Rol' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido_Paterno','Apellido_Materno','Correo','Rol'];



}
