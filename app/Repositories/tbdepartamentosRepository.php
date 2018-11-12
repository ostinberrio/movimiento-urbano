<?php

namespace App\Repositories;

use App\Models\tbdepartamentos;
use InfyOm\Generator\Common\BaseRepository;

class tbdepartamentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombredepartamento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tbdepartamentos::class;
    }
}
