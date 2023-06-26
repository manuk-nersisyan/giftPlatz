<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Repositories\CategoryRepository;
use App\Repositories\ContactRepository;
use App\Repositories\FooterRepository;
use App\Repositories\ProductRepository;

class SubcategoryController extends Controller
{
     /**
     * Summary of headerRepository
     * @var
     */
    public $footerRepository;

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


    public function __construct(
                                FooterRepository $footerRepository,
                                ProductRepository $productRepository,
                                CategoryRepository $categoryRepository,
                                ContactRepository $contactRepository)
    {
        $this->footerRepository = $footerRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->contactRepository = $contactRepository;
    }

    /**
     * Summary of getProductsByCategoryId
     * @param \App\Models\Subcategory $subcategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getProductsBySubcategoryId(Subcategory $subcategory)
    {
        if($subcategory->is_active == true) {
            $footer = $this->footerRepository->index();
            $products = $this->productRepository->getProductsBySubcategoryId($subcategory->id);
            $categories = $this->categoryRepository->index();
            $contact = $this->contactRepository->index();
            $category = $subcategory->category;
            return view('products', compact('footer','products', 'category', 'categories', 'subcategory', 'contact'));
        }
    }
}
