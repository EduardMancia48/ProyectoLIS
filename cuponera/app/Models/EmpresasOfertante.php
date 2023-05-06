<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmpresasOfertante
 * 
 * @property string $cod_empresa
 * @property string $nombre_empresa
 * @property string $direccion
 * @property string $nombre_contacto
 * @property string $telefono
 * @property string $correo
 * @property float $porc_comision
 * @property int $cod_rubro
 * @property string $cod_cupon
 * @property int $cod_empleado
 *
 * @package App\Models
 */
class EmpresasOfertante extends Model
{
	protected $table = 'empresas_ofertantes';
	protected $primaryKey = 'cod_empresa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'porc_comision' => 'float',
		'cod_rubro' => 'int',
		'cod_empleado' => 'int'
	];

	protected $fillable = [
		'nombre_empresa',
		'direccion',
		'nombre_contacto',
		'telefono',
		'correo',
		'porc_comision',
		'cod_rubro',
		'cod_cupon',
		'cod_empleado'
	];
}
