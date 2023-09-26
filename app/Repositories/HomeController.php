<?php

namespace App\Http\Controllers;

use App\Repositories\AboutUsRepository;
use App\Repositories\ContactRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;

class HomeController extends Controller
{


    public $productRepository;


    public $aboutUsRepository;

    public $categoryRepository;
    public $contactRepository;


    public function __construct(AboutUsRepository $aboutUsRepository,
                                ProductRepository $productRepository,
                                CategoryRepository $categoryRepository,
                                ContactRepository $contactRepository)
    {
        $this->aboutUsRepository = $aboutUsRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->contactRepository = $contactRepository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aboutUs = $this->aboutUsRepository->index();
        $products = $this->productRepository->index();
        $categories = $this->categoryRepository->index();
        return view('home', compact('aboutUs', 'products', 'categories'));
    }
}
