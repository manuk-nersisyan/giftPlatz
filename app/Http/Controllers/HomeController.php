<?php

namespace App\Http\Controllers;

use App\Repositories\AboutUsRepository;
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
     * Summary of __construct
     * @param \App\Repositories\AboutUsRepository $aboutUsRepository
     * @param \App\Repositories\ProductRepository $productRepository
     */
    public function __construct(AboutUsRepository $aboutUsRepository,
                                ProductRepository $productRepository)
    {
        $this->aboutUsRepository = $aboutUsRepository;
        $this->productRepository = $productRepository;
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
        return view('home', compact('aboutUs', 'products'));
    }
}
