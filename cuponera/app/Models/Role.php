<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $cod_rol
 * @property string $nombre_rol
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'cod_rol';
	public $timestamps = false;

	protected $fillable = [
		'nombre_rol'
	];
}
