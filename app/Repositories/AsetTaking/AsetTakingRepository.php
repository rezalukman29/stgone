<?php

namespace App\Repositories\AsetTaking;

use App\Models\AsetTaking\AsetTaking;
use InfyOm\Generator\Common\BaseRepository;

class AsetTakingRepository extends BaseRepository
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
        return AsetTaking::class;
    }
}
