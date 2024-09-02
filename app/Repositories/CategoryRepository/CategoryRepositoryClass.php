<?php
namespace App\Repositories\CategoryRepository;

use App\Models\Category;
use App\Http\Requests\Categories\StoreCategory;
use App\Models\Drug;
use Illuminate\Http\Request;

class CategoryRepositoryClass implements CategoryRepositoryInterface
{
    public function allCategories($quantity)
    {
        $request = Request::capture();
        return Category::filter($request->query())->withCount('drugs')
        ->paginate($quantity);
    }
    public function category($id)
    {
        $category = Category::find($id)->loadCount('drugs');
        return $category;
    }
    public function store($data)
    {
        return Category::create($data);
    }
    public function edit ($id)
    {
        return Category::findOrFail($id);
    }
    public function update ($id, $data)
    {
        $category = Category::findOrFail($id);
        return $category->update($data);
    }
    public function delete ($id)
    {
        return Category::destroy($id);
    }
    public function trashed($qty)
    {
        return Category::onlyTrashed()
        ->with('drugs')
        ->paginate($qty);
    }
    public function forceDelete($id)
    {
        return Category::onlyTrashed()
        ->find($id)
        ->forceDelete();
    }
    public function restore($id)
    {
        return Category::onlyTrashed()
        ->find($id)
        ->restore();
    }
}
