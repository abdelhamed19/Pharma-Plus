<?php
namespace App\Repositories\DrugRepository;

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
    public function delete($id)
    {
        return Drug::destroy($id);
    }
}
