<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Unit;
use App\Category;
use Illuminate\Support\Str;
use View;

class ProductController extends Controller
{

    public function __construct(Product $model )
         {
            $this->model = $model;
    
            $this->title = "Products";
            $this->view = "product";
            $listUnit = Unit::get();
            $listCategory = Category::get();

            view()->share('title', $this->title);
            view()->share('view', $this->view);
            View::share('listUnit', $listUnit);
            view::share('listCategory',$listCategory);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = $this->model->with(['unit','categori'])->paginate(10);
        return view('pages.' .$this->view. '.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::get();
        $Categories = Category::get();
        return view('pages.product.create',[
            'units' =>$units,
            'categories'=>$Categories
        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'unit_id'=>'required',
            'categori_id'=>'required',
            'stok'=>'required',
            'purchase_price'=>'required',
            'sell_price'=>'required',
            'image'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',

        ]);
        //menyimpan data file yang diupload ke data $ 
        $data = $request->file('image');

        $name_file = time()."_".$data->getClientOriginalName();

        //isi dengan nama folder tempat kkemana file diupload
        $purpose = 'gallery';
        $data->move($purpose,$name_file);

        Product::create([
            'name' => $request->name,
            'unit_id'=>$request->unit_id,
            'categori_id'=>$request->categori_id,
            'stok'=>$request->stok,
            'purchase_price'=>$request->purchase_price,
            'sell_price'=>$request->sell_price,
            'image'=>$name_file,
        ]);
        return redirect()->route('product.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->model->findOrfail();
        $data->delete();

        return redirect()->back();
    }
}
