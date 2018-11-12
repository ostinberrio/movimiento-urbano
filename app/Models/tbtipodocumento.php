<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbtipodocumento
 * @package App\Models
 * @version October 20, 2018, 7:15 pm UTC
 */
class tbtipodocumento extends Model
{
    use SoftDeletes;

    public $table = 'tbtipodocumentos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tbpersonas()
    {
        return $this->hasMany(\App\Models\tbpersonas::class);
    }
}
