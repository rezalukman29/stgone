<?php

namespace App\Http\Controllers\Admin\API;
use App\Http\Requests;
use App\Http\Requests\Suratcuti\CreateSuratcutiRequest;
use App\Http\Requests\Suratcuti\UpdateSuratcutiRequest;
use App\Repositories\Suratcuti\SuratcutiRepository;
use App\Repositories\Suratcuti\vw_SuratcutiRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use App\Models\Addon\Alias;
use Illuminate\Support\Facades\Lang;
use App\Models\Suratcuti\Suratcuti;
use App\Models\Suratcuti\vw_Suratcuti;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Api_Suratcuti extends InfyOmBaseController
{
    public function index(){
        return vw_Suratcuti::all();
    }

     
    public function show($nik)
    {
        // return vw_Suratcuti::find($nik);
        {
            if (vw_Suratcuti::where('nik', $nik)->exists()) {
                $vw_suratcuti = vw_Suratcuti::where('nik', $nik)->get()->toJson(JSON_PRETTY_PRINT);
                return response($vw_suratcuti, 200);
              } else {
                return response()->json([
                  "message" => "Data not found"
                ], 404);
              }
              
            }
    }

}
