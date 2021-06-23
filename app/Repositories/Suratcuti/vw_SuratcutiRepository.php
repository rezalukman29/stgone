<?php

namespace App\Repositories\Suratcuti;

use App\Models\Suratcuti\Suratcuti;
use App\Models\Suratcuti\vw_Suratcuti;
use InfyOm\Generator\Common\BaseRepository;

class vw_SuratcutiRepository extends BaseRepository
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
        return vw_Suratcuti::class;
    }
}
