<?php

namespace App\Repositories\Aset;

use App\Models\Aset\Aset;
use InfyOm\Generator\Common\BaseRepository;

class AsetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aset::class;
    }
}
