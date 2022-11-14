<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $destinatario
 * @property $estado
 * @property $peso
 * @property $descripcion
 * @property $contacto
 * @property $id_servicio
 * @property $id_vehiculo
 * @property $id_precio
 * @property $id_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @property Precio $precio
 * @property Servicio $servicio
 * @property User $user
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'destinatario' => 'required',
		'estado' => 'required',
		'peso' => 'required',
		'descripcion' => 'required',
		'contacto' => 'required',
		'id_servicio' => 'required',
		'id_precio' => 'required',
		'id_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['destinatario','estado','peso','descripcion','contacto','id_servicio','id_vehiculo','id_precio','id_cliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function precio()
    {
        return $this->hasOne('App\Models\Precio', 'id', 'id_precio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'id_servicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'patente', 'id_vehiculo');
    }
    

}
