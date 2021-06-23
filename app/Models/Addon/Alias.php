<?php

namespace App\Models\Addon;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Alias extends Model
{
    use SoftDeletes;

    public $table = 'vw_employee';
    




    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'alias' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
