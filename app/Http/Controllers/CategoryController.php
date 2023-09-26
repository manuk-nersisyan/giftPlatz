<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\ContactRepository;
use App\Repositories\FooterRepository;
use App\Repositories\ProductRepository;

class CategoryController extends Controller
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
     * @param \App\Models\Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getProductsByCategoryId(Category $category)
    {
        if($category->is_active == true) {
            if($category->subcategories->isNotEmpty()) {
                return redirect()->route('home');
            }
            $footer = $this->footerRepository->index();
            $products = $this->productRepository->getProductsByCategoryId($category->id);
            $categories = $this->categoryRepository->index();
            $contact = $this->contactRepository->index();
            return view('products', compact('footer','products', 'category', 'categories','contact'));
        }
        return redirect()->route('home');
    }
}
