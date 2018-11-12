<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetbciudadesRequest;
use App\Http\Requests\UpdatetbciudadesRequest;
use App\Repositories\tbciudadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tbciudadesController extends AppBaseController
{
    /** @var  tbciudadesRepository */
    private $tbciudadesRepository;

    public function __construct(tbciudadesRepository $tbciudadesRepo)
    {
        $this->tbciudadesRepository = $tbciudadesRepo;
    }

    /**
     * Display a listing of the tbciudades.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tbciudadesRepository->pushCriteria(new RequestCriteria($request));
        $tbciudades = $this->tbciudadesRepository->all();

        return view('tbciudades.index')
            ->with('tbciudades', $tbciudades);
    }

    /**
     * Show the form for creating a new tbciudades.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbciudades.create');
    }

    /**
     * Store a newly created tbciudades in storage.
     *
     * @param CreatetbciudadesRequest $request
     *
     * @return Response
     */
    public function store(CreatetbciudadesRequest $request)
    {
        $input = $request->all();

        $tbciudades = $this->tbciudadesRepository->create($input);

        Flash::success('Tbciudades saved successfully.');

        return redirect(route('tbciudades.index'));
    }

    /**
     * Display the specified tbciudades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tbciudades = $this->tbciudadesRepository->findWithoutFail($id);

        if (empty($tbciudades)) {
            Flash::error('Tbciudades not found');

            return redirect(route('tbciudades.index'));
        }

        return view('tbciudades.show')->with('tbciudades', $tbciudades);
    }

    /**
     * Show the form for editing the specified tbciudades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tbciudades = $this->tbciudadesRepository->findWithoutFail($id);

        if (empty($tbciudades)) {
            Flash::error('Tbciudades not found');

            return redirect(route('tbciudades.index'));
        }

        return view('tbciudades.edit')->with('tbciudades', $tbciudades);
    }

    /**
     * Update the specified tbciudades in storage.
     *
     * @param  int              $id
     * @param UpdatetbciudadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetbciudadesRequest $request)
    {
        $tbciudades = $this->tbciudadesRepository->findWithoutFail($id);

        if (empty($tbciudades)) {
            Flash::error('Tbciudades not found');

            return redirect(route('tbciudades.index'));
        }

        $tbciudades = $this->tbciudadesRepository->update($request->all(), $id);

        Flash::success('Tbciudades updated successfully.');

        return redirect(route('tbciudades.index'));
    }

    /**
     * Remove the specified tbciudades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tbciudades = $this->tbciudadesRepository->findWithoutFail($id);

        if (empty($tbciudades)) {
            Flash::error('Tbciudades not found');

            return redirect(route('tbciudades.index'));
        }

        $this->tbciudadesRepository->delete($id);

        Flash::success('Tbciudades deleted successfully.');

        return redirect(route('tbciudades.index'));
    }
}
