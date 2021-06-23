<?php

namespace App\Repositories\Absent;

use App\Models\Absent\Absent;
use InfyOm\Generator\Common\BaseRepository;

class AbsentRepository extends BaseRepository
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
        return Absent::class;
    }
}
