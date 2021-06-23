<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Department extends Model
{
    use SoftDeletes;

    public $table = 'Departments';
    

    protected $dates = ['deleted_at'];


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
