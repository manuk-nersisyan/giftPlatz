<?php

namespace App\Http\Controllers;

use App\Repositories\AboutUsRepository;
use App\Repositories\ContactRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;

class HomeController extends Controller
{
    /**
     * Summary of productRepository
     * @var
     */
    public $productRepository;

    /**
     * Summary of aboutUsRepository
     * @var
     */
    public $aboutUsRepository;

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
        $contact = $this->contactRepository->index();
        return view('home', compact('aboutUs', 'products', 'categories', 'contact'));
    }
}
