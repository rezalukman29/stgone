<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Vw_Aset_Taking;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;

class Vw_Aset_TakingController extends InfyOmBaseController {

    // public function getAllAset_Taking() {
    //     $aset_taking = Aset_Taking::get()->toJson(JSON_PRETTY_PRINT);
    //     return response($aset_taking, 200);
    //   }

      public function getAllAset_Taking(){
        return Vw_Aset_Taking::all();
    }

      public function getAset_Taking($id) {
        if (Vw_Aset_Taking::where('id', $id)->exists()) {
          $vw_aset_taking = Vw_Aset_Taking::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($vw_aset_taking, 200);
        } else {
          return response()->json([
            "message" => "Book not found"
          ], 404);
        }
      }

      // public function createAset_Taking(Request $request) {
      //   $aset_taking = new Aset_Taking;
      //   $aset_taking->kode = $request->kode;
      //   $aset_taking->remarks = $request->remarks;
      //   $aset_taking->save();
  
      //   return response()->json([
      //     "message" => "aset_taking record created"
      //   ], 201);
      // }
    
}