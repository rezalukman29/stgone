<?php

namespace App\Repositories\Position;

use App\Models\Position\Position;
use InfyOm\Generator\Common\BaseRepository;

class PositionRepository extends BaseRepository
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
        return Position::class;
    }
}
