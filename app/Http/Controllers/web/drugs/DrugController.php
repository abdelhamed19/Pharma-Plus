<?php

namespace App\Http\Controllers\web\drugs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Drugs\StoreDrugRequest;
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
    public function store(StoreDrugRequest $request)
    {
        $drug = $this->drugRepositoryClass->store($request);
        return redirect()->route('all.drugs')->with('success','Drug Created successfully');
    }
    public function edit($id)
    {
        $drug = $this->drugRepositoryClass->edit($id);
        return view('dashboard.drugs.edit',['drug'=>$drug]);
    }
    public function update(Request $request,$id)
    {
        $drug =$this->drugRepositoryClass->update($request,$id);
        return redirect()->route('all.drugs')->with('success','Drug updated successfully');
    }
    public function delete($id)
    {
        $this->drugRepositoryClass->delete($id);
        return redirect()->route('all.drugs')->with('success','Drug deleted successfully');
    }
    public function trashed()
    {
        $drugs = $this->drugRepositoryClass->trashed(3);
        return view('dashboard.drugs.trashed',compact('drugs'));
    }
    public function forceDelete($id)
    {
        $drugs = $this->drugRepositoryClass->forceDelete($id);
        return redirect()->route('trashed.drug')->with('success','Drug deleted successfully');
    }
    public function restore($id)
    {
        $drug = $this->drugRepositoryClass->restore($id);
        return redirect()->route('trashed.drug')->with('success','Drug restored successfully');
    }
    public function missing()
    {
        $drugs = $this->drugRepositoryClass->missing(5);
        return view('dashboard.drugs.missing',compact('drugs'));
    }
}
