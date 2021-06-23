<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;



class Employee extends Model
{

    public $table = 'tbl_m_employee';
    

    protected $primaryKey = 'nik';

    public $fillable = [
        'nik',
        'name',
        'department_id',
        'position',
        'shift',
        'gender',
        'company'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nik' => 'string',
        'name' => 'string',
        'department_id' => 'string',
        'position' => 'string',
        'shift' => 'string',
        'gender' => 'string',
        'company' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];    
    
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getBlogcategoryAttribute()
    {
        return $this->category->pluck('id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function getDepartmentAttribute()
    {
        return $this->department->pluck('title');
    }

    
    public function position()
    {
        return $this->belongsTo(Position::class, 'position');
    }


        
    public function alias()
    {
        return $this->belongsTo(Alias::class, 'nik');
    }

    public function suratcuti()
    {
        return $this->belongsTo(Suratcuti::class, 'nik');
    }

    
    public function absent()
    {
        return $this->belongsTo(Absent::class, 'nik');
    }



}
