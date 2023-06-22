<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Summary of productRepository
     * @var
     */
    public $productRepository;

    /**
     * Summary of categoryRepository
     * @var
     */
    public $categoryRepository;


    public function __construct(
                                ProductRepository $productRepository,
                                CategoryRepository $categoryRepository
                               )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }
}
