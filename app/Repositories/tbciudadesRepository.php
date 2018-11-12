<?php

namespace App\Repositories;

use App\Models\tbciudades;
use InfyOm\Generator\Common\BaseRepository;

class tbciudadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreciudad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tbciudades::class;
    }
}
