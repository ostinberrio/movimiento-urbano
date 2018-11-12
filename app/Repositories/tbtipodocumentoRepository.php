<?php

namespace App\Repositories;

use App\Models\tbtipodocumento;
use InfyOm\Generator\Common\BaseRepository;

class tbtipodocumentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tbtipodocumento::class;
    }
}
