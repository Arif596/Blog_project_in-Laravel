<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    //
    function hello(){
        return view('admin.add_blog');
    }
    function table(){
        $blog=blog::all();
        return view('admin.table',['blog'=>$blog]);
    }
    function upload(Request $req){
        $blog=new Blog();
        $image=$req->file;
       $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->file->move('Blog',$imagename);
        $blog->image=$imagename;
        $blog->name=$req->name;
        $blog->select=$req->select;
        $blog->message=$req->message;
        $blog->date=$req->date;
        $blog->save();
return redirect('add_blog')->with('message','Blog added sucessfully');
    }
    // delete 
    function delete($id){
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('table');
        }
       // update
        function show($id){
            $blog= Blog::find($id);  
            return view('admin.edit',compact('blog'));
            }
            function update(Request $req ,$id){
                $blog= Blog::find($id);
                $blog->name =$req->name;
                $blog->select =$req->select;
                $blog->message =$req->message;
                $blog->date =$req->date;
                $blog->save();
                return redirect('table');
    
            }
            function travel($id){
                return view('frontend.travel')->with(['blog'=>Blog::where('id',$id)->first()
            ]);
                       }
}
