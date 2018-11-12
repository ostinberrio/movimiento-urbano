<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbpersonas
 * @package App\Models
 * @version October 20, 2018, 7:50 pm UTC
 */
class tbpersonas extends Model
{
    use SoftDeletes;

    public $table = 'tbpersonas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'sexo',
        'ciudades_id',
        'tipodocumentos_id',
        'ndocumento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellidos' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'sexo' => 'string',
        'ciudades_id' => 'integer',
        'tipodocumentos_id' => 'integer',
        'ndocumento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'telefono' => 'required',
        'sexo' => 'required',
        'ndocumento' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tbciudades()
    {
        return $this->belongsTo(\App\Models\tbciudades::class, 'ciudades_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tbtipodocumentos()
    {
        return $this->belongsTo(\App\Models\tbtipodocumentos::class, 'tipodocumentos_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tbuserapps()
    {
        return $this->hasMany(\App\Models\tbuserapp::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tbmanagers()
    {
        return $this->hasMany(\App\Models\tbmanager::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tbartistas()
    {
        return $this->hasMany(\App\Models\tbartistas::class);
    }
}
