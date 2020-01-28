<?php

namespace App\Http\Controllers\Admin;

use App\http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\DB;
use JsValidator;

class CategoryController extends Controller
{
    private $title, $view;

    public function __construct(
        Category $model
    ) {
        $this->model = $model;
        $this->validate = 'CategoryRequest';
        $this->title = "Categories";
        $this->view = "category";

        view()->share('title', $this->title);
        view()->share('view', $this->view);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = $this->model->paginate(10);

        return view('pages.admin.' . $this->view . '.index', compact('datas'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $datas = DB::table('categories')
            ->where('name','like',"%".$cari."%")
            ->paginate();

            return view('pages.admin.' . $this->view . '.index', compact('datas'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validator =JsValidator::formRequest('App\Http\Requests\\'.$this->validate);
        
        return view('pages.admin.' . $this->view . '.create', compact('validator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $input = $request->all();

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
        $data = $this->model->findOrFail($id);

        return view('pages.admin.' . $this->view . '.show', compact('data'));
    }

    public function edit($id)
    {
        $data = $this->model->findOrFail($id);

        return view('pages.admin.' . $this->view . '.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
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
        $data = $this->model->findOrFail($id);
        $data->delete();

        return redirect()->route($this->view .'.index');
    }   
}