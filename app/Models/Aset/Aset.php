<?php

namespace App\Models\Aset;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Aset extends Model
{
    use SoftDeletes;

    public $table = 'Asets';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'kode',
        'nama',
        'alias',
        'kategory',
        'dept',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode' => 'string',
        'nama' => 'string',
        'alias' => 'string',
        'kategory' => 'string',
        'dept' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
