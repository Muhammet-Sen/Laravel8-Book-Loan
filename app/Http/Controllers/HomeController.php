<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{


    public static function categoryList(){

        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting(){

        return Setting::first();
    }
    //
    public function index()
    {
        $cat=Category::first();
        $setting= Setting::first();
        $slider=Product::select('id','title','image','status')->limit(4)->get();
        $daily=Product::select('id','title','image','status')->limit(4)->inRandomOrder()->get();
        $last=Product::select('id','title','image','status')->limit(4)->orderByDesc('id')->get();
        $picked=Product::select('id','title','image','status')->limit(4)->inRandomOrder()->get();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'cat'=>$cat
        ];
        return view('home.index',$data);
    }
    public function getproduct(Request $request){

        $search=$request->input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1){
            $data=Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('product',['id'=>$data->id]);
        }
        else{
            return redirect()->route('produclist',['search'=>$search]);
        }
    }
    public function productlist($search){
        $datalist=Product::where('title','like','%'.$search.'%')->get();
        return view('home.searchproducts',['search'=>$search,'datalist'=>$datalist]);
    }
    public function addtocart($id){
        echo "Add to Cart <br>";
        $data=Product::find($id);
        print_r($data);
        exit();
    }
    public function product($id){
        $data=Product::find($id);
        $picked=Product::select('id','title','image','status')->limit(4)->inRandomOrder()->get();
        $datalist= Image::where('product_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.productdetail',['data'=>$data,'picked'=>$picked,'datalist'=>$datalist]);
    }
    public function categoryproducts($id){

        $datalist= Product::where('category_id',$id)->get();
        $data=Category::find($id);
        #print_r($data);
        #exit();
        return view('home.categoryproducts',['datalist'=>$datalist,'data'=>$data]);
    }
    public function aboutus(){
        $setting= Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function references(){
        $setting= Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function blog(){

        return view('home.about');
    }
    public function shop(){

        return view('home.about');
    }
    public function contact(){
        $setting= Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function sendmessage(Request $request){
        $data = new Message();
        $data->name=$request->input('name');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Your message saved, Thank you.');
    }
    public function login()
    {

        return view('admin.login');
    }
    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }else{
            return view('admin.login');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
