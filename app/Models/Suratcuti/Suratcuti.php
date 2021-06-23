<?php

namespace App\Models\Suratcuti;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Suratcuti extends Model
{
    use SoftDeletes;

    public $table = 'suratcutis';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nik',
        'datestart',
        'dateend',
        'days',
        'detail',
        'stockstart',
        'stockend'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nik' => 'integer',
        'days' => 'integer',
        'detail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nik' => 'required',
        'datestart' => 'required',
        'dateend' => 'required'
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
