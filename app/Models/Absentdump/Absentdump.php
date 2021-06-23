<?php

namespace App\Models\Absentdump;

use Illuminate\Database\Eloquent\Model;



class Absentdump extends Model
{

    public $table = 'absentdumps';
    


    public $fillable = [
        'date',
        'nik',
        'code',
        'hour'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'string',
        'nik' => 'string',
        'code' => 'integer',
        'hour' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
