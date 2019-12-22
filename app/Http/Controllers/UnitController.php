<?php

namespace App\Http\Controllers;

use App\http\Controllers\Controller;
use App\Unit;
use Illuminate\Http\Request;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $title, $view;

    public function __construct(
        Unit $model
    ) {
        $this->model = $model;

        $this->title = "Units";
        $this->view = "unit";

        view()->share('title', $this->title);
        view()->share('view', $this->view);
    }


    public function index()
    {
        $datas = $this->model->paginate(10);

        return view('pages.' . $this->view . '.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.' . $this->view . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        unset($input['_token']);

        $this->model->create($input);

        return redirect()->route($this->view . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Unit::findOrFail($id);

        return view('pages.' . $this->view . '.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model->findOrFail($id);

        return view('pages.' . $this->view . '.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $data = $this->model->findOrFail($id);
        $data->update($input);

        return redirect()->route($this->view . '.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->model->findOrfail($id);
        $data->delete();

        return redirect()->route($this->view . '.index');
    }
}
