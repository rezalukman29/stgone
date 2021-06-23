<?php

namespace App\Http\Controllers\Admin\API;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Requests\Employee\CreateEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Repositories\Employee\EmployeeRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Department\Department;
use App\Models\Position\Position;
use Illuminate\Support\Facades\Lang;
use App\Models\Employee\Employee;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Api_Employee extends InfyOmBaseController
{
    public function index(){
        return Employee::all();
    }

     
    public function show($nik)
    {
        return Employee::find($nik);
    }

}
