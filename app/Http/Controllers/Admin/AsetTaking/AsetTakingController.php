<?php

namespace App\Http\Controllers\Admin\AsetTaking;

use App\Http\Requests;
// use App\Http\Requests\Aset\CreateAsetRequest;
// use App\Http\Requests\Aset\UpdateAsetRequest;
use App\Repositories\AsetTaking\AsetTakingRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\AsetTaking\Datatable;
use App\Models\AsetTaking\AsetTaking;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;




class AsetTakingController extends Controller
{
    // /** @var  AsetTakingRepository */
    // private $asettakingRepository;

    // public function __construct(AsetTakingRepository $asettakingRepo)
    // {
    //     $this->asettakingRepository = $asettakingRepo;
    // }

    // /**
    //  * Display a listing of the Aset.
    //  *
    //  * @param Request $request
    //  * @return Response
    //  */


    public function index()
    {
        return view('admin.asettaking.asettakings.index');
    }


    public function data()
    {
        $tables = Datatable::get(['id','kode', 'remarks','tanggal','nama','alias', 'kategory','dept','tahun']);

        return DataTables::of($tables)
    
            ->addColumn('delete', '<a class="delete" href="#" data-target="#deleteConfirmModal" data-toggle="modal">Delete Data</a>')
            ->rawColumns(['edit','delete'])
            ->make(true);
    }

    public function destroy($id)
    {
        $row=AsetTaking::find($id);
        $row->delete();
        return $row->id;
    }
    // public function index(Request $request)
    // {

    //     $this->asettakingRepository->pushCriteria(new RequestCriteria($request));
    //     $asettakings = $this->asettakingRepository->all();
    //     return view('admin.asettaking.asettakings.index')
    //         ->with('asettakings', $asettakings);
    // }

    /**
     * Show the form for creating a new Aset.
     *
     * @return Response
     */
    // public function create()
    // {
    //     return view('admin.aset.asets.create');
    // }

    /**
     * Store a newly created Aset in storage.
     *
     * @param CreateAsetRequest $request
     *
     * @return Response
     */
    // public function store(CreateAsetRequest $request)
    // {
    //     $input = $request->all();

    //     $aset = $this->asetRepository->create($input);

    //     Flash::success('Aset saved successfully.');

    //     return redirect(route('admin.aset.asets.index'));
    // }

    /**
     * Display the specified Aset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asettaking = $this->asettakingRepository->findWithoutFail($id);

        if (empty($asettaking)) {
            Flash::error('Aset not found');

            return redirect(route('asettakings.index'));
        }

        return view('admin.asettaking.asettakings.show')->with('asettaking', $asettaking);
    }

    /**
     * Show the form for editing the specified Aset.
     *
     * @param  int $id
     *
     * @return Response
     */
    // public function edit($id)
    // {
    //     $aset = $this->asetRepository->findWithoutFail($id);

    //     if (empty($aset)) {
    //         Flash::error('Aset not found');

    //         return redirect(route('asets.index'));
    //     }

    //     return view('admin.aset.asets.edit')->with('aset', $aset);
    // }

    /**
     * Update the specified Aset in storage.
     *
     * @param  int              $id
     * @param UpdateAsetRequest $request
     *
     * @return Response
     */
    // public function update($id, UpdateAsetRequest $request)
    // {
    //     $aset = $this->asetRepository->findWithoutFail($id);

        

    //     if (empty($aset)) {
    //         Flash::error('Aset not found');

    //         return redirect(route('asets.index'));
    //     }

    //     $aset = $this->asetRepository->update($request->all(), $id);

    //     Flash::success('Aset updated successfully.');

    //     return redirect(route('admin.aset.asets.index'));
    // }

    // /**
    //  * Remove the specified Aset from storage.
    //  *
    //  * @param  int $id
    //  *
    //  * @return Response
    //  */
    //   public function getModalDelete($id = null)
    //   {
    //       $error = '';
    //       $model = '';
    //       $confirm_route =  route('admin.asettaking.asettakings.delete',['id'=>$id]);
    //       return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    //   }

    //    public function getDelete($id = null)
    //    {
    //        $sample = AsetTaking::destroy($id);

    //        // Redirect to the group management page
    //        return redirect(route('admin.asettaking.asettakings.index'))->with('success', Lang::get('message.success.delete'));

    //    }

}
