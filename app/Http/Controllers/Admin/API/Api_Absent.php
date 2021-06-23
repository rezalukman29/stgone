<?php

namespace App\Http\Controllers\Admin\API;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Requests\Absent\CreateAbsentRequest;
use App\Http\Requests\Absent\UpdateAbsentRequest;
use App\Repositories\Absent\AbsentRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Absent\Datatable;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Api_Absent extends InfyOmBaseController
{

    

    public function index()
    {
      return Datatable::all();
    }

     
    // public function show($nik)
    // {
    //     $datatable=Datatable::find($nik);
    //     if(is_null($datatable))
    //     {
    //          return Response::json("not found",404);
    //     }
     
    //     return Response::json($datatable,200);
    // }


    public function show($nik)

    {
    if (Datatable::where('nik', $nik)->exists()) {
        $datatable = Datatable::where('nik', $nik)->get();
        return response($datatable);
      } else {
        return response()->json([
          "message" => "Data not found"
        ], 404);
      }
      
    }
    
}
