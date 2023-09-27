<?php

namespace App\Http\Controllers\Api;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Subcategory;
use App\Traits\generalTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    use generalTrait;
    
    public function index(){
        // $products = Product::select('id','name_en', 'name_ar', 'price', 'quantity', 'status', 'created_at')
        //     ->orderBy('name_en','desc')->get();
        $products= Product::all();
        // return response()->json(['products'=>$products], 200);
        return $this->returnData(['products'=>$products]);

    }
    public function create(){
        $brands = Brand::select('name_en', 'name_ar', 'id')->get();
        $subcategories = Subcategory::select('name_en', 'name_ar', 'id')->get();
        // return response()->json(['brands'=>$brands, 'subcategories'=>$subcategories], 201);
        return $this->returnData(['brands'=>$brands, 'subcategories'=>$subcategories]);
    }
    public function store(StoreProductRequest $request){
        $data =$request->except('photo');
        $data = $this->uploadPhoto($request, $data, 'products\\');
        Product::create($data);
        // return response()->json(['success'=>'product Succsfully created']);
        return $this->returnSuccessMessage(['success'=>'product Succsfully created']);
    }
    public function edit($id){
        $brands = Brand::select('name_en', 'name_ar', 'id')->get();
        $subcategories = Subcategory::select('name_en', 'name_ar', 'id')->get();
        $product = Product::where('id',$id)->first();
        // return response()->json(['brands'=>$brands, 'subcategories'=>$subcategories, 'product'=>$product], 201);
        return $this->returnData(['brands'=>$brands, 'subcategories'=>$subcategories, 'product'=>$product]);
    }
    public function update(UpdateProductRequest $request){
        $data =$request->except('photo','_method');
        if($request->has('photo')){
            $data = $this->uploadPhoto($request, $data , 'products\\');
        }
        Product::where('id',$request->id)->update($data);
        // return response()->json(['success'=>'product Succsfully updated'], 200);
        return $this->returnSuccessMessage(['success'=>'product Succsfully updated']);

    }
    public function destroy($id){
        // $product = Product::where('id',$id)->first();
        $product = Product::find($id);
        if($product){
            $product->delete();
            $photoPath= public_path('images\products\\'.$product->photo);
            if(file_exists($photoPath)){
                unlink($photoPath);
            }
        }else{
            // return response()->json(['error'=>'product Not found'], 404);
        return $this->returnErrorMessage(['error'=>'product Not found']);

        }
        // return response()->json(['success'=>'product Succsfully deleted'], 200);
        return $this->returnSuccessMessage(['success'=>'product Succsfully updated']);

    }
}
// middleware, localization, Authintication Api
