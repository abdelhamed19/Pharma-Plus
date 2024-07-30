<?php
namespace App\Repositories\CategoryRepository;

use App\Http\Requests\Categories\StoreCategory;

interface CategoryRepositoryInterface
{
    public function allCategories($quantity);
    public function category($id);
    public function store ($data);
    public function edit ($id);
    public function update ($id, $data);
    public function delete ($id);

}
