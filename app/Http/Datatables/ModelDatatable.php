<?php

namespace App\Http\Datatables;

use Kejojedi\Crudify\Http\Datatable;
use Yajra\DataTables\Html\Column;

class ModelDatatable extends Datatable
{
    protected function columns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    protected function orderBy()
    {
        return ['name', 'asc'];
    }

    protected function actions($model)
    {
        return view('models.actions', compact('model'));
    }
}
