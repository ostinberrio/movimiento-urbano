<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbpais
 * @package App\Models
 * @version October 20, 2018, 7:10 pm UTC
 */
class tbpais extends Model
{
    use SoftDeletes;

    public $table = 'tbpais';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombrepais'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombrepais' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombrepais' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tbdepartamentos()
    {
        return $this->hasMany(\App\Models\tbdepartamentos::class);
    }
}
