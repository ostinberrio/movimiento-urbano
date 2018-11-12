<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetbpersonasRequest;
use App\Http\Requests\UpdatetbpersonasRequest;
use App\Repositories\tbpersonasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tbpersonasController extends AppBaseController
{
    /** @var  tbpersonasRepository */
    private $tbpersonasRepository;

    public function __construct(tbpersonasRepository $tbpersonasRepo)
    {
        $this->tbpersonasRepository = $tbpersonasRepo;
    }

    /**
     * Display a listing of the tbpersonas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tbpersonasRepository->pushCriteria(new RequestCriteria($request));
        $tbpersonas = $this->tbpersonasRepository->all();

        return view('tbpersonas.index')
            ->with('tbpersonas', $tbpersonas);
    }

    /**
     * Show the form for creating a new tbpersonas.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbpersonas.create');
    }

    /**
     * Store a newly created tbpersonas in storage.
     *
     * @param CreatetbpersonasRequest $request
     *
     * @return Response
     */
    public function store(CreatetbpersonasRequest $request)
    {
        $input = $request->all();

        $tbpersonas = $this->tbpersonasRepository->create($input);

        Flash::success('Tbpersonas saved successfully.');

        return redirect(route('tbpersonas.index'));
    }

    /**
     * Display the specified tbpersonas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tbpersonas = $this->tbpersonasRepository->findWithoutFail($id);

        if (empty($tbpersonas)) {
            Flash::error('Tbpersonas not found');

            return redirect(route('tbpersonas.index'));
        }

        return view('tbpersonas.show')->with('tbpersonas', $tbpersonas);
    }

    /**
     * Show the form for editing the specified tbpersonas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tbpersonas = $this->tbpersonasRepository->findWithoutFail($id);

        if (empty($tbpersonas)) {
            Flash::error('Tbpersonas not found');

            return redirect(route('tbpersonas.index'));
        }

        return view('tbpersonas.edit')->with('tbpersonas', $tbpersonas);
    }

    /**
     * Update the specified tbpersonas in storage.
     *
     * @param  int              $id
     * @param UpdatetbpersonasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetbpersonasRequest $request)
    {
        $tbpersonas = $this->tbpersonasRepository->findWithoutFail($id);

        if (empty($tbpersonas)) {
            Flash::error('Tbpersonas not found');

            return redirect(route('tbpersonas.index'));
        }

        $tbpersonas = $this->tbpersonasRepository->update($request->all(), $id);

        Flash::success('Tbpersonas updated successfully.');

        return redirect(route('tbpersonas.index'));
    }

    /**
     * Remove the specified tbpersonas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tbpersonas = $this->tbpersonasRepository->findWithoutFail($id);

        if (empty($tbpersonas)) {
            Flash::error('Tbpersonas not found');

            return redirect(route('tbpersonas.index'));
        }

        $this->tbpersonasRepository->delete($id);

        Flash::success('Tbpersonas deleted successfully.');

        return redirect(route('tbpersonas.index'));
    }
}
