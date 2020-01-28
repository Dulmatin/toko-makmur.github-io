<?php

namespace App\Http\Controllers\Admin;

use App\http\Controllers\Controller;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use Hash;
use Illuminate\Support\Facades\DB;
use JsValidator;

class CustomerController extends Controller
{

    public function __construct(
    Customer $model )
     {
        $this->model = $model;
        $this->validate = "CustomerRequest";
        $this->title = "Customers";
        $this->view = "customer";

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
        return view('pages.admin.' .$this->view. '.index', compact('datas'));
    }

    public function cari(Request $request) 
    {
        $cari =$request->cari;
        $datas = DB::table('customers')
            ->where(
                    'name','like',"%".$cari."%"
                    // 'phone_number','like',"%".$cari."%",
                    // 'username','like',"%".$cari."%",
                    // 'email','like',"%".$cari."%",
                    // 'gender','like',"%".$cari."%",
                    // 'address','like',"%".$cari."%"
                    )
            ->paginate();

        return view('pages.admin.' . $this->view . '.index',compact('datas'));

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
    public function store(CustomerRequest $request)
    {
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model->findOrFail($id);

        return view('pages.admin.' .$this->view. '.edit', compact('data'));
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

        return redirect()->route($this->view. '.index');
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

        return redirect()->route($this->view.'.index' );

    }
}
