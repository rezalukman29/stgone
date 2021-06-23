<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\AsetTaking\AsetTakingResume;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;

class AsetTakingResumeController extends InfyOmBaseController {

    // public function getAllAset_Taking() {
    //     $aset_taking = Aset_Taking::get()->toJson(JSON_PRETTY_PRINT);
    //     return response($aset_taking, 200);
    //   }

      public function getAllAsetTakingResume(){
        return AsetTakingResume::all();
    }

      public function getAsetTakingResume($id) {
        if (AsetTakingResume::where('id', $id)->exists()) {
          $asettakingresume = AsetTakingResume::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($asettakingresume, 200);
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