<?php

namespace App\Repositories;

use App\Models\tbpersonas;
use InfyOm\Generator\Common\BaseRepository;

class tbpersonasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'sexo',
        'ndocumento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tbpersonas::class;
    }
}
