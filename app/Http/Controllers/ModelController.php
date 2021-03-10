<?php

namespace App\Http\Controllers;

use App\Model;
use App\Http\Datatables\ModelDatatable;
use App\Http\Requests\ModelRequest;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Model::query();
        $datatables = ModelDatatable::make($query);

        return $request->ajax()
            ? $datatables->json()
            : view('models.index', $datatables->html());
    }

    public function create()
    {
        return view('models.create');
    }

    public function store(ModelRequest $request)
    {
        Model::create($request->all());

        return $request->input('submit') == 'reload'
            ? redirect()->route('models.create')
            : redirect()->route('models.index');
    }

    public function show(Model $model)
    {
        return view('models.show', compact('model'));
    }

    public function edit(Model $model)
    {
        return view('models.edit', compact('model'));
    }

    public function update(ModelRequest $request, Model $model)
    {
        $model->update($request->all());

        return $request->input('submit') == 'reload'
            ? redirect()->route('models.edit', $model->id)
            : redirect()->route('models.index');
    }

    /** @noinspection PhpUnhandledExceptionInspection */
    public function destroy(Model $model)
    {
        $model->delete();

        return redirect()->route('models.index');
    }
}
