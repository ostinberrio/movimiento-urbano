<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetbdepartamentosRequest;
use App\Http\Requests\UpdatetbdepartamentosRequest;
use App\Repositories\tbdepartamentosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tbdepartamentosController extends AppBaseController
{
    /** @var  tbdepartamentosRepository */
    private $tbdepartamentosRepository;

    public function __construct(tbdepartamentosRepository $tbdepartamentosRepo)
    {
        $this->tbdepartamentosRepository = $tbdepartamentosRepo;
    }

    /**
     * Display a listing of the tbdepartamentos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tbdepartamentosRepository->pushCriteria(new RequestCriteria($request));
        $tbdepartamentos = $this->tbdepartamentosRepository->all();

        return view('tbdepartamentos.index')
            ->with('tbdepartamentos', $tbdepartamentos);
    }

    /**
     * Show the form for creating a new tbdepartamentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbdepartamentos.create');
    }

    /**
     * Store a newly created tbdepartamentos in storage.
     *
     * @param CreatetbdepartamentosRequest $request
     *
     * @return Response
     */
    public function store(CreatetbdepartamentosRequest $request)
    {
        $input = $request->all();

        $tbdepartamentos = $this->tbdepartamentosRepository->create($input);

        Flash::success('Tbdepartamentos saved successfully.');

        return redirect(route('tbdepartamentos.index'));
    }

    /**
     * Display the specified tbdepartamentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tbdepartamentos = $this->tbdepartamentosRepository->findWithoutFail($id);

        if (empty($tbdepartamentos)) {
            Flash::error('Tbdepartamentos not found');

            return redirect(route('tbdepartamentos.index'));
        }

        return view('tbdepartamentos.show')->with('tbdepartamentos', $tbdepartamentos);
    }

    /**
     * Show the form for editing the specified tbdepartamentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tbdepartamentos = $this->tbdepartamentosRepository->findWithoutFail($id);

        if (empty($tbdepartamentos)) {
            Flash::error('Tbdepartamentos not found');

            return redirect(route('tbdepartamentos.index'));
        }

        return view('tbdepartamentos.edit')->with('tbdepartamentos', $tbdepartamentos);
    }

    /**
     * Update the specified tbdepartamentos in storage.
     *
     * @param  int              $id
     * @param UpdatetbdepartamentosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetbdepartamentosRequest $request)
    {
        $tbdepartamentos = $this->tbdepartamentosRepository->findWithoutFail($id);

        if (empty($tbdepartamentos)) {
            Flash::error('Tbdepartamentos not found');

            return redirect(route('tbdepartamentos.index'));
        }

        $tbdepartamentos = $this->tbdepartamentosRepository->update($request->all(), $id);

        Flash::success('Tbdepartamentos updated successfully.');

        return redirect(route('tbdepartamentos.index'));
    }

    /**
     * Remove the specified tbdepartamentos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tbdepartamentos = $this->tbdepartamentosRepository->findWithoutFail($id);

        if (empty($tbdepartamentos)) {
            Flash::error('Tbdepartamentos not found');

            return redirect(route('tbdepartamentos.index'));
        }

        $this->tbdepartamentosRepository->delete($id);

        Flash::success('Tbdepartamentos deleted successfully.');

        return redirect(route('tbdepartamentos.index'));
    }
}
