<?php

namespace App\Http\Controllers\Admin\Period;

use App\Http\Requests;
use App\Http\Requests\Period\CreatePeriodRequest;
use App\Http\Requests\Period\UpdatePeriodRequest;
use App\Repositories\Period\PeriodRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Period\Period;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PeriodController extends InfyOmBaseController
{
    /** @var  PeriodRepository */
    private $periodRepository;

    public function __construct(PeriodRepository $periodRepo)
    {
        $this->periodRepository = $periodRepo;
    }

    /**
     * Display a listing of the Period.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->periodRepository->pushCriteria(new RequestCriteria($request));
        $periods = $this->periodRepository->all();
        return view('admin.period.periods.index')
            ->with('periods', $periods);
    }

    /**
     * Show the form for creating a new Period.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.period.periods.create');
    }

    /**
     * Store a newly created Period in storage.
     *
     * @param CreatePeriodRequest $request
     *
     * @return Response
     */
    public function store(CreatePeriodRequest $request)
    {
        $input = $request->all();

        $period = $this->periodRepository->create($input);

        Flash::success('Period saved successfully.');

        return redirect(route('admin.period.periods.index'));
    }

    /**
     * Display the specified Period.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $period = $this->periodRepository->findWithoutFail($id);

        if (empty($period)) {
            Flash::error('Period not found');

            return redirect(route('periods.index'));
        }

        return view('admin.period.periods.show')->with('period', $period);
    }

    /**
     * Show the form for editing the specified Period.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $period = $this->periodRepository->findWithoutFail($id);

        if (empty($period)) {
            Flash::error('Period not found');

            return redirect(route('periods.index'));
        }

        return view('admin.period.periods.edit')->with('period', $period);
    }

    /**
     * Update the specified Period in storage.
     *
     * @param  int              $id
     * @param UpdatePeriodRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeriodRequest $request)
    {
        $period = $this->periodRepository->findWithoutFail($id);

        

        if (empty($period)) {
            Flash::error('Period not found');

            return redirect(route('periods.index'));
        }

        $period = $this->periodRepository->update($request->all(), $id);

        Flash::success('Period updated successfully.');

        return redirect(route('admin.period.periods.index'));
    }

    /**
     * Remove the specified Period from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.period.periods.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Period::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.period.periods.index'))->with('success', Lang::get('message.success.delete'));

       }

}
