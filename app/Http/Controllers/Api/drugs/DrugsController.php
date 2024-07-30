<?php

namespace App\Http\Controllers\Api\drugs;

use Illuminate\Http\Request;
use App\Helpers\HTTPResponse;
use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Repositories\DrugRepository\DrugRepositoryClass;

class DrugsController extends Controller
{
    use HTTPResponse;
    public $drugRepositoryClass;
    public function __construct(DrugRepositoryClass $drugRepositoryClass)
    {
        $this->drugRepositoryClass = $drugRepositoryClass;
    }
    public function allDrugs()
    {
        $drugs = $this->drugRepositoryClass->allDrugs();
        return $this->successRequest($drugs,'All drugs');
    }
    public function drug ($id)
    {
        $drug = $this->drugRepositoryClass->drug($id);
        if (!$drug)
        {
            return $this->wrongRequest('Drug Not Found',404,null);
        }
        return $this->successRequest($drug,'A drug by Id');
    }
}
