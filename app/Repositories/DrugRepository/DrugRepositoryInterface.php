<?php
namespace App\Repositories\DrugRepository;

use App\Models\Drug;

interface DrugRepositoryInterface
{
    public function allDrugs($qty);
    public function drug(Drug $drug);
    public function delete ($id);
}
