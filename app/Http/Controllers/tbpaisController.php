<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetbpaisRequest;
use App\Http\Requests\UpdatetbpaisRequest;
use App\Repositories\tbpaisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tbpaisController extends AppBaseController
{
    /** @var  tbpaisRepository */
    private $tbpaisRepository;

    public function __construct(tbpaisRepository $tbpaisRepo)
    {
        $this->tbpaisRepository = $tbpaisRepo;
    }

    /**
     * Display a listing of the tbpais.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tbpaisRepository->pushCriteria(new RequestCriteria($request));
        $tbpais = $this->tbpaisRepository->all();

        return view('tbpais.index')
            ->with('tbpais', $tbpais);
    }

    /**
     * Show the form for creating a new tbpais.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbpais.create');
    }

    /**
     * Store a newly created tbpais in storage.
     *
     * @param CreatetbpaisRequest $request
     *
     * @return Response
     */
    public function store(CreatetbpaisRequest $request)
    {
        $input = $request->all();

        $tbpais = $this->tbpaisRepository->create($input);

        Flash::success('Tbpais saved successfully.');

        return redirect(route('tbpais.index'));
    }

    /**
     * Display the specified tbpais.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tbpais = $this->tbpaisRepository->findWithoutFail($id);

        if (empty($tbpais)) {
            Flash::error('Tbpais not found');

            return redirect(route('tbpais.index'));
        }

        return view('tbpais.show')->with('tbpais', $tbpais);
    }

    /**
     * Show the form for editing the specified tbpais.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tbpais = $this->tbpaisRepository->findWithoutFail($id);

        if (empty($tbpais)) {
            Flash::error('Tbpais not found');

            return redirect(route('tbpais.index'));
        }

        return view('tbpais.edit')->with('tbpais', $tbpais);
    }

    /**
     * Update the specified tbpais in storage.
     *
     * @param  int              $id
     * @param UpdatetbpaisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetbpaisRequest $request)
    {
        $tbpais = $this->tbpaisRepository->findWithoutFail($id);

        if (empty($tbpais)) {
            Flash::error('Tbpais not found');

            return redirect(route('tbpais.index'));
        }

        $tbpais = $this->tbpaisRepository->update($request->all(), $id);

        Flash::success('Tbpais updated successfully.');

        return redirect(route('tbpais.index'));
    }

    /**
     * Remove the specified tbpais from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tbpais = $this->tbpaisRepository->findWithoutFail($id);

        if (empty($tbpais)) {
            Flash::error('Tbpais not found');

            return redirect(route('tbpais.index'));
        }

        $this->tbpaisRepository->delete($id);

        Flash::success('Tbpais deleted successfully.');

        return redirect(route('tbpais.index'));
    }
}
