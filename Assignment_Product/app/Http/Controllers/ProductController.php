<?php

namespace App\Http\Controllers;
use Session;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create(){
        return view('product.create');

    }
    public function createsubmit(Request $req){
        $req->validate([
            'name'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'dis'=>'required',
        ]);
        $p= new product();
        $p->name=$req->name;
        $p->price=$req->price;
        $p->qty=$req->qty;
        $p->dis=$req->dis;
        $p->save();
        
        return redirect()->route('home');

    }

    public function edit($id){
        $p= product::where('p_id','=',$id)
        ->first();
        
        return view('product.edit')
        ->with('edit',$p);
    }

    public function editSubmit(Request $req){
        
    }

    public function delete(){
        
    }

    public function products(){
      
      $products= product::all();
      return view('product.products')
      ->with('products',$products);
        
    }
}
