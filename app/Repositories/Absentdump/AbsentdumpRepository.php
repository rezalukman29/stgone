<?php

namespace App\Repositories\Absentdump;

use App\Models\Absentdump\Absentdump;
use InfyOm\Generator\Common\BaseRepository;

class AbsentdumpRepository extends BaseRepository
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
        return Absentdump::class;
    }
}
