<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
class Vw_Aset_Taking extends Model {


    protected $primaryKey = 'id';
    public $table = 'vw_aset_taking';


  protected $fillable = [
    'kode', 'remarks'
  ];


      /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
      
        'kode' => 'string',
        'remarks' => 'string'
    ];
  
}