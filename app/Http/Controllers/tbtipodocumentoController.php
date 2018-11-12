<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetbtipodocumentoRequest;
use App\Http\Requests\UpdatetbtipodocumentoRequest;
use App\Repositories\tbtipodocumentoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tbtipodocumentoController extends AppBaseController
{
    /** @var  tbtipodocumentoRepository */
    private $tbtipodocumentoRepository;

    public function __construct(tbtipodocumentoRepository $tbtipodocumentoRepo)
    {
        $this->tbtipodocumentoRepository = $tbtipodocumentoRepo;
    }

    /**
     * Display a listing of the tbtipodocumento.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tbtipodocumentoRepository->pushCriteria(new RequestCriteria($request));
        $tbtipodocumentos = $this->tbtipodocumentoRepository->all();

        return view('tbtipodocumentos.index')
            ->with('tbtipodocumentos', $tbtipodocumentos);
    }

    /**
     * Show the form for creating a new tbtipodocumento.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbtipodocumentos.create');
    }

    /**
     * Store a newly created tbtipodocumento in storage.
     *
     * @param CreatetbtipodocumentoRequest $request
     *
     * @return Response
     */
    public function store(CreatetbtipodocumentoRequest $request)
    {
        $input = $request->all();

        $tbtipodocumento = $this->tbtipodocumentoRepository->create($input);

        Flash::success('Tbtipodocumento saved successfully.');

        return redirect(route('tbtipodocumentos.index'));
    }

    /**
     * Display the specified tbtipodocumento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tbtipodocumento = $this->tbtipodocumentoRepository->findWithoutFail($id);

        if (empty($tbtipodocumento)) {
            Flash::error('Tbtipodocumento not found');

            return redirect(route('tbtipodocumentos.index'));
        }

        return view('tbtipodocumentos.show')->with('tbtipodocumento', $tbtipodocumento);
    }

    /**
     * Show the form for editing the specified tbtipodocumento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tbtipodocumento = $this->tbtipodocumentoRepository->findWithoutFail($id);

        if (empty($tbtipodocumento)) {
            Flash::error('Tbtipodocumento not found');

            return redirect(route('tbtipodocumentos.index'));
        }

        return view('tbtipodocumentos.edit')->with('tbtipodocumento', $tbtipodocumento);
    }

    /**
     * Update the specified tbtipodocumento in storage.
     *
     * @param  int              $id
     * @param UpdatetbtipodocumentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetbtipodocumentoRequest $request)
    {
        $tbtipodocumento = $this->tbtipodocumentoRepository->findWithoutFail($id);

        if (empty($tbtipodocumento)) {
            Flash::error('Tbtipodocumento not found');

            return redirect(route('tbtipodocumentos.index'));
        }

        $tbtipodocumento = $this->tbtipodocumentoRepository->update($request->all(), $id);

        Flash::success('Tbtipodocumento updated successfully.');

        return redirect(route('tbtipodocumentos.index'));
    }

    /**
     * Remove the specified tbtipodocumento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tbtipodocumento = $this->tbtipodocumentoRepository->findWithoutFail($id);

        if (empty($tbtipodocumento)) {
            Flash::error('Tbtipodocumento not found');

            return redirect(route('tbtipodocumentos.index'));
        }

        $this->tbtipodocumentoRepository->delete($id);

        Flash::success('Tbtipodocumento deleted successfully.');

        return redirect(route('tbtipodocumentos.index'));
    }
}
