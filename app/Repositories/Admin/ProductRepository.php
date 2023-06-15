<?php

namespace App\Repositories\Admin;

use App\Models\Product;
use App\Repositories\Admin\ProductRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function index()
    {
        $products = Product::select('products.*')
        ->with([
        'category' => function ($category) {
            $category->select(['id', 'name']);
        }, 'subcategory' => function ($subcategory) {
            $subcategory->select(['id', 'name']);
        }]);
        return Datatables::of($products)
            ->addColumn('action', function ($product) {
                return '<a href="' . route('products.show', ['product' => $product]) . '"class="btn btn-xs btn-info action-buttons">
                <i class="fa fa-eye"></i>Show</a>
                <a href="' . route('products.edit', ['product' => $product]) . '"class="btn btn-xs btn-primary action-buttons">
                                <i class="fa fa-edit"></i>Edit</a>
                            <form method="POST"action="' . route('products.destroy', ['product' => $product]) . '">
                                <input type="hidden" name="_token" value="' . csrf_token() . '"/>
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-xs btn-danger action-buttons" >
                                    <i class="fa fa-trash"></i>Delete
                                </button>
                            </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Summary of store
     * @param mixed $product
     * @return Product
     */
    public function store($product)
    {
        $newProduct = new Product;
        $newProduct->category_id = $product['category_id'];
        $newProduct->subcategory_id = $product['subcategory_id']?? null;
        $newProduct->name = $product['name'];
        $newProduct->description = $product['description'];
        $newProduct->is_active = $product['is_active']?? false;
        $newProduct->is_actual = $product['is_actual']?? false;
        $newProduct->save();
        if (isset($product['images'])) {
            $productImages = filesSave($product['images'], 'product', $newProduct->id);
            $newProduct->images()->insert($productImages);
        };
        return $newProduct;
    }

    /**
     * @param array $request
     * @param $category
     * @return mixed
     */
    public function update(array $request, $product)
    {
        $product->update([
            'category_id' => $request['category_id'],
            'subcategory_id' => $request['subcategory_id']?? null,
            'name' => $request['name'],
            'description' => $request['description'],
            'is_active' => $request['is_active']?? false,
            'is_actual' => $request['is_actual']?? false,
        ]);
        if (isset($request['images'])) {
            if($product->images->isNotEmpty()) {
                foreach($product->images as $img){
                    Storage::disk('product')->delete($product->id . '/' .$img->image);
                }
            }
            $product->images()->delete();
            $productImages = filesSave($request['images'], 'product', $product->id);
            $product->images()->insert($productImages);
        };
        return $product;
    }

    /**
     * Summary of delete
     * @param mixed $category
     * @return mixed
     */
    public function delete($product)
    {
        if($product->images->isNotEmpty()) {
            foreach($product->images as $img){
                Storage::disk('product')->delete($product->id . '/' .$img->image);
            }
        }
        $product->images()->delete();
        return $product->delete();
    }
}
