<?php

namespace App\Http\Controllers\Admin\Suratcuti;

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

class SuratcutiController extends InfyOmBaseController
{
    /** @var  SuratcutiRepository */
    private $suratcutiRepository;

    /** @var  vw_SuratcutiRepository */
    private $vw_suratcutiRepository;

    public function __construct(SuratcutiRepository $suratcutiRepo,vw_SuratcutiRepository $vw_suratcutiRepo)
    {
        $this->suratcutiRepository = $suratcutiRepo;
        $this->vw_suratcutiRepository = $vw_suratcutiRepo;
    }



    /**
     * Display a listing of the Suratcuti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->vw_suratcutiRepository->pushCriteria(new RequestCriteria($request));
        $vw_suratcuti = $this->vw_suratcutiRepository->all();
        return view('admin.suratcuti.suratcutis.index')
            ->with('vw_suratcuti', $vw_suratcuti);
    }

    /**
     * Show the form for creating a new Suratcuti.
     *
     * @return Response
     */
    public function create()
    {

        $alias = Alias::pluck('alias', 'nik');
  
        return view('admin.suratcuti.suratcutis.create', compact('alias'));
    }

    /**
     * Store a newly created Suratcuti in storage.
     *
     * @param CreateSuratcutiRequest $request
     *
     * @return Response
     */
    public function store(CreateSuratcutiRequest $request)
    {
      
        $input = $request->all();

        $suratcuti = $this->suratcutiRepository->create($input);

        Flash::success('Suratcuti saved successfully.');

        return redirect(route('admin.suratcuti.suratcutis.index'));
    }

    /**
     * Display the specified Suratcuti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $suratcuti = $this->suratcutiRepository->findWithoutFail($id);

        if (empty($suratcuti)) {
            Flash::error('Suratcuti not found');


            return redirect(route('suratcutis.index'));
        }

        return view('admin.suratcuti.suratcutis.show')->with('suratcuti', $suratcuti);
    }

    /**
     * Show the form for editing the specified Suratcuti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $suratcuti = $this->suratcutiRepository->findWithoutFail($id);

        if (empty($suratcuti)) {
            Flash::error('Suratcuti not found');

            return redirect(route('suratcutis.index'));
        }

        return view('admin.suratcuti.suratcutis.edit')->with('suratcuti', $suratcuti);
    }

    /**
     * Update the specified Suratcuti in storage.
     *
     * @param  int              $id
     * @param UpdateSuratcutiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSuratcutiRequest $request)
    {
        $suratcuti = $this->suratcutiRepository->findWithoutFail($id);

        

        if (empty($suratcuti)) {
            Flash::error('Suratcuti not found');

            return redirect(route('suratcutis.index'));
        }

        $suratcuti = $this->suratcutiRepository->update($request->all(), $id);

        Flash::success('Suratcuti updated successfully.');

        return redirect(route('admin.suratcuti.suratcutis.index'));
    }

    /**
     * Remove the specified Suratcuti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.suratcuti.suratcutis.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Suratcuti::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.suratcuti.suratcutis.index'))->with('success', Lang::get('message.success.delete'));

       }

}
