<?php

namespace App\Models\AsetTaking;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;


class ResumeAset extends Model
{
    // use SoftDeletes;

    public $table = 'vw_resume_aset_taking';
    
    protected $guarded  = ['id'];
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
