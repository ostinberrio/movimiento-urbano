<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbdepartamentos
 * @package App\Models
 * @version October 20, 2018, 7:23 pm UTC
 */
class tbdepartamentos extends Model
{
    use SoftDeletes;

    public $table = 'tbdepartamentos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombredepartamento',
        'pais_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombredepartamento' => 'string',
        'pais_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombredepartamento' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tbpais()
    {
        return $this->belongsTo(\App\Models\tbpais::class, 'pais_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tbciudades()
    {
        return $this->hasMany(\App\Models\tbciudades::class);
    }
}
