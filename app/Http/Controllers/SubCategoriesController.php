<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function create(Category $category){
        return view('subcategories.create', compact('category'));
    }
    public function store(Category $category, Request $request){
        SubCategory::create([
            'name'=>$request->name,
            'category_id'=>$category->id
        ]);
        return redirect('categories')->with('success', 'Success! SubCategory Added Successfully');
    }
    public function delete(SubCategory $subcategory){
        if($subcategory->delete()){
            return redirect('categories');
        }
        
    }
    public function edit(SubCategory $subcategory){
        return view('subcategories.edit', compact('subcategory'));
    }
    public function update(SubCategory $subcategory, Request $request){
        $subcategory->name = $request->name;
        $subcategory->save();
        return redirect('categories')->with('success', 'Success! SubCategory Updated Successfully');
    }
}
