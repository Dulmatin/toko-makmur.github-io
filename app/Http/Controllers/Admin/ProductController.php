<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Unit;
use App\Category;
use Illuminate\Support\Str;
use View;
Use Storage;
use Intervention\Image\Facades\Image;
use JsValidator;

class ProductController extends Controller
{

    public function __construct(Product $model )
         {
            $this->model = $model;
            $this->validate = "ProductRequest";
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
        $datas = $this->model->with(['unit','category'])->paginate(10);
        return view('pages.admin.' .$this->view. '.index', compact('datas'));
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


    public function store(ProductRequest $request)
    {
      
        //menyimpan data file yang diupload ke data $ 
        // $name_file = time()."_".$picture->getClientOriginalName();
        //isi dengan nama folder tempat kkemana file diupload
        // $purpose = 'gallery';
        // $picture->move($purpose,$name_file);
        $input = $request->all();
        $picture = $request->file('image');
        if ($picture) {
            $img = Image ::make ($picture->getRealPath());
            $img->resize(500,null,function($constraint){
                $constraint->aspectRatio();
            })->encode('png');
            
            $directoryName = "product";
            $pictureName = $picture->hashName();
            $path = $directoryName. '/' .$pictureName;
            $img_resources = $img->getEncoded();
            Storage::disk('public')->put($path,$img_resources,'public');
            $input['image'] = $path;
        }

        Product::create([
            'name' => $request->name,
            'unit_id'=>$request->unit_id,
            'category_id'=>$request->category_id,
            'stock'=>$request->stock,
            'purchase_price'=>$request->purchase_price,
            'sell_price'=>$request->sell_price,
            'image'=>$path,
        ]);
        return redirect()->route($this->view .'.index');


        
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

        return view('pages.admin.' .$this->view. '.edit' , compact('data'));
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

        return view('pages.admin.' .$this->view. '.edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {

      $input = $request->all();
      $data = $this->model->findOrFail($id);

      $picture = $request->file('image');
      if ($picture) {
        $img = Image ::make ($picture->getRealPath());
        $img->resize(500,null,function($constraint){
            $constraint->aspectRatio();
        })->encode('png');
        
        $directoryName = "product";
        $pictureName = $picture->hashName();
        $path = $directoryName. '/' .$pictureName;
        $img_resources = $img->getEncoded();
        Storage::disk('public')->put($path,$img_resources,'public');

        $input['image'] = $path;
    }
     
      $data->update($input);

      return redirect()->route($this->view .'.index');
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

        return redirect()->route($this->view .'.index');
    }
}
