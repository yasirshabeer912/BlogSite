<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function viewCatPost($cat_slug){
        $category = Category::where('cat_slug', $cat_slug)->where('status' , '0')->first();

        if($category){
            $post = post::where('category_id', $category->id)->where('status', '0')->get();
           return view('frontend.post.index', compact('post', 'category'));
        }
    }
    public function viewPost(string $cat_slug, string $slug){
        $category = Category::where('cat_slug', $cat_slug)->where('status' , '0')->first();

        if($category){
            $post = post::where('category_id', $category->id)->where('slug', $slug)->where('status', '0')->first();
           return view('frontend.post.view', compact('post'));
        }
    }
}
