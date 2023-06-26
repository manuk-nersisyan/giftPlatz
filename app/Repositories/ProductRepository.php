<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function index()
    {
        return Product::query()->with(['images'])
        ->select([
            'products.*',
            'categories.name as category_name',
            'subcategories.name as subcategory_name'
        ])
        ->join('categories', function ($q) {
            $q->on('categories.id', '=', 'products.category_id')
                ->where('categories.is_active', true);
        })
        ->leftJoin('subcategories', function ($q) {
            $q->on('subcategories.id', '=', 'products.subcategory_id')
                ->where('subcategories.is_active', true);
        })
        ->where(function ($q) {
            $q->whereNull('products.subcategory_id')
                ->orWhere('subcategories.is_active', true);
        })
        ->where('products.is_active', true)
        ->where('products.is_actual', true)
        ->get();
    }

    /**
     * Summary of getProductsByCategoryId
     * @param mixed $categoryId
     * @return \Illuminate\Database\Eloquent\Collection|array<\Illuminate\Database\Eloquent\Builder>
     */
    public function getProductsByCategoryId($categoryId)
    {
        return Product::query()->with(['image','images'])
        ->select([
            'products.*',
            'categories.name as category_name',
            'subcategories.name as subcategory_name'
        ])
        ->join('categories', function ($q)use($categoryId) {
            $q->on('categories.id', '=', 'products.category_id')
                ->where('categories.is_active', true)
                ->where('categories.id', $categoryId);
        })
        ->leftJoin('subcategories', function ($q) {
            $q->on('subcategories.id', '=', 'products.subcategory_id')
                ->where('subcategories.is_active', true);
        })
        ->where(function ($q) {
            $q->whereNull('products.subcategory_id')
                ->orWhere('subcategories.is_active', true);
        })
        ->where('products.is_active', true)
        ->get();
    }
    
    /**
     * Summary of getProductsBySubcategoryId
     * @param mixed $subcategoryId
     * @return \Illuminate\Database\Eloquent\Collection|array<\Illuminate\Database\Eloquent\Builder>
     */
    public function getProductsBySubcategoryId($subcategoryId)
    {
        return Product::query()->with(['image','images'])
        ->select([
            'products.*',
            'categories.name as category_name',
            'subcategories.name as subcategory_name'
        ])
        ->join('categories', function ($q) {
            $q->on('categories.id', '=', 'products.category_id')
                ->where('categories.is_active', true);
        })
        ->join('subcategories', function ($q) use($subcategoryId) {
            $q->on('subcategories.id', '=', 'products.subcategory_id')
                ->where('subcategories.is_active', true)
                ->where('subcategories.id', $subcategoryId);
        })
        ->where('products.is_active', true)
        ->get();
    }
}
