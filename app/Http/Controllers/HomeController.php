<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $blog=blog::all();
        return view('frontend.home', compact('blog'));
    }
    public function hello()
    {
        if(Auth::check()){
      if(Auth::user()->usertype=='1'){
        return view ('admin.main');
}
   else{
    $blog=blog::all();
    return view ('frontend.home', compact('blog'));
}
           
        }
        else{
            return redirect()->route('login');
        }
    }
    public function admin(){
        return view('admin.main');
       }

       
       

}
