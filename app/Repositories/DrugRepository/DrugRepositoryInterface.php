<?php
namespace App\Repositories\DrugRepository;

use App\Http\Requests\Drugs\StoreDrugRequest;
use App\Models\Drug;

interface DrugRepositoryInterface
{
    public function allDrugs($qty);
    public function drug(Drug $drug);
    public function delete ($id);
    public function store (StoreDrugRequest $request);
    public function edit ($id);
    public function trashed ($qty);
    public function forceDelete ($id);
    public function restore($id);

}
