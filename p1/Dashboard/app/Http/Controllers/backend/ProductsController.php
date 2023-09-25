<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){
        // $products //->latest()
        // query builder, eloquent
        $products = DB::table('products')
            ->select('name_en', 'name_ar', 'price', 'quantity', 'status', 'created_at')
            ->orderBy('name_en','desc') 
            ->get();
        // print_r($products);die;
        // dd($products);
        return view('products.index',compact('products'));
    }

    public function create(){
        $brands = DB::table('brands')->select('name_en', 'name_ar', 'id')->get();
        $subcategories = DB::table('subcategories')->select('name_en', 'name_ar', 'id')->get();
        return view('products.create', compact('brands','subcategories'));
    }
    public function store(Request $request){
        // dependancy injection 
        // dd($request->all());
        // $request->validate($ rules )
        $rules=[
            'name_en'=>['required','max:255', 'min:2', 'string'],
            'name_ar'=>['required','max:255', 'min:2', 'string'],
            'price'=>['required', 'numeric','min:1', 'max:99999999.99'],
            'quantity'=>['nullable','integer','min:1','max:99999'],
            'status'=>['nullable','integer','min:0','max:1'],
            'details_en'=> ['nullable','string'],
            'details_ar'=> ['nullable','string'],
            'brand_id'=>['nullable','integer','exists:brands,id'],
            'subcategory_id'=>['required','integer','exists:subcategories,id'],
            // 'photo'=>['required','size:10000','mimes:jpg,png']  // size, max  
            'photo'=>['required','max:10000','mimes:jpg,png']
        ];
        $request->validate($rules);
        // dd($request->all());
        $data =$request->except('_token','index','create','photo');

        $photoname=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images\products'), $photoname);
        $data['photo']= $photoname;

        DB::table('products')->insert($data);
        if($request->has('index')){
            return redirect()->route('dashboard.products.index')->with('success','Product Successfuly created');
        }else{
            return redirect()->back()->with('success','Product Successfuly created'); //flash message
        }
    }

}
