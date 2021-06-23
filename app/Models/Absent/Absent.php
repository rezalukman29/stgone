<?php

namespace App\Models\Absent;

use Illuminate\Database\Eloquent\Model;



class Absent extends Model
{

    public $table = 'absents';
    


    public $fillable = [
        'nik',
        'date',
        'absent_in',
        'absent_out',
        'absent_code',
        'shift',
        'detail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nik' => 'integer',
        'absent_in' => 'string',
        'absent_out' => 'string',
        'absent_code' => 'string',
        'shift' => 'string',
        'detail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nik' => 'required',
        'date' => 'required'
    ];
}
