<?php

namespace App\Repositories\Suratcuti;

use App\Models\Suratcuti\Suratcuti;
use InfyOm\Generator\Common\BaseRepository;

class SuratcutiRepository extends BaseRepository
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
        return Suratcuti::class;
    }
}
