<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Aset_Taking;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;

class Aset_TakingController extends InfyOmBaseController {

    // public function getAllAset_Taking() {
    //     $aset_taking = Aset_Taking::get()->toJson(JSON_PRETTY_PRINT);
    //     return response($aset_taking, 200);
    //   }

      public function getAllAset_Taking(){
        return Aset_Taking::all();
    }

      public function getAset_Taking($id) {
        if (Aset_Taking::where('id', $id)->exists()) {
          $aset_taking = Aset_Taking::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($aset_taking, 200);
        } else {
          return response()->json([
            "message" => "Book not found"
          ], 404);
        }
      }

      public function createAset_Taking(Request $request) {
        $aset_taking = new Aset_Taking;
        $aset_taking->kode = $request->kode;
        $aset_taking->remarks = $request->remarks;
        $aset_taking->save();
  
        return response()->json([
          "message" => "aset_taking record created"
        ], 201);
      }
    
}