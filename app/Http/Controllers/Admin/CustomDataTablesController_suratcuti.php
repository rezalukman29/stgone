<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Suratcuti\vw_Suratcuti;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CustomDataTablesController_suratcuti extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $nik=vw_Suratcuti::pluck('nik', 'nik');
        $nik['all']='Select All';

        return view('admin.employee.employees.show', compact('nik'));
    }

 
    public function selectDataCuti(Request $request)
    {
        if ($request->nikSelect != null && $request->nikSelect != "all") {
            $tables = vw_Suratcuti::where('nik', $request->nikSelect);
        } else {
            $tables = vw_Suratcuti::get(['id', 'nik', 'name', 'date', 'detail', 'created_at']);
        }
        return vw_Suratcuti::of($tables)
            ->make(true);
    }

    
}
