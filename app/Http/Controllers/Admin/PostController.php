<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Http\Requests\Admin\PostFormReqest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $post=Post::all();
        return view('admin.post.index',compact('post'));
    }

    public function create(){
        $category = Category::where('status', '0')->get();
        return view('admin.post.add-post',compact('category'));
    }

    public function store(PostFormReqest $request){
        $data = $request->validated();
        $post = new post;

        $post->category_id =$data['category_id'];
        $post->name =$data['name'];
        $post->slug =Str::slug($data['slug']);
        $post->description =$data['description'];
        $post->yt_frame =$data['yt_frame'];
        $post->meta_title =$data['meta_title'];
        $post->meta_description =$data['meta_description'];
        $post->meta_keyword =$data['meta_keyword'];
        $post->status =$request->status == true ? '1' : '0';
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect('admin/post')->with('message' , 'Post Added');
    }

    public function edit($id){
        $category = Category::where('status', '0')->get();
        $post = Post::find($id);
        return view('admin.post.edit-post' , compact('post','category'));
    }

    public function update(PostFormReqest $request ,$id){
        $post = post::find($id);
        $data = $request->validated();
        $post->category_id =$data['category_id'];
        $post->name =$data['name'];
        $post->slug =Str::slug($data['slug']);
        $post->description =$data['description'];
        $post->yt_frame =$data['yt_frame'];
        $post->meta_title =$data['meta_title'];
        $post->meta_description =$data['meta_description'];
        $post->meta_keyword =$data['meta_keyword'];
        $post->status =$request->status == true ? '1' : '0';
        $post->created_by = Auth::user()->id;
        $post->update();

        return redirect('admin/post')->with('message' , 'Post Updated');
        
    }

     public function delete($id){
        $post = post::find($id);
        $post->delete();
        return redirect('admin/post')->with('message' , 'Post Deleted');
     }
}
