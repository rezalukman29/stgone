<?php

namespace App\Models\Suratcuti;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class vw_Suratcuti extends Model
{
    use SoftDeletes;

    public $table = 'vw_suratcuti';
    

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'nik';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nik' => 'integer',
        'name' => 'string',
        'department_id' => 'string',
        'position' => 'string',
        'date' => 'string',
        'days' => 'integer',
        'detail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */

}
