<?php

namespace App\Http\Controllers\web\categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\StoreCategory;
use App\Http\Requests\Categories\UpdateCategory;
use App\Repositories\CategoryRepository\CategoryRepositoryClass;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepositoryClass;
    public function __construct(CategoryRepositoryClass $categoryRepositoryClass)
    {
        $this->categoryRepositoryClass = $categoryRepositoryClass;
    }
    public function index()
    {
        $categories = $this->categoryRepositoryClass->allCategories(8);
        return view('dashboard.categories.index',['categories'=>$categories]);
    }

    public function show($id)
    {
        $category = $this->categoryRepositoryClass->category($id);
        return view('dashboard.categories.show',['category'=>$category]);
    }
    public function create()
    {
        return view('dashboard.categories.create');
    }
    public function store (StoreCategory $storeCategory)
    {
        $data = $storeCategory->validated();
        $this->categoryRepositoryClass->store($data);
        return redirect()->route('all.categories')->with('success','Category added');
    }
    public function edit($id)
    {
        $category = $this->categoryRepositoryClass->edit($id);
        return view('dashboard.categories.edit',['category'=>$category]);
    }
    public function update(UpdateCategory $updateCategory,$id)
    {
        $data = $updateCategory->validated();
        $this->categoryRepositoryClass->update($id, $data);
        return redirect()->route('all.categories')->with('success','Category updated');
    }
    public function destroy($id)
    {
        $this->categoryRepositoryClass->delete($id);
        return redirect()->back()->with('success','Category deleted');
    }
    public function trashed()
    {
        $categories = $this->categoryRepositoryClass->trashed(3);
        return view('dashboard.categories.trashed',compact('categories'));
    }
    public function forceDelete($id)
    {
        $category = $this->categoryRepositoryClass->forceDelete($id);
        return redirect()->route('trashed.category')->with('success','Category deleted successfully');
    }
    public function restore($id)
    {
        $category = $this->categoryRepositoryClass->restore($id);
        return redirect()->route('trashed.category')->with('success','Category deleted successfully');
    }
}
