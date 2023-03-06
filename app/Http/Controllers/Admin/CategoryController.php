<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class CategoryController extends Controller
{
    public function index(){
        $category= Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function create(){
        return view('admin.category.add-category');
    }


    public function insert(CategoryFormRequest $request){
        $data = $request->validated();
        $category = new Category;
        $category->name =$data['name'];
        $category->cat_slug =$data['cat_slug'];
        $category->description =$data['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            $category->image = $filename;
        }
        $category->meta_title =$data['meta_title'];
        $category->meta_description =$data['meta_description'];
        $category->meta_keywords =$data['meta_keywords'];
        $category->navbar_status =$request->navbar_status == true ? '1' : '0';
        $category->status =$request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('message' , 'Category Added');

    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit-category' , compact('category'));
    }

    public function update(CategoryFormRequest $request ,$id){
        $category = Category::find($id);
        $data = $request->validated();
        $category->name =$data['name'];
        $category->cat_slug =$data['cat_slug'];
        $category->description =$data['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            $category->image = $filename;
        }
        $category->meta_title =$data['meta_title'];
        $category->meta_description =$data['meta_description'];
        $category->meta_keywords =$data['meta_keywords'];
        $category->navbar_status =$request->navbar_status == true ? '1' : '0';
        $category->status =$request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('message' , 'Category Updated');
        
    }

    public function delete($id){
        $category = Category::find($id);

        if ($category) {
            $destination = 'uploads/images/'.$category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $category->delete();
            return redirect('admin/category')->with('message', 'Category Deleted');
        } else {
            return redirect('admin/category')->with('message', 'No Item found');
        }
    }
}
