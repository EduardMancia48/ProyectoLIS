<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocione
 * 
 * @property string $cod_cupon
 * @property string $titulo_oferta
 * @property float $precio_regular
 * @property float $precio_oferta
 * @property Carbon $fecha_inicio
 * @property Carbon $fecha_fin
 * @property Carbon $fecha_limite
 * @property string $descripcion
 * @property string $estado
 * @property int $cant_cupones_disponibles
 * @property string $imagen
 * @property int $cod_ofertas
 *
 * @package App\Models
 */
class Promocione extends Model
{
	protected $table = 'promociones';
	protected $primaryKey = 'cod_cupon';

	protected $casts = [
		'precio_regular' => 'float',
		'precio_oferta' => 'float',
		'fecha_inicio' => 'datetime',
		'fecha_fin' => 'datetime',
		'fecha_limite' => 'datetime',
		'cant_cupones_disponibles' => 'int',
		'cod_ofertas' => 'int'
	];

	protected $fillable = [
		'titulo_oferta',
		'precio_regular',
		'precio_oferta',
		'fecha_inicio',
		'fecha_fin',
		'fecha_limite',
		'descripcion',
		'estado',
		'cant_cupones_disponibles',
		'imagen',
		'cod_ofertas'
	];

	public function ventas(){
		return $this->hasMany(Venta::class,'cod_cupon');
	}
}
