<?php

namespace App\Http\Controllers\web\drugs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\DrugRepository\DrugRepositoryClass;

class DrugController extends Controller
{
    public $drugRepositoryClass;
    public $categories;
    public function __construct(DrugRepositoryClass $drugRepositoryClass, Category $category)
    {
        $this->drugRepositoryClass = $drugRepositoryClass;
        $this->categories = $category->all();
    }
    public function index()
    {
        $drugs = $this->drugRepositoryClass->allDrugs(10);
        return view('dashboard.drugs.index',['drugs'=>$drugs]);
    }
    public function show($id)
    {
        $drug = $this->drugRepositoryClass->drug($id);
        return view('dashboard.drugs.show',['drug'=>$drug]);
    }
    public function create()
    {
        return view('dashboard.drugs.create',['categories'=>$this->categories]);
    }
    public function delete($id)
    {
        $this->drugRepositoryClass->delete($id);
        return redirect()->route('all.drugs')->with('success','Drug deleted successfully');
    }
}
