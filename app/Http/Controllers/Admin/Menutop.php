<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datatable\Datatable;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Sentinel;


class Menutop extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = Sentinel::getUser();
        // $professions=Datatable::pluck('period', 'period');
        // $professions['all']='Select All';

        return view('/layouts/default', compact('user'));
    }
//     public function totalData(Request $request)
//     {
//         $tables = Datatable::where(
//             function ($query) use ($request) {
      
             
//                 if ($request->has('countrySelect') && $request->countrySelect != null && $request->countrySelect != "all") {
//                     $query->where('nik', $request->countrySelect);
//                 }
//                 if ($request->has('professionSelect2') && $request->professionSelect2 != null && $request->professionSelect2 != "all") {
//                     $query->where('period', $request->professionSelect2);
//                 }
          
//             }
//             )->get(['id', 'nik', 'date', 'absent_in', 'absent_out', 'absent_code','shift','detail']);

//         return Datatables::of($tables)
//             ->make(true);
//     }
// }

}