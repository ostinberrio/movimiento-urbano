<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbciudades
 * @package App\Models
 * @version October 20, 2018, 7:28 pm UTC
 */
class tbciudades extends Model
{
    use SoftDeletes;

    public $table = 'tbciudades';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombreciudad',
        'departamentos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombreciudad' => 'string',
        'departamentos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreciudad' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tbdepartamentos()
    {
        return $this->belongsTo(\App\Models\tbdepartamentos::class, 'departamentos_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tbpersonas()
    {
        return $this->hasMany(\App\Models\tbpersonas::class);
    }
}
