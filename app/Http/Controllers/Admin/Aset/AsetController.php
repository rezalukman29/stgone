<?php

namespace App\Http\Controllers\Admin\Aset;

use App\Http\Requests;
use App\Http\Requests\Aset\CreateAsetRequest;
use App\Http\Requests\Aset\UpdateAsetRequest;
use App\Repositories\Aset\AsetRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Aset\Aset;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AsetController extends InfyOmBaseController
{
    /** @var  AsetRepository */
    private $asetRepository;

    public function __construct(AsetRepository $asetRepo)
    {
        $this->asetRepository = $asetRepo;
    }

    /**
     * Display a listing of the Aset.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->asetRepository->pushCriteria(new RequestCriteria($request));
        $asets = $this->asetRepository->all();
        return view('admin.aset.asets.index')
            ->with('asets', $asets);
    }

    /**
     * Show the form for creating a new Aset.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.aset.asets.create');
    }

    /**
     * Store a newly created Aset in storage.
     *
     * @param CreateAsetRequest $request
     *
     * @return Response
     */
    public function store(CreateAsetRequest $request)
    {
        $input = $request->all();

        $aset = $this->asetRepository->create($input);

        Flash::success('Aset saved successfully.');

        return redirect(route('admin.aset.asets.index'));
    }

    /**
     * Display the specified Aset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aset = $this->asetRepository->findWithoutFail($id);

        if (empty($aset)) {
            Flash::error('Aset not found');

            return redirect(route('asets.index'));
        }

        return view('admin.aset.asets.show')->with('aset', $aset);
    }

    /**
     * Show the form for editing the specified Aset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aset = $this->asetRepository->findWithoutFail($id);

        if (empty($aset)) {
            Flash::error('Aset not found');

            return redirect(route('asets.index'));
        }

        return view('admin.aset.asets.edit')->with('aset', $aset);
    }

    /**
     * Update the specified Aset in storage.
     *
     * @param  int              $id
     * @param UpdateAsetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsetRequest $request)
    {
        $aset = $this->asetRepository->findWithoutFail($id);

        

        if (empty($aset)) {
            Flash::error('Aset not found');

            return redirect(route('asets.index'));
        }

        $aset = $this->asetRepository->update($request->all(), $id);

        Flash::success('Aset updated successfully.');

        return redirect(route('admin.aset.asets.index'));
    }

    /**
     * Remove the specified Aset from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.aset.asets.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Aset::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.aset.asets.index'))->with('success', Lang::get('message.success.delete'));

       }

}
