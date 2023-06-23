<?php

namespace App\Http\Controllers;

use App\Repositories\AboutUsRepository;
use App\Repositories\ContactRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\FooterRepository;
use App\Repositories\HeaderRepository;
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

    /**
     * Summary of headerRepository
     * @var
     */
    public $headerRepository;

    /**
     * Summary of headerRepository
     * @var
     */
    public $footerRepository;


    public function __construct(AboutUsRepository $aboutUsRepository,
                                ProductRepository $productRepository,
                                CategoryRepository $categoryRepository,
                                ContactRepository $contactRepository,
                                HeaderRepository $headerRepository,
                                FooterRepository $footerRepository)
    {
        $this->aboutUsRepository = $aboutUsRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->contactRepository = $contactRepository;
        $this->headerRepository = $headerRepository;
        $this->footerRepository = $footerRepository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home_v1');
        // $aboutUs = $this->aboutUsRepository->index();
        // $products = $this->productRepository->index();
        // $categories = $this->categoryRepository->index();
        // $contact = $this->contactRepository->index();
        // $header = $this->headerRepository->index();
        // $footer = $this->footerRepository->index();
        // return view('home', compact('aboutUs', 'products', 'categories', 'contact', 'header', 'footer'));
    }
}
