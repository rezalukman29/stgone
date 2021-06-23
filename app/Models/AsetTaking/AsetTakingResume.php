<?php

namespace App\Models\AsetTaking;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;


class AsetTakingResume extends Model
{
    // use SoftDeletes;

    public $table = 'vw_aset_taking_resume';
    
    protected $primaryKey = 'id';
}
  


    // public $fillable = [
    //     'kode',
    //     'remarks',
    //     'tanggal',
    //     'nama',
    //     'alias',
    //     'kategory',
    //     'dept',
    //     'tahun'

    // ];

    // /**
    //  * The attributes that should be casted to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'kode' => 'string',
    //     'remarks' => 'string',
    //     'tanggal' => 'string',
    //     'nama' => 'string',
    //     'alias' => 'string',
    //     'kategory' => 'string',
    //     'dept' => 'string',
    //     'tahun' => 'string'
    // ];

//     /**
//      * Validation rules
//      *
//      * @var array
//      */
//     public static $rules = [
        
//     ];
// }
