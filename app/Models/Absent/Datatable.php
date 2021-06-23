<?php

namespace App\Models\Absent;

use Illuminate\Database\Eloquent\Model;

class Datatable extends Model
{
    protected $table = 'vw_absent';

    // protected $guarded  = ['id'];

    protected $primaryKey = 'nik';


    
// public function period()
// {
//     return $this->belongsTo(Period::class, 'period');
// }

// public function getPeriodAttribute()
// {
//     return $this->category->pluck('period');
// }


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

protected $casts = [
    'nik' => 'integer',
    'date' => 'string',
    'absent_in' => 'string',
    'absent_out' => 'string',
    'absent_code' => 'string',
    'shift' => 'string',
    'period_salary' => 'string'
];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
}


