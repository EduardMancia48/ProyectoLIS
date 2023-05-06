<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property int $cod_empleado
 * @property string $nombres
 * @property string $apellidos
 * @property string $correo
 * @property string $contraseña
 * @property string $cod_rol
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleados';
	protected $primaryKey = 'cod_empleado';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cod_empleado' => 'int',
		'cod_rol' => 'binary'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'correo',
		'contraseña',
		'cod_rol'
	];
}
