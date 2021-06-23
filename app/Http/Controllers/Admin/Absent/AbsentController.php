<?php

namespace App\Http\Controllers\Admin\Absent;

use App\Http\Requests;
use App\Http\Requests\Absent\CreateAbsentRequest;
use App\Http\Requests\Absent\UpdateAbsentRequest;
use App\Repositories\Absent\AbsentRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Absent\Absent;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbsentController extends InfyOmBaseController
{
    /** @var  AbsentRepository */
    private $absentRepository;

    public function __construct(AbsentRepository $absentRepo)
    {
        $this->absentRepository = $absentRepo;
    }

    /**
     * Display a listing of the Absent.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->absentRepository->pushCriteria(new RequestCriteria($request));
        $absents = $this->absentRepository->all();
        return view('admin.absent.absents.index')
            ->with('absents', $absents);
    }

    /**
     * Show the form for creating a new Absent.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.absent.absents.create');
    }

    /**
     * Store a newly created Absent in storage.
     *
     * @param CreateAbsentRequest $request
     *
     * @return Response
     */
    public function store(CreateAbsentRequest $request)
    {
        $input = $request->all();

        $absent = $this->absentRepository->create($input);

        Flash::success('Absent saved successfully.');

        return redirect(route('admin.absent.absents.index'));
    }

    /**
     * Display the specified Absent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $absent = $this->absentRepository->findWithoutFail($id);

        if (empty($absent)) {
            Flash::error('Absent not found');

            return redirect(route('absents.index'));
        }

        return view('admin.absent.absents.show')->with('absent', $absent);
    }

    /**
     * Show the form for editing the specified Absent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $absent = $this->absentRepository->findWithoutFail($id);

        if (empty($absent)) {
            Flash::error('Absent not found');

            return redirect(route('absents.index'));
        }

        return view('admin.absent.absents.edit')->with('absent', $absent);
    }

    /**
     * Update the specified Absent in storage.
     *
     * @param  int              $id
     * @param UpdateAbsentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbsentRequest $request)
    {
        $absent = $this->absentRepository->findWithoutFail($id);

        

        if (empty($absent)) {
            Flash::error('Absent not found');

            return redirect(route('absents.index'));
        }

        $absent = $this->absentRepository->update($request->all(), $id);

        Flash::success('Absent updated successfully.');

        return redirect(route('admin.absent.absents.index'));
    }

    /**
     * Remove the specified Absent from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.absent.absents.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Absent::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.absent.absents.index'))->with('success', Lang::get('message.success.delete'));

       }

}
