<?php

namespace App\Http\Controllers\Api\categories;

use App\Helpers\HTTPResponse;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository\CategoryRepositoryClass;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use HTTPResponse;
    private $categoryRepositoryClass;
    public function __construct(CategoryRepositoryClass $categoryRepositoryClass)
    {
        $this->categoryRepositoryClass = $categoryRepositoryClass;
    }
    public function allCategories()
    {
        $categories = $this->categoryRepositoryClass->allCategories(5);
        return $this->successRequest($categories,'All Categories');
    }
    public function category($id)
    {
        $category = $this->categoryRepositoryClass->category($id);
        return $this->successRequest($category,'A Category by id');
    }
}
