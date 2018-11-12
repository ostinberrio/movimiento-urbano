<?php

namespace App\Repositories;

use App\Models\tbpais;
use InfyOm\Generator\Common\BaseRepository;

class tbpaisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombrepais'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tbpais::class;
    }
}
