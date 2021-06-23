<?php

namespace App\Http\Controllers\Admin\Absentdump;

use App\Http\Requests;
use App\Http\Requests\Absentdump\CreateAbsentdumpRequest;
use App\Http\Requests\Absentdump\UpdateAbsentdumpRequest;
use App\Repositories\Absentdump\AbsentdumpRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Absentdump\Absentdump;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbsentdumpController extends InfyOmBaseController
{
    /** @var  AbsentdumpRepository */
    private $absentdumpRepository;

    public function __construct(AbsentdumpRepository $absentdumpRepo)
    {
        $this->absentdumpRepository = $absentdumpRepo;
    }

    /**
     * Display a listing of the Absentdump.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->absentdumpRepository->pushCriteria(new RequestCriteria($request));
        $absentdumps = $this->absentdumpRepository->all();
        return view('admin.absentdump.absentdumps.index')
            ->with('absentdumps', $absentdumps);
    }

    /**
     * Show the form for creating a new Absentdump.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.absentdump.absentdumps.create');
    }

    /**
     * Store a newly created Absentdump in storage.
     *
     * @param CreateAbsentdumpRequest $request
     *
     * @return Response
     */
    public function store(CreateAbsentdumpRequest $request)
    {
        $input = $request->all();

        $absentdump = $this->absentdumpRepository->create($input);

        Flash::success('Absentdump saved successfully.');

        return redirect(route('admin.absentdump.absentdumps.index'));
    }

    /**
     * Display the specified Absentdump.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $absentdump = $this->absentdumpRepository->findWithoutFail($id);

        if (empty($absentdump)) {
            Flash::error('Absentdump not found');

            return redirect(route('absentdumps.index'));
        }

        return view('admin.absentdump.absentdumps.show')->with('absentdump', $absentdump);
    }

    /**
     * Show the form for editing the specified Absentdump.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $absentdump = $this->absentdumpRepository->findWithoutFail($id);

        if (empty($absentdump)) {
            Flash::error('Absentdump not found');

            return redirect(route('absentdumps.index'));
        }

        return view('admin.absentdump.absentdumps.edit')->with('absentdump', $absentdump);
    }

    /**
     * Update the specified Absentdump in storage.
     *
     * @param  int              $id
     * @param UpdateAbsentdumpRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbsentdumpRequest $request)
    {
        $absentdump = $this->absentdumpRepository->findWithoutFail($id);

        

        if (empty($absentdump)) {
            Flash::error('Absentdump not found');

            return redirect(route('absentdumps.index'));
        }

        $absentdump = $this->absentdumpRepository->update($request->all(), $id);

        Flash::success('Absentdump updated successfully.');

        return redirect(route('admin.absentdump.absentdumps.index'));
    }

    /**
     * Remove the specified Absentdump from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.absentdump.absentdumps.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Absentdump::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.absentdump.absentdumps.index'))->with('success', Lang::get('message.success.delete'));

       }

}
