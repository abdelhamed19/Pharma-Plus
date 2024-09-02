<?php
namespace App\Repositories\DrugRepository;

use App\Http\Requests\Drugs\StoreDrugRequest;
use App\Models\Drug;
use Illuminate\Http\Request;

class DrugRepositoryClass implements DrugRepositoryInterface
{
    public function allDrugs($qty)
    {
        $request = Request::capture();
        return Drug::with('category')
        ->filter($request->query())
        ->paginate($qty);
    }
    public function drug($id)
    {
        $drug = Drug::find($id)->load('category');
        return $drug;
    }
    public function edit($id)
    {
        $drug = Drug::find($id)->load('category');
        return $drug;
    }
    public function store(StoreDrugRequest $request)
    {
        $drug = Drug::create([
            'ar_name'=>$request->ar_name,
            'en_name'=>$request->en_name,
            'category_id'=>$request->category_id,
            'stock'=>$request->stock,
            'ar_description'=>$request->ar_description,
            'en_description'=>$request->en_description,
            'price'=>$request->price,
            'status'=>$request->status
        ]);
        return $drug;
    }
    public function update(Request $request,$id)
    {
        $drug = Drug::find($id)->load('category');
        $drug->update([
            'ar_name'=>$request->ar_name,
            'en_name'=>$request->en_name,
            'category_id'=>$request->category_id,
            'stock'=>$request->stock,
            'ar_description'=>$request->ar_description,
            'en_description'=>$request->en_description,
            'price'=>$request->price,
            'status'=>$request->status
        ]);
        return $drug;
    }
    public function delete($id)
    {
        return Drug::destroy($id);
    }
    public function trashed($qty)
    {
        $request = Request::capture();
        return Drug::onlyTrashed()
        ->with('category')
        ->filter($request->query())
        ->paginate($qty);
    }
    public function forceDelete($id)
    {
        return Drug::onlyTrashed()
        ->find($id)
        ->forceDelete();
    }
    public function restore($id)
    {
        return Drug::onlyTrashed()
        ->find($id)
        ->restore();
    }
}
