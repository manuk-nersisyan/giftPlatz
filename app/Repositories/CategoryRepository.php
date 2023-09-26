<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function index()
    {
        return Category::query()->with(['subcategories'])
            ->select('id','name')
            ->where('is_active', true)
            ->get();
    }
}
