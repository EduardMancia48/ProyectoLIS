<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property string $Cod_Dui
 * @property string $nombres
 * @property string $apellidos
 * @property string $telefono
 * @property string $correo
 * @property string $direccion
 * @property string $contraseña
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	protected $primaryKey = 'Cod_Dui';

	protected $fillable = [
		'nombres',
		'apellidos',
		'telefono',
		'correo',
		'direccion',
		'contraseña'
	];

	public function ventas(){
		return $this->hasMany(Venta::class,'Cod_Dui');
	}
}
