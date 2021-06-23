<?php

namespace App\Http\Controllers\Admin\Employee;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Requests\Employee\CreateEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Repositories\Employee\EmployeeRepository;
use App\Repositories\Suratcuti\SuratcutiRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Department\Department;
use App\Models\Suratcuti\Suratcuti;
use App\Models\Position\Position;
use App\Models\Addon\Alias;
use Illuminate\Support\Facades\Lang;
use App\Models\Employee\Employee;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmployeeController extends InfyOmBaseController
{
    /** @var  EmployeeRepository */
    private $employeeRepository;
  

    public function __construct(EmployeeRepository $employeeRepo)
    {
        $this->employeeRepository = $employeeRepo;
   
    }

    /**
     * Display a listing of the Employee.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->employeeRepository->pushCriteria(new RequestCriteria($request));
        $employees = $this->employeeRepository->all();
        return view('admin.employee.employees.index')
            ->with('employees', $employees);
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return Response
     */
    public function create()
    {
        $department = Department::pluck('title', 'title');
        $position = Position::pluck('title', 'title');
        $alias = Alias::pluck('alias', 'alias');
        return view('admin.employee.employees.create', compact('department','position','alias'));
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param CreateEmployeeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        $input = $request->all();

        $employee = $this->employeeRepository->create($input);

        Flash::success('Employee saved successfully.');

        return redirect(route('admin.employee.employees.index'))->with('success', Lang::get('message.success.delete'));
    }

    /**
     * Display the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($nik)
    {
        $employee = $this->employeeRepository->findWithoutFail($nik);


        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        // return view('admin.employee.employees.show')->with('employee', $employee->with('suratcuti', $suratcuti));
        return view('admin.employee.employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employee = $this->employeeRepository->findWithoutFail($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }
        $department = Department::pluck('title', 'title');
        $position = Position::pluck('title', 'title');
        
        return view('admin.employee.employees.edit', compact('employee', 'department'))->with('employee', $employee)->with('department', $department)->with('position', $position);
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeRequest $request)
    {
        $employee = $this->employeeRepository->findWithoutFail($id);

        

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $employee = $this->employeeRepository->update($request->all(), $id);

        Flash::success('Employee updated successfully.');

        return redirect(route('admin.employee.employees.index'));
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.employee.employees.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Employee::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.employee.employees.index'))->with('success', Lang::get('message.success.delete'));

       }



}
