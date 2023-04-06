<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category_id = $request->category ? $request->category : "";
        $sort = $request->sort ? $request->sort : "asc";
        $products = [];
        if ($category_id == 3){  // for special category between 18-30
            if (Auth::user()->age >= 18 && Auth::user()->age <= 30){
                $products::where("category_id", $category_id)->orderBy("price", $sort)->get();
            }
        }else{
            $products = $category_id == "" ? Product::all() : Product::where("category_id", $category_id)->orderBy("price", $sort)->get();
        }
       
        $categories = Category::all();
        return view("product\list", ["sort"=> $request->sort ? $request->sort : "asc", "category_id"=> $category_id, "products"=> $products, "categories"=> $categories ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view("product\item", ["product"=> $product ]);
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
        //
    }
}
