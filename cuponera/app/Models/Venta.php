<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $cod_ofertas
 * @property string $cod_cupon
 * @property string $Cod_Dui
 * @property string $estado
 * @property int $cantidad
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	protected $primaryKey = 'cod_ofertas';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int'
	];

	protected $fillable = [
		'cod_cupon',
		'Cod_Dui',
		'estado',
		'cantidad'
	];

	public function promocione()
	{
		return $this->belongsTo(Promocione::class, 'cod_cupon');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'Cod_Dui');
	}
}
