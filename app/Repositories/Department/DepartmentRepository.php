<?php

namespace App\Repositories\Department;

use App\Models\Department\Department;
use InfyOm\Generator\Common\BaseRepository;

class DepartmentRepository extends BaseRepository
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
        return Department::class;
    }
}
