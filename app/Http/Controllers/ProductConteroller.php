<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\CategoryRepository;
use App\Repositories\ContactRepository;
use App\Repositories\FooterRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductConteroller extends Controller
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


    public function getProductById(Product $product)
    {
        if($product->is_active == true) {
            $footer = $this->footerRepository->index();
            $categories = $this->categoryRepository->index();
            $contact = $this->contactRepository->index();
            $category = $product->category;
            return view('product', compact('footer','product', 'category', 'categories','contact'));
        }
    }
}
