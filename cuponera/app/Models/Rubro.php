<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rubro
 * 
 * @property int $cod_rubro
 * @property string $nombre
 *
 * @package App\Models
 */
class Rubro extends Model
{
	protected $table = 'rubros';
	protected $primaryKey = 'cod_rubro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cod_rubro' => 'int'
	];

	protected $fillable = [
		'nombre'
	];
}
