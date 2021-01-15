<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator;
use Session;

class CategoryController extends Controller
{
    public function category_form()
    {
    	return view('admin.category.category_add_form');
    }
     public function category_save(Request $request)
    {
    	//return $request->all();
    	$validatedData = $request->validate([
        'category_name' => 'required|unique:categories,category_name',
        'category_description' => 'required',
        'publication_status' => 'required',
    	]);
    	$category = new Category;
    	$category->category_name = $request->category_name;
    	$category->category_description = $request->category_description;
    	$category->publication_status = $request->publication_status;
    	$category->save();
    	session::flash('category_add_msg', 'Category Added Successfully');
    	return back();
    }
    public function manage_category()
    {
        
        $categories = Category::paginate(5);
        return view('admin.category.category_manage', compact('categories'));
    }
    public function category_unpublish($id)
    {
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();
    return back()->with('publish_status_message', 'Category Unpublished Successfully');
    }
    public function category_publish($id)
    {
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return back()->with('unpublish_status_message', 'Category Published Successfully');
    }
    public function category_delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('delete_message', 'Category Deleted Successfully');
    }
    public function category_edit_form($id)
    {
        $category = Category::find($id);
        return view('admin.category.category_edit_form', ['category'=>$category]);
    }

    public function category_update(Request $request)
    {
        //return $request->all();
        $validatedData = $request->validate([
        'category_name' => 'required',
        'category_description' => 'required',
        'publication_status' => 'required',
        ]);
        //return $request->category_id;
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        session::flash('category_update_msg', 'Category Update Successfully');
        return back();
    }
}
