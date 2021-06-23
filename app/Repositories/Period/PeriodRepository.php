<?php

namespace App\Repositories\Period;

use App\Models\Period\Period;
use InfyOm\Generator\Common\BaseRepository;

class PeriodRepository extends BaseRepository
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
        return Period::class;
    }
}
