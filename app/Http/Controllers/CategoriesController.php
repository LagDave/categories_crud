<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Show all categories
    public function index(){
        $categories =  Category::orderBy('id','desc')->get();
        return view('home', compact('categories'));
    }
    // Show create form
    public function create(){
        return view('categories.create');
    }
    // persist category to db
    public function store(Request $request){
        Category::create([
            "name"=>$request->name
        ]);
        return redirect('/categories')->with('success', 'Success! Category added successfully');
    }
    // delete category from db
    public function delete(Category $category){
        SubCategory::where('category_id', $category->id)->delete();
        if($category->delete()){
            return redirect('/categories')->with('success', 'Success! Category deleted successfully');
        }
    }
    // Show edit page
    public function edit(Category $category){
        return view('categories.edit', compact('category'));
    }
    // Update the category
    public function update(Category $category, Request $request){
        $category->name = $request->name;
        if($category->save()){
            return redirect('/categories')->with('success', 'Success! Category updated successfully');
        }
    }
}
