<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Repositories\Admin\CategoryRepository;
use App\Repositories\Admin\ProductRepository;
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

    /**
     * Summary of __construct
     * @param \App\Repositories\Admin\ProductRepository $productRepository
     * @param \App\Repositories\Admin\CategoryRepository $categoryRepository
     */
    public function __construct(ProductRepository $productRepository,
                                 CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->middleware('can:action.product')->only(['create','store', 'edit', 'destroy']);
    }

    /**
     * Summary of index
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        if ($request->ajax()) return $this->productRepository->index();
        return view('admin.products.index');
    }

    /**
     * Summary of create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = $this->categoryRepository->all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        $this->productRepository->store($request->all());
        return redirect()->route('products.index')->with(['message' => 'Successfully created!']);
    }

    /**
     * Summary of show
     * @param \App\Models\Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Product $product)
    {
        $categories = $this->categoryRepository->all();
        return view('admin.products.show', compact('product','categories'));
    }


    public function edit(Product $product)
    {
        $categories = $this->categoryRepository->all();
        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->productRepository->update($request->all(), $product);
        return redirect()->route('products.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Summary of destroy
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $this->productRepository->delete($product);
        return redirect()->route('products.index')->with(['message' => 'Successfully deleted!']);
    }
}
