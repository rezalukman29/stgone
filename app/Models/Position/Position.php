<?php

namespace App\Models\Position;

use Illuminate\Database\Eloquent\Model;



class Position extends Model
{

    public $table = 'Positions';
    


    public $fillable = [
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
