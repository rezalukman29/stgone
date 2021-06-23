<?php

namespace App\Models\Period;

use Illuminate\Database\Eloquent\Model;



class Period extends Model
{

    public $table = 'Periods';
    


    public $fillable = [
        'period',
        'start',
        'end'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'period' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function absent()
    {
        return $this->hasMany(Absent::class);
    }
}
