<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\JoshController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Requests\DepartmentRequest;


class DepartmentController extends JoshController
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Grab all the blog category
        $departments = Department::all();
        // Show the page
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(DepartmentRequest $request)
    {
        $department = new Department($request->all());

        if ($department->save()) {
            return redirect('admin/department')->with('success', trans('department/message.success.create'));
        } else {
            return Redirect::route('admin/department')->withInput()->with('error', trans('department/message.error.create'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Department $blogCategory
     * @return Response
     */
    public function edit(Department $department)
    {
        return view('admin.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Department $blogCategory
     * @return Response
     */
    public function update(DepartmentRequest $request, Department $department)
    {
        if ($department->update($request->all())) {
            return redirect('admin/department')->with('success', trans('department/message.success.update'));
        } else {
            return Redirect::route('admin/department')->withInput()->with('error', trans('department/message.error.update'));
        }
    }

    /**
     * Remove blog.
     *
     * @param  Department $blogCategory
     * @return Response
     */
    public function getModalDelete(Department $department)
    {
        $model = 'department';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('admin.department.delete', ['id' => $department->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('department/message.error.delete', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Department $blogCategory
     * @return Response
     */
    public function destroy(Department $department)
    {
        if ($department->delete()) {
            return redirect('admin/department')->with('success', trans('department/message.success.destroy'));
        } else {
            return Redirect::route('admin/department')->withInput()->with('error', trans('department/message.error.delete'));
        }
    }
}
