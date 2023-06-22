<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\ContactRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

    /**
     * Summary of contactRepository
     * @var
     */
    public $contactRepository;


    public function __construct(ProductRepository $productRepository,
                                CategoryRepository $categoryRepository,
                                ContactRepository $contactRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->contactRepository = $contactRepository;
    }

    public function getProductsByCategoryId(Category $category)
    {
        if($category->is_active == true) {
            $products = $this->productRepository->getProductsByCategoryId($category->id);
            $categories = $this->categoryRepository->index();
            $contact = $this->contactRepository->index();
            return view('products', compact('products','categories','contact'));
        }
    }
}
