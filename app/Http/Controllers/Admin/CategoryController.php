<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $appends =[
        'getParentsTree'
    ];
    public static function getParentsTree($category,$title){
        if($category->parent_id==0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title=$parent->title . '>' . $title;
        return CategoryController::getParentsTree($parent,$title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = Category::with('children')->get();
        //print_r($datalist);
        //exit();
        return view('admin.category', ['datalist' => $datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist = Category::with('children')->get();
        //print_r($datalist);
        //exit();
        return view('admin.category_add',['datalist' => $datalist]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //echo $name =$request->input('title');
        DB::table('categories')->insert([
           'parent_id'=>$request->input('parent_id'),
           'title'=>$request->input('title'),
           'description'=>$request->input('description'),
           'keywords'=>$request->input('keywords'),
           'status'=>$request->input('status')
        ]);
        return redirect()->route('admin_category');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data=Category::find($id);
        $datalist = Category::with('children')->get();
        return view('admin.category_edit',['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category, $id)
    {
        $data=Category::find($id);
        $data->parent_id=$request->input('parent_id');
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datalist = Category::with('children')->get();
        return redirect()->route('admin_category');
    }
}
