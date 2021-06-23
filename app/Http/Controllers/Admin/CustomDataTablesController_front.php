<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datatable;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Sentinel;

class CustomDataTablesController_front extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $professions=Datatable::pluck('nik', 'nik');
        $professions['all']='Select All';
        $user = Sentinel::getUser();

        $max_count =Datatable::all()->count();   // We can pass max count for slider
        $max_id =Datatable::pluck('id')->max();
        $min_id =Datatable::pluck('id')->min();
        return view('history_cuti', compact('professions', 'max_count', 'max_id', 'user'));
    }

    public function sliderData(Request $request)
    {
        if ($request->idSlider!=null) {
            $tables = Datatable::whereBetween('id', $request->idSlider)->get(['id', 'firstname', 'lastname', 'email','job','age']);
        } else {
            $tables = Datatable::get(['id', 'firstname', 'lastname', 'email', 'job', 'age']);
        }

        return Datatables::of($tables)
            ->make(true);
    }
    public function radioData(Request $request)
    {
        if ($request->ageRadio!=null && $request->ageRadio !='all') {
            if ($request->ageRadio < 100) {
                $tables = Datatable::where('age', '<=', $request->ageRadio)->get(['id', 'firstname', 'lastname', 'email','job','age']);
            } else {
                $tables = Datatable::where('age', '>', 50)->get(['id', 'firstname', 'lastname', 'email','job','age']);
            }
        } else {
            $tables = Datatable::get(['id', 'firstname', 'lastname', 'email', 'job', 'age']);
        }

        return Datatables::of($tables)
            ->make(true);
    }
    public function selectData(Request $request)
    {
        if ($request->professionSelect != null && $request->professionSelect != "all") {
            $tables = Datatable::where('nik', $request->professionSelect);
        } else {
            $tables = Datatable::get(['id', 'nik', 'name', 'date', 'detail', 'created_at']);
        }
        return DataTables::of($tables)
            ->make(true);
    }
    public function buttonData(Request $request)
    {
        if ($request->jobButton!=null) {
            $tables=Datatable::where('gender', $request->jobButton)->get(['id', 'firstname', 'lastname', 'email', 'job', 'age','gender']);
        } else {
            $tables = Datatable::get(['id', 'firstname', 'lastname', 'email', 'job', 'age','gender']);
        }

        return Datatables::of($tables)
            ->make(true);
    }
    public function totalData(Request $request)
    {
        $tables = Datatable::where(
            function ($query) use ($request) {
                if ($request->has('idSlider2') && $request->idSlider2!=null) {
                    $query->whereBetween('id', $request->idSlider2);
                }
                if ($request->has('ageRadio2') && $request->ageRadio2 != null && $request->ageRadio2 != 'all') {
                    if ($request->ageRadio2 < 100) {
                        $query->where('age', '<=', $request->ageRadio2);
                    } else {
                        $query->where('age', '>', 50);
                    }
                     $query->where('age', '<=', $request->ageRadio2);
                }
                if ($request->has('professionSelect2') && $request->professionSelect2 != null && $request->professionSelect2 != "all") {
                    $query->where('id', $request->professionSelect2);
                }
                if ($request->has('jobButton2') && $request->jobButton2 != null) {
                    $query->where('gender', $request->jobButton2);
                }
            }
        )->get(['id', 'firstname', 'lastname', 'email','job','age','gender']);

        return Datatables::of($tables)
            ->make(true);
    }
}
